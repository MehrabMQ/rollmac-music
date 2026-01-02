from fastapi import FastAPI, HTTPException
from fastapi.responses import PlainTextResponse

from . import state
from .runner import start_bot_process, status, stop_bot_process

app = FastAPI()


@app.get("/status")
async def get_status():
    return status()


@app.post("/start")
async def start_bot():
    info = status()
    if info["running"]:
        return info
    pid = start_bot_process()
    return {"pid": pid, "running": True}


@app.post("/stop")
async def stop_bot():
    stopped = stop_bot_process()
    return {"stopped": stopped}


@app.post("/restart")
async def restart_bot():
    stop_bot_process()
    pid = start_bot_process()
    return {"pid": pid, "running": True}


@app.get("/logs", response_class=PlainTextResponse)
async def read_logs():
    log_path = "logs/MadelineProto.log"
    try:
        return PlainTextResponse(content=state.read_text(log_path))
    except FileNotFoundError as exc:
        raise HTTPException(status_code=404, detail="log not found") from exc


@app.get("/state/{name}")
async def read_state(name: str):
    try:
        return {"value": state.read_text(name)}
    except FileNotFoundError as exc:
        raise HTTPException(status_code=404, detail="state file not found") from exc


@app.post("/state/{name}")
async def write_state(name: str, value: str):
    state.write_text(name, value)
    return {"value": value}
