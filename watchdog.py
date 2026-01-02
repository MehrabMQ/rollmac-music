import os
import time
from pathlib import Path

from selfbot.runner import start_bot_process, status

LOCK_FILE = Path("tmp/watchdog.lock")


def acquire_lock() -> bool:
    try:
        fd = os.open(LOCK_FILE, os.O_CREAT | os.O_EXCL | os.O_WRONLY)
        os.close(fd)
        return True
    except FileExistsError:
        return False


def main():
    if not acquire_lock():
        return
    try:
        while True:
            info = status()
            if not info["running"]:
                start_bot_process()
            time.sleep(10)
    finally:
        if LOCK_FILE.exists():
            LOCK_FILE.unlink()


if __name__ == "__main__":
    main()
