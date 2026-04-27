#!/usr/bin/env python3
import http.server
import io
import os
import time
import threading
from pathlib import Path

PORT = 3000
DIRECTORY = Path(__file__).parent

file_times = {}
change_event = threading.Event()

def watch_files():
    while True:
        for f in DIRECTORY.rglob("*"):
            if f.is_file() and ".git" not in str(f):
                try:
                    mtime = f.stat().st_mtime
                    if f in file_times and file_times[f] != mtime:
                        change_event.set()
                    file_times[f] = mtime
                except:
                    pass
        time.sleep(0.5)

RELOAD_SCRIPT = b'<script>new EventSource("/__livereload").onmessage=()=>location.reload();</script>'

class Handler(http.server.SimpleHTTPRequestHandler):
    def __init__(self, *args, **kwargs):
        super().__init__(*args, directory=str(DIRECTORY), **kwargs)

    def do_GET(self):
        if self.path == "/__livereload":
            self.send_response(200)
            self.send_header("Content-Type", "text/event-stream")
            self.send_header("Cache-Control", "no-cache")
            self.end_headers()
            change_event.clear()
            try:
                while True:
                    if change_event.wait(timeout=25):
                        self.wfile.write(b"data: reload\n\n")
                        self.wfile.flush()
                        change_event.clear()
                    else:
                        self.wfile.write(b": ping\n\n")
                        self.wfile.flush()
            except:
                pass
            return
        super().do_GET()

    def send_head(self):
        path = self.translate_path(self.path)
        if os.path.isdir(path):
            path = os.path.join(path, "index.html")
        if path.endswith(".html") and os.path.isfile(path):
            with open(path, "rb") as f:
                content = f.read()
            content = content.replace(b"</body>", RELOAD_SCRIPT + b"</body>")
            self.send_response(200)
            self.send_header("Content-Type", "text/html; charset=utf-8")
            self.send_header("Content-Length", str(len(content)))
            self.end_headers()
            return io.BytesIO(content)
        return super().send_head()

    def log_message(self, format, *args):
        pass

if __name__ == "__main__":
    threading.Thread(target=watch_files, daemon=True).start()
    with http.server.ThreadingHTTPServer(("", PORT), Handler) as httpd:
        print(f"Dev server: http://localhost:{PORT}")
        httpd.serve_forever()
