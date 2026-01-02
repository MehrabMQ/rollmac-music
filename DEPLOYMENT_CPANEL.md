# Deployment on cPanel (Shared Hosting)

## 1) Create a virtualenv

```bash
cd /home/USER/rollmac-music
python3 -m venv venv
source venv/bin/activate
pip install -r requirements.txt
```

## 2) Configure credentials

Create `config.json`:

```json
{
  "api_id": 12345,
  "api_hash": "YOUR_API_HASH",
  "session_name": "X",
  "admin_id": 123456789
}
```

Upload your existing `X.session` next to `config.json`.

## 3) Run the bot (nohup)

```bash
nohup ./RUN.sh > logs/nohup.log 2>&1 &
```

## 4) Run the API manually (optional)

```bash
source venv/bin/activate
uvicorn selfbot.api:app --host 0.0.0.0 --port 8000
```

## 5) Cron watchdog

Add a cron entry to keep the watchdog alive:

```bash
* * * * * cd /home/USER/rollmac-music && /home/USER/rollmac-music/venv/bin/python watchdog.py >> logs/nohup.log 2>&1
```
