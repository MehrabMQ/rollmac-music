import json
import sys
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
sys.path.insert(0, str(ROOT))

from selfbot import commands


def test_toggle_command_coverage():
    data = json.loads(Path("golden_commands.json").read_text(encoding="utf-8"))
    expected = set(data["toggle"])
    implemented = set(commands.TOGGLE_FILE_COMMANDS.keys()) | set(commands.TOGGLE_DATA_COMMANDS.keys())
    missing = expected - implemented
    assert not missing, f"Missing toggle commands: {sorted(missing)}"
