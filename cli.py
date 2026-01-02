import argparse
import subprocess
import sys
import time

from selfbot import config as config_module
from selfbot.bot import run_bot_forever
from selfbot.runner import start_bot_process, status, stop_bot_process


def cmd_run(_args):
    config = config_module.load_config()
    run_bot_forever(config)


def cmd_status(_args):
    info = status()
    print(f"running={info['running']} pid={info['pid']}")


def cmd_start(_args):
    info = status()
    if info["running"]:
        print("already running")
        return
    pid = start_bot_process()
    print(f"started pid={pid}")


def cmd_stop(_args):
    if stop_bot_process():
        print("stopped")
    else:
        print("not running")


def cmd_restart(_args):
    stop_bot_process()
    pid = start_bot_process()
    print(f"restarted pid={pid}")


def cmd_validate(_args):
    config = config_module.load_config()
    missing = [key for key in ("api_id", "api_hash") if not config.get(key)]
    if missing:
        print("missing config:", ", ".join(missing))
        sys.exit(1)
    print("config ok")


def cmd_tail(args):
    log_file = args.log
    with open(log_file, "r", encoding="utf-8") as handle:
        handle.seek(0, 2)
        while True:
            line = handle.readline()
            if not line:
                time.sleep(0.5)
                continue
            print(line, end="")


def build_parser():
    parser = argparse.ArgumentParser(description="Selfbot CLI")
    sub = parser.add_subparsers(dest="command", required=True)

    sub.add_parser("run")
    sub.add_parser("status")
    sub.add_parser("start")
    sub.add_parser("stop")
    sub.add_parser("restart")
    sub.add_parser("validate")

    tail = sub.add_parser("tail")
    tail.add_argument("--log", default="logs/MadelineProto.log")

    return parser


def main():
    parser = build_parser()
    args = parser.parse_args()
    commands = {
        "run": cmd_run,
        "status": cmd_status,
        "start": cmd_start,
        "stop": cmd_stop,
        "restart": cmd_restart,
        "validate": cmd_validate,
        "tail": cmd_tail,
    }
    commands[args.command](args)


if __name__ == "__main__":
    main()
