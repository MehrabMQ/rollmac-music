import os
import signal
import subprocess
from pathlib import Path
from typing import Optional

from . import config as config_module
from .bot import run_bot_forever

PID_FILE = Path("tmp/bot.pid")


def write_pid(pid: int) -> None:
    PID_FILE.parent.mkdir(parents=True, exist_ok=True)
    PID_FILE.write_text(str(pid), encoding="utf-8")


def read_pid() -> Optional[int]:
    if not PID_FILE.exists():
        return None
    try:
        return int(PID_FILE.read_text(encoding="utf-8").strip())
    except ValueError:
        return None


def is_running(pid: int) -> bool:
    try:
        os.kill(pid, 0)
        return True
    except OSError:
        return False


def start_bot_process() -> int:
    config = config_module.load_config()
    pid = os.fork()
    if pid == 0:
        run_bot_forever(config)
        raise SystemExit(0)
    write_pid(pid)
    return pid


def stop_bot_process() -> bool:
    pid = read_pid()
    if not pid:
        return False
    if is_running(pid):
        os.kill(pid, signal.SIGTERM)
    PID_FILE.unlink(missing_ok=True)
    return True


def status() -> dict:
    pid = read_pid()
    return {
        "pid": pid,
        "running": bool(pid and is_running(pid)),
    }
