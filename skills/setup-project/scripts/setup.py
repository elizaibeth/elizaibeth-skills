#!/usr/bin/env python3
"""Mechanical steps for the setup-project skill. Standard library only.

  setup.py scaffold <target>         create missing convention files; list files to merge
  setup.py tags <image>[~text] ...   recent stable tags from Docker Hub, newest first
  setup.py tags gh:<owner>/<repo>    recent GitHub releases, newest first
"""

import json
import re
import sys
import urllib.request
from pathlib import Path

TEMPLATES = Path(__file__).resolve().parent.parent / "templates"
PRERELEASE = re.compile(r"(alpha|beta|rc|dev|preview|nightly|edge|latest)", re.I)
ISSUE_META = {
    "issue-bug.md": ("Bug report", "Something does not work as expected", "bug"),
    "issue-feature.md": ("Feature request", "Request a new outcome", "enhancement"),
}


def scaffold(target: Path) -> None:
    created, merge = [], []

    def put(rel: str, text: str) -> None:
        path = target / rel
        if path.exists():
            if path.read_text() != text:
                merge.append(rel)
            return
        path.parent.mkdir(parents=True, exist_ok=True)
        path.write_text(text)
        created.append(rel)

    put("AGENTS.md", (TEMPLATES / "AGENTS.md").read_text())
    put("CONTRIBUTING.md", (TEMPLATES / "CONTRIBUTING.md").read_text())
    put("CLAUDE.md", "@AGENTS.md\n")
    if (target / ".git").exists() or (target / ".github").exists():
        put(".github/pull_request_template.md", (TEMPLATES / "pull-request.md").read_text())
        for name, (title, about, label) in ISSUE_META.items():
            meta = f"---\nname: {title}\nabout: {about}\nlabels: {label}\n---\n\n"
            put(f".github/ISSUE_TEMPLATE/{name.removeprefix('issue-')}", meta + (TEMPLATES / name).read_text())

    for rel in created:
        print(f"created  {rel}")
    for rel in merge:
        print(f"merge    {rel}  (exists and differs from the template)")


def fetch(url: str) -> object:
    req = urllib.request.Request(url, headers={"User-Agent": "setup-project-skill"})
    with urllib.request.urlopen(req, timeout=20) as resp:
        return json.load(resp)


def tags(specs: list[str]) -> None:
    for spec in specs:
        print(f"== {spec}")
        try:
            if spec.startswith("gh:"):
                for rel in fetch(f"https://api.github.com/repos/{spec[3:]}/releases?per_page=15"):
                    if not rel["prerelease"] and not rel["draft"]:
                        print(f"  {rel['tag_name']}  {rel['published_at'][:10]}")
                continue
            image, _, text = spec.partition("~")
            repo = image if "/" in image else f"library/{image}"
            url = f"https://hub.docker.com/v2/repositories/{repo}/tags?page_size=100&ordering=last_updated"
            if text:
                url += f"&name={text}"
            shown = 0
            for tag in fetch(url)["results"]:
                if PRERELEASE.search(tag["name"]) or not any(c.isdigit() for c in tag["name"]):
                    continue
                print(f"  {tag['name']}  {tag['last_updated'][:10]}")
                shown += 1
                if shown == 15:
                    break
        except Exception as exc:  # report and continue with the next spec
            print(f"  lookup failed: {exc}")


def main() -> None:
    if len(sys.argv) >= 3 and sys.argv[1] == "scaffold":
        scaffold(Path(sys.argv[2]))
    elif len(sys.argv) >= 3 and sys.argv[1] == "tags":
        tags(sys.argv[2:])
    else:
        sys.exit(__doc__)


if __name__ == "__main__":
    main()
