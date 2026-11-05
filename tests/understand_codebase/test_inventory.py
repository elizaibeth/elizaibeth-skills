"""Scenario tests: run inventory.py on small repositories and read its report."""

import os
import subprocess
import sys
import tempfile
import unittest
from pathlib import Path

SCRIPT = Path(__file__).resolve().parents[2] / "skills/understand-codebase/scripts/inventory.py"
GIT_ENV = {
    **os.environ,
    "GIT_AUTHOR_NAME": "Ada", "GIT_AUTHOR_EMAIL": "ada@example.com",
    "GIT_COMMITTER_NAME": "Ada", "GIT_COMMITTER_EMAIL": "ada@example.com",
}


def write(root: Path, files: dict[str, str]) -> None:
    for name, text in files.items():
        path = root / name
        path.parent.mkdir(parents=True, exist_ok=True)
        path.write_text(text)


def commit(root: Path, message: str) -> None:
    subprocess.run(["git", "add", "-A"], cwd=root, check=True, env=GIT_ENV)
    subprocess.run(
        ["git", "-c", "commit.gpgsign=false", "commit", "-qm", message],
        cwd=root, check=True, env=GIT_ENV,
    )


def inventory(root: Path) -> str:
    done = subprocess.run(
        [sys.executable, str(SCRIPT), str(root)], capture_output=True, text=True, check=True
    )
    return done.stdout


class InventoryOfAGitRepository(unittest.TestCase):
    @classmethod
    def setUpClass(cls) -> None:
        cls.tmp = tempfile.TemporaryDirectory()
        root = Path(cls.tmp.name)
        subprocess.run(["git", "init", "-q", "-b", "main"], cwd=root, check=True)
        write(root, {
            "pyproject.toml": "[project]\nname = 'shop'\n",
            "Dockerfile": "FROM python:3.12\nCMD [\"uvicorn\", \"shop.main:app\"]\n",
            "src/shop/main.py": "from fastapi import FastAPI\n\napp = FastAPI()\n\n\n@app.get('/orders')\ndef orders():\n    return []\n",
            "src/shop/pricing.py": "def price(items):\n    total = 0\n    for i in items:\n        if i > 3:\n            total += i\n        elif i:\n            total -= 1\n    return total\n",
            "src/shop/timers.py": "def remind():\n    return 1\n",
            "docs/DECISIONS.md": "# Decisions\nReminders fire after 24 hours.\n",
            "tests/test_pricing.py": "def test_empty():\n    pass\n\n\ndef test_big():\n    pass\n",
            "evals/results/run-1/summary.json": "{\"passed\": 9}\n",
            "uv.lock": "lock\n",
            "node_modules/x/index.js": "ignored\n",
        })
        commit(root, "feat: first version")
        for n in range(3):
            write(root, {"src/shop/pricing.py": (root / "src/shop/pricing.py").read_text() + f"# {n}\n",
                         "tests/test_pricing.py": (root / "tests/test_pricing.py").read_text() + f"# {n}\n"})
            commit(root, f"fix: pricing {n}")
        (root / "src/shop/timers.py").unlink()
        commit(root, "refactor: remove timers and reminders")
        cls.report = inventory(root)

    @classmethod
    def tearDownClass(cls) -> None:
        cls.tmp.cleanup()

    def test_entry_points_cite_file_and_line(self) -> None:
        self.assertIn("src/shop/main.py:3  web app", self.report)
        self.assertIn("src/shop/main.py:6  route", self.report)
        self.assertIn("Dockerfile:2  container start", self.report)

    def test_removal_commits_flag_features_docs_may_still_describe(self) -> None:
        self.assertIn("refactor: remove timers and reminders", self.report)
        self.assertNotIn("fix: pricing 0", self.report.split("== removal commits")[1])

    def test_docs_are_listed_as_leads(self) -> None:
        self.assertIn("leads only: confirm every behavior in the code", self.report)
        self.assertIn("docs/DECISIONS.md", self.report)

    def test_saved_results_and_tests_are_found(self) -> None:
        self.assertIn("evals/results/run-1/summary.json", self.report)
        self.assertIn("1 test files, about 2 test cases", self.report)
        self.assertIn("no CI workflow found", self.report)

    def test_hotspots_and_coupling_come_from_history(self) -> None:
        hotspots = self.report.split("== hotspots")[1].split("==")[0]
        self.assertIn("4  src/shop/pricing.py", hotspots)
        self.assertIn("src/shop/pricing.py  <->  tests/test_pricing.py", self.report)
        self.assertIn("every file has a single owner", self.report)

    def test_complex_functions_are_ranked(self) -> None:
        self.assertIn("src/shop/pricing.py:1 price", self.report)

    def test_lock_vendored_and_deleted_files_are_skipped(self) -> None:
        self.assertNotIn("uv.lock", self.report)
        self.assertNotIn("node_modules", self.report)
        self.assertNotIn("timers.py", self.report.split("== hotspots")[1].split("== removal")[0])


class InventoryOfAPlainDirectory(unittest.TestCase):
    def test_works_without_git_and_skips_history(self) -> None:
        with tempfile.TemporaryDirectory() as tmp:
            root = Path(tmp)
            write(root, {"cmd/app/main.go": "package main\n\nfunc main() {\n}\n"})
            report = inventory(root)
        self.assertIn("not a git repository", report)
        self.assertIn("cmd/app/main.go:3  Go main", report)
        self.assertNotIn("== hotspots", report)


if __name__ == "__main__":
    unittest.main()
