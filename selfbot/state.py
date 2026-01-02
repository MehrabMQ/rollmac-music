import json
from pathlib import Path

DEFAULT_TEXT_FILES = {
    "online.txt": "off",
    "timepic.txt": "off",
    "part.txt": "off",
    "timename.txt": "off",
    "timename1.txt": "off",
    "timename2.txt": "off",
    "timebio1.txt": "off",
    "timebio2.txt": "off",
    "bioen.txt": "off",
    "biofa.txt": "off",
    "fontbio.txt": "off",
    "hashtag.txt": "off",
    "mention.txt": "off",
    "bold.txt": "off",
    "bod.txt": "off",
    "italic.txt": "off",
    "underline.txt": "off",
    "deleted.txt": "off",
    "mention2.txt": "off",
    "coding.txt": "off",
    "reversemode.txt": "off",
}

DEFAULT_DATA = {
    "power": "on",
    "adminStep": "",
    "markread": "off",
    "fontname": "off",
    "History": "off",
    "fontbio": "off",
    "timepic": "off",
    "tas": "off",
    "lockpv": "off",
    "timename1": "off",
    "timename2": "off",
    "timebio1": "off",
    "timebio2": "off",
    "bioen": "off",
    "biofa": "off",
    "typing": "off",
    "pvtyping": "off",
    "photo": "off",
    "funny": "off",
    "echo": "off",
    "lockpv1": "off",
    "lockgp": "off",
    "gamepv": "off",
    "autochat": "off",
    "poker": "off",
    "voice": "off",
    "video": "off",
    "game": "off",
    "Muted": [],
    "enemies": [],
    "answering": [],
}


def ensure_directories() -> None:
    for folder in ("files", "logs", "tmp"):
        Path(folder).mkdir(parents=True, exist_ok=True)


def ensure_state_files() -> None:
    ensure_directories()
    for filename, content in DEFAULT_TEXT_FILES.items():
        path = Path(filename)
        if not path.exists():
            path.write_text(content, encoding="utf-8")
    data_path = Path("data.json")
    if not data_path.exists():
        data_path.write_text(json.dumps(DEFAULT_DATA, ensure_ascii=False), encoding="utf-8")


def read_text(path: str) -> str:
    return Path(path).read_text(encoding="utf-8").strip()


def write_text(path: str, value: str) -> None:
    Path(path).write_text(value, encoding="utf-8")


def load_data() -> dict:
    return json.loads(Path("data.json").read_text(encoding="utf-8"))


def save_data(data: dict) -> None:
    Path("data.json").write_text(json.dumps(data, ensure_ascii=False), encoding="utf-8")
