import logging
from logging.handlers import RotatingFileHandler


def configure_logging(log_file: str, level: int = logging.INFO) -> None:
    logger = logging.getLogger()
    if logger.handlers:
        return
    logger.setLevel(level)
    handler = RotatingFileHandler(log_file, maxBytes=5 * 1024 * 1024, backupCount=3)
    formatter = logging.Formatter(
        "%(asctime)s [%(levelname)s] %(name)s: %(message)s",
        datefmt="%Y-%m-%d %H:%M:%S",
    )
    handler.setFormatter(formatter)
    logger.addHandler(handler)
    console = logging.StreamHandler()
    console.setFormatter(formatter)
    logger.addHandler(console)
