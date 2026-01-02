import asyncio
import logging
import time
from datetime import datetime
from pathlib import Path
from typing import Optional

from telethon import TelegramClient, events
from telethon.errors import RPCError
from telethon.tl import functions

from . import commands, config as config_module, state
from .logging_utils import configure_logging

LOGGER = logging.getLogger(__name__)


async def periodic_profile_updates(client: TelegramClient) -> None:
    while True:
        try:
            if state.read_text("online.txt") == "on":
                await client(functions.account.UpdateStatusRequest(offline=False))
            now = datetime.now()
            minute = now.strftime("%M")
            if minute in {"20", "40", "00"}:
                await asyncio.sleep(60)
                await client.disconnect()
            if state.read_text("timepic.txt") == "on":
                time_str = now.strftime("%H:%M")
                url = (
                    "https://bcassetcdn.com/asset/logo/e7b2b2cb-aed9-4ca2-b4bc-61d4414d891b/"
                    f"logo?v=4&text={time_str}"
                )
                time_path = Path("time.jpg")
                try:
                    import requests

                    response = requests.get(url, timeout=15)
                    response.raise_for_status()
                    time_path.write_bytes(response.content)
                    await client(functions.photos.DeletePhotosRequest(id=[]))
                    await client.upload_profile_photo(time_path)
                finally:
                    if time_path.exists():
                        time_path.unlink()
        except Exception as exc:
            LOGGER.warning("profile update failed: %s", exc)
        await asyncio.sleep(60)


async def handle_message(event, admin_id: int) -> None:
    message = event.message
    if not message or not message.message:
        return
    if time.time() - message.date.timestamp() > 2:
        return
    sender = await message.get_sender()
    if not sender:
        return
    if sender.id != admin_id:
        return

    result = await commands.handle_admin_command(event.client, message, admin_id)
    if result.handled:
        if result.response:
            if result.edit:
                await event.client.edit_message(
                    message.chat_id,
                    message.id,
                    result.response,
                    parse_mode=result.parse_mode,
                    link_preview=not result.no_webpage,
                )
            else:
                await event.client.send_message(
                    message.chat_id,
                    result.response,
                    parse_mode=result.parse_mode,
                    link_preview=not result.no_webpage,
                )
        return

    await commands.apply_modes(event.client, message, admin_id)


async def run_bot(config: dict) -> None:
    state.ensure_state_files()
    api_id = config.get("api_id")
    api_hash = config.get("api_hash")
    session_name = config.get("session_name") or "X"
    if not api_id or not api_hash:
        raise RuntimeError("Missing TELEGRAM_API_ID or TELEGRAM_API_HASH")

    admin_id = config.get("admin_id")
    client = TelegramClient(session_name, api_id, api_hash)
    await client.start()
    if not admin_id:
        me = await client.get_me()
        admin_id = me.id
    LOGGER.info("bot started with admin id %s", admin_id)

    client.add_event_handler(lambda e: handle_message(e, admin_id), events.NewMessage())

    asyncio.create_task(periodic_profile_updates(client))
    await client.run_until_disconnected()


def run_bot_forever(config: dict) -> None:
    configure_logging(config["log_file"])
    backoff = 5
    while True:
        try:
            asyncio.run(run_bot(config))
        except (RPCError, OSError, RuntimeError) as exc:
            LOGGER.warning("bot crash: %s", exc)
        except KeyboardInterrupt:
            raise
        time.sleep(backoff)
        backoff = min(backoff * 2, 300)
