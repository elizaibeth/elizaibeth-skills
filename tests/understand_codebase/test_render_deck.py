"""Scenario tests: render deck JSON files into HTML through the command line."""

import json
import subprocess
import sys
import tempfile
import unittest
from pathlib import Path

SCRIPT = Path(__file__).resolve().parents[2] / "skills/understand-codebase/scripts/render_deck.py"

DECK = {
    "title": "Shop: codebase tour",
    "commit": "abc1234",
    "slides": [
        {"layout": "cover", "eyebrow": "Codebase tour", "title": "Shop", "subtitle": "Sells things.", "notes": "Say hello."},
        {"layout": "statement", "text": "Code decides; the model assists."},
        {"layout": "stats", "title": "In 30 seconds", "items": [{"value": "3", "label": "services"}]},
        {"layout": "steps", "title": "The journey", "rows": [
            {"text": "Customer orders", "by": "customer", "ref": "api/orders.py:12"},
            {"text": "Price the basket <fast>", "by": "code", "ref": "pricing.py:1"}],
         "source": "api/orders.py", "files": ["api/orders.py"]},
        {"layout": "table", "title": "Stack", "columns": ["Layer", "Uses"], "rows": [["Web", "FastAPI"]]},
        {"layout": "cards", "title": "Patterns", "items": [{"title": "State machine", "text": "A table.", "ref": "domain.py:5"}]},
        {"layout": "bars", "title": "Hotspots", "items": [{"label": "store.py", "value": 16}, {"label": "main.py", "value": 8}],
         "side": [{"title": "No CI", "text": "Templates only."}]},
        {"layout": "list", "title": "Open questions", "items": ["Is it fast? <script>alert(1)</script>"]},
    ],
}


def render(deck: dict) -> tuple[subprocess.CompletedProcess[str], str]:
    with tempfile.TemporaryDirectory() as tmp:
        source, target = Path(tmp) / "deck.json", Path(tmp) / "out" / "deck.html"
        source.write_text(json.dumps(deck))
        done = subprocess.run(
            [sys.executable, str(SCRIPT), str(source), str(target)], capture_output=True, text=True
        )
        return done, target.read_text() if target.exists() else ""


class RenderADeck(unittest.TestCase):
    @classmethod
    def setUpClass(cls) -> None:
        cls.done, cls.page = render(DECK)

    def test_writes_one_section_per_slide(self) -> None:
        self.assertEqual(self.done.returncode, 0, self.done.stderr)
        self.assertIn("(8 slides)", self.done.stdout)
        self.assertEqual(self.page.count('<section class="slide'), 8)

    def test_every_layout_shows_its_content(self) -> None:
        for text in ("Sells things.", "Code decides; the model assists.", "services", "Done by",
                     "api/orders.py:12", "FastAPI", "State machine", "store.py", "No CI", "Open questions"):
            self.assertIn(text, self.page)

    def test_bars_scale_to_the_largest_value(self) -> None:
        self.assertIn("width:100%", self.page)
        self.assertIn("width:50%", self.page)

    def test_text_is_escaped(self) -> None:
        self.assertNotIn("<script>alert(1)</script>", self.page)
        self.assertIn("&lt;fast&gt;", self.page)

    def test_notes_and_meta_are_included(self) -> None:
        self.assertIn('<aside class="notes">Say hello.</aside>', self.page)
        self.assertIn("abc1234", self.page)
        self.assertIn("<title>Shop: codebase tour</title>", self.page)


class RejectABadDeck(unittest.TestCase):
    def test_reports_every_problem_and_writes_nothing(self) -> None:
        deck = {"slides": [{"layout": "chart", "title": "x"},
                           {"layout": "table", "title": "t", "columns": []},
                           {"layout": "list", "items": [], "colour": "red"}]}
        done, page = render(deck)
        self.assertNotEqual(done.returncode, 0)
        self.assertIn("slide 1: unknown layout 'chart'", done.stderr)
        self.assertIn("slide 2 (table): missing 'rows'", done.stderr)
        self.assertIn("slide 3 (list): missing 'title'", done.stderr)
        self.assertIn("unknown keys ['colour']", done.stderr)
        self.assertEqual(page, "")

    def test_rejects_an_empty_deck(self) -> None:
        done, _ = render({"slides": []})
        self.assertIn("non-empty 'slides' list", done.stderr)


if __name__ == "__main__":
    unittest.main()
