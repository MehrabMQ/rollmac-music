import json
import re
from pathlib import Path

PHP_FILE = Path("un.php")
OUTPUT = Path("golden_commands.json")


def main():
    content = PHP_FILE.read_text(encoding="utf-8", errors="ignore")
    toggle_pattern = re.compile(r'preg_match\("/\^[^\"]*\(([^)]+)\) \(on\|off\)', re.IGNORECASE)
    toggle_commands = sorted(set(match.strip() for match in toggle_pattern.findall(content)))
    direct_matches = re.findall(r"\$msgOrig == '([^']+)'", content)
    direct_matches += re.findall(r"\$msgOrig == \"([^\"]+)\"", content)
    commands = {
        "toggle": toggle_commands,
        "direct": sorted(set(direct_matches)),
    }
    OUTPUT.write_text(json.dumps(commands, ensure_ascii=False, indent=2), encoding="utf-8")


if __name__ == "__main__":
    main()
