import json
import os
from pathlib import Path

DEFAULT_CONFIG = {
    "api_id": None,
    "api_hash": None,
    "session_name": "X",
    "helper_bot": "@Ggfugdfgfddffbot",
    "base_url": "",
    "log_file": "logs/MadelineProto.log",
    "nohup_log": "logs/nohup.log",
    "admin_id": None,
}


def load_config(path: str = "config.json") -> dict:
    config = DEFAULT_CONFIG.copy()
    cfg_path = Path(path)
    if cfg_path.exists():
        with cfg_path.open("r", encoding="utf-8") as handle:
            data = json.load(handle)
        config.update({k: v for k, v in data.items() if v is not None})
    config.update({
        "api_id": os.getenv("TELEGRAM_API_ID", config["api_id"]),
        "api_hash": os.getenv("TELEGRAM_API_HASH", config["api_hash"]),
        "session_name": os.getenv("TELETHON_SESSION", config["session_name"]),
        "helper_bot": os.getenv("HELPER_BOT", config["helper_bot"]),
        "base_url": os.getenv("BASE_URL", config["base_url"]),
        "log_file": os.getenv("BOT_LOG_FILE", config["log_file"]),
        "nohup_log": os.getenv("NOHUP_LOG", config["nohup_log"]),
        "admin_id": os.getenv("ADMIN_ID", config["admin_id"]),
    })
    if isinstance(config["admin_id"], str) and config["admin_id"].isdigit():
        config["admin_id"] = int(config["admin_id"])
    return config
