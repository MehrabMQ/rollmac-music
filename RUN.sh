#!/usr/bin/env bash
set -euo pipefail

python3 cli.py start
python3 -m uvicorn selfbot.api:app --host 0.0.0.0 --port 8000 &
python3 watchdog.py &
wait
