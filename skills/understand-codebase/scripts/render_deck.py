#!/usr/bin/env python3
"""Render a deck JSON file as one self-contained HTML slide deck. Standard library only.

  render_deck.py <deck.json> <deck.html>

Keys: right, space or click for next; left for back; N shows speaker notes;
the URL hash (#3) opens a slide. Printing gives one slide per page.
Layouts and their fields are in LAYOUTS below.
"""

import html
import json
import sys
from pathlib import Path

LAYOUTS = {
    "cover": {"required": ["title"], "optional": ["eyebrow", "subtitle"]},
    "statement": {"required": ["text"], "optional": ["sub"]},
    "stats": {"required": ["items"], "optional": ["text"]},
    "steps": {"required": ["rows"], "optional": ["caption"]},
    "table": {"required": ["columns", "rows"], "optional": ["caption"]},
    "cards": {"required": ["items"], "optional": ["caption"]},
    "bars": {"required": ["items"], "optional": ["caption", "side"]},
    "list": {"required": ["items"], "optional": ["text"]},
}
COMMON = {"layout", "title", "notes", "source", "files"}


class DeckError(ValueError):
    """The deck JSON does not match the layouts."""


def e(value: object) -> str:
    return html.escape(str(value), quote=True)


def validate(deck: dict) -> None:
    problems = []
    if not isinstance(deck.get("slides"), list) or not deck["slides"]:
        raise DeckError("deck needs a non-empty 'slides' list")
    for number, slide in enumerate(deck["slides"], 1):
        layout = slide.get("layout")
        if layout not in LAYOUTS:
            problems.append(f"slide {number}: unknown layout {layout!r}; use one of {', '.join(LAYOUTS)}")
            continue
        spec = LAYOUTS[layout]
        for key in spec["required"]:
            if key not in slide:
                problems.append(f"slide {number} ({layout}): missing '{key}'")
        if layout != "cover" and "title" not in slide and layout != "statement":
            problems.append(f"slide {number} ({layout}): missing 'title'")
        extra = set(slide) - COMMON - set(spec["required"]) - set(spec["optional"])
        if extra:
            problems.append(f"slide {number} ({layout}): unknown keys {sorted(extra)}")
    if problems:
        raise DeckError("\n".join(problems))


def ref(value: str | None) -> str:
    return f'<span class="ref">{e(value)}</span>' if value else ""


def body(slide: dict) -> str:
    layout = slide["layout"]
    if layout == "cover":
        return (
            (f'<p class="eyebrow">{e(slide["eyebrow"])}</p>' if slide.get("eyebrow") else "")
            + f'<h1>{e(slide["title"])}</h1>'
            + (f'<p class="lead">{e(slide["subtitle"])}</p>' if slide.get("subtitle") else "")
        )
    if layout == "statement":
        return f'<p class="statement">{e(slide["text"])}</p>' + (
            f'<p class="lead">{e(slide["sub"])}</p>' if slide.get("sub") else ""
        )
    if layout == "stats":
        items = "".join(
            f'<div class="stat"><b>{e(i["value"])}</b><span>{e(i["label"])}</span></div>'
            for i in slide["items"]
        )
        text = f'<p class="lead">{e(slide["text"])}</p>' if slide.get("text") else ""
        return f'{text}<div class="stats">{items}</div>'
    if layout == "steps":
        has_by = any("by" in r for r in slide["rows"])
        head = "<tr><th>#</th><th>Step</th>" + ("<th>Done by</th>" if has_by else "") + "<th>Where</th></tr>"
        rows = "".join(
            f'<tr><td class="n">{n}</td><td>{e(r["text"])}</td>'
            + (f'<td><span class="by">{e(r.get("by", ""))}</span></td>' if has_by else "")
            + f'<td>{ref(r.get("ref"))}</td></tr>'
            for n, r in enumerate(slide["rows"], 1)
        )
        return f"<table>{head}{rows}</table>" + caption(slide)
    if layout == "table":
        head = "<tr>" + "".join(f"<th>{e(c)}</th>" for c in slide["columns"]) + "</tr>"
        rows = "".join("<tr>" + "".join(f"<td>{e(c)}</td>" for c in r) + "</tr>" for r in slide["rows"])
        return f"<table>{head}{rows}</table>" + caption(slide)
    if layout == "cards":
        items = "".join(
            f'<div class="card"><h3>{e(i["title"])}</h3><p>{e(i.get("text", ""))}</p>{ref(i.get("ref"))}</div>'
            for i in slide["items"]
        )
        return f'<div class="cards n{min(len(slide["items"]), 4)}">{items}</div>' + caption(slide)
    if layout == "bars":
        top = max((float(i["value"]) for i in slide["items"]), default=1) or 1
        bars = "".join(
            f'<div class="bar"><span class="ref">{e(i["label"])}</span>'
            f'<i style="width:{float(i["value"]) / top * 100:.0f}%"></i><b>{e(i["value"])}</b></div>'
            for i in slide["items"]
        )
        side = "".join(
            f'<div><h3>{e(s["title"])}</h3><p>{e(s.get("text", ""))}</p></div>' for s in slide.get("side", [])
        )
        chart = f'<div class="chart">{bars}{caption(slide)}</div>'
        return f'<div class="split">{chart}<div class="side">{side}</div></div>' if side else chart
    items = "".join(f"<li>{e(i)}</li>" for i in slide["items"])
    text = f'<p class="lead">{e(slide["text"])}</p>' if slide.get("text") else ""
    return f'{text}<ul class="list">{items}</ul>'


def caption(slide: dict) -> str:
    return f'<p class="caption">{e(slide["caption"])}</p>' if slide.get("caption") else ""


def render(deck: dict) -> str:
    validate(deck)
    sections = []
    total = len(deck["slides"])
    for number, slide in enumerate(deck["slides"], 1):
        title = f'<h2>{e(slide["title"])}</h2>' if slide.get("title") and slide["layout"] != "cover" else ""
        source = f'<p class="source">{e(slide["source"])}</p>' if slide.get("source") else ""
        notes = f'<aside class="notes">{e(slide["notes"])}</aside>' if slide.get("notes") else ""
        sections.append(
            f'<section class="slide {slide["layout"]}" data-n="{number}">{title}{body(slide)}'
            f'{source}<p class="page">{number} / {total}</p>{notes}</section>'
        )
    meta = " · ".join(e(v) for v in (deck.get("commit"), deck.get("date")) if v)
    return PAGE.format(title=e(deck.get("title", "Codebase deck")), meta=meta, slides="\n".join(sections))


PAGE = """<!doctype html>
<html lang="en"><head><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{title}</title>
<style>
:root{{--bg:#f5f3ee;--panel:#fbfaf7;--alt:#e8e6df;--ink:#16243a;--soft:#4a5568;--mute:#6b7280;--accent:#a2581a;--line:#d6d3ca;--chip:#f6e7d6}}
@media (prefers-color-scheme:dark){{:root:not([data-theme="light"]){{--bg:#121a26;--panel:#1b2636;--alt:#18212f;--ink:#eef0f3;--soft:#b9c4d2;--mute:#8f9bab;--accent:#e9b872;--line:#2c3a4f;--chip:#3a2f22}}}}
:root[data-theme="dark"]{{--bg:#121a26;--panel:#1b2636;--alt:#18212f;--ink:#eef0f3;--soft:#b9c4d2;--mute:#8f9bab;--accent:#e9b872;--line:#2c3a4f;--chip:#3a2f22}}
*{{box-sizing:border-box;margin:0}}
html,body{{height:100%;background:#0b0f16;font-family:system-ui,-apple-system,"Segoe UI",Roboto,sans-serif}}
#stage{{position:fixed;inset:0;display:grid;place-items:center;overflow:hidden}}
.slide{{position:absolute;width:1600px;height:900px;padding:88px 104px;background:var(--bg);color:var(--ink);display:none;flex-direction:column;gap:32px;transform-origin:center}}
.slide.on{{display:flex}}
.slide:nth-child(even){{background:var(--alt)}}
.slide.cover,.slide.statement{{justify-content:center;background:var(--ink);color:var(--bg)}}
.cover .eyebrow{{font:600 22px/1.4 ui-monospace,Menlo,monospace;color:var(--accent);letter-spacing:2px}}
h1{{font-size:96px;line-height:1.05}}
h2{{font-size:52px;line-height:1.1}}
h3{{font-size:26px;margin-bottom:8px}}
.lead{{font-size:30px;line-height:1.45;color:var(--soft);max-width:1300px}}
.cover .lead,.statement .lead{{color:inherit;opacity:.8}}
.statement{{font-size:64px;font-weight:700;line-height:1.15}}
table{{border-collapse:collapse;width:100%;font-size:23px}}
th{{text-align:left;color:var(--mute);font-weight:600;padding:10px 14px;border-bottom:2px solid var(--line)}}
td{{padding:12px 14px;border-bottom:1px solid var(--line);vertical-align:top;line-height:1.35}}
td.n{{font:600 22px ui-monospace,Menlo,monospace;color:var(--accent);width:56px}}
.by{{background:var(--chip);padding:3px 10px;border-radius:6px;font-size:20px;white-space:nowrap}}
.ref{{font:20px/1.4 ui-monospace,Menlo,monospace;color:var(--mute)}}
.stats{{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:20px}}
.stat{{background:var(--panel);border-radius:14px;padding:24px 28px;display:flex;flex-direction:column;gap:6px}}
.stat b{{font-size:60px;color:var(--accent)}}.stat span{{font-size:22px;color:var(--soft)}}
.cards{{display:grid;gap:20px}}.cards.n1{{grid-template-columns:1fr}}.cards.n2,.cards.n4{{grid-template-columns:1fr 1fr}}.cards.n3{{grid-template-columns:1fr 1fr 1fr}}
.card{{background:var(--panel);border-radius:14px;padding:26px 30px;display:flex;flex-direction:column;gap:8px}}
.card p,.side p{{font-size:22px;line-height:1.4;color:var(--soft)}}
.split{{display:grid;grid-template-columns:1.2fr 1fr;gap:40px}}
.chart{{background:var(--panel);border-radius:14px;padding:28px;display:flex;flex-direction:column;gap:14px}}
.bar{{display:grid;grid-template-columns:330px 1fr 50px;align-items:center;gap:14px;font-size:22px}}
.bar i{{display:block;height:24px;background:var(--accent);border-radius:4px}}
.side{{display:flex;flex-direction:column;gap:20px}}
.list{{font-size:32px;line-height:1.4;padding-left:36px;display:flex;flex-direction:column;gap:22px}}
.caption{{font-size:22px;color:var(--soft)}}
.source{{position:absolute;left:104px;bottom:36px;font-size:18px;color:var(--mute);max-width:1200px}}
.page{{position:absolute;right:104px;bottom:36px;font-size:18px;color:var(--mute)}}
.notes{{display:none}}
body.show-notes .slide.on .notes{{display:block;position:fixed;left:0;right:0;bottom:0;transform:none;background:#fffbe6;color:#222;font-size:18px;line-height:1.5;padding:16px 24px;max-height:30vh;overflow:auto}}
#meta{{position:fixed;left:12px;top:8px;color:#8f9bab;font:12px system-ui}}
@media (max-width:700px){{#meta{{display:none}}}}
@media print{{html,body{{background:none}}#stage{{position:static;display:block}}#meta{{display:none}}
.slide{{display:flex!important;position:relative;transform:none!important;break-after:page;page-break-after:always}}@page{{size:1600px 900px;margin:0}}}}
</style></head>
<body><div id="meta">{meta} · N for notes</div><main id="stage">
{slides}
</main>
<script>
(function(){{
  var slides=[].slice.call(document.querySelectorAll('.slide')),i=0;
  function fit(){{var s=Math.min(innerWidth/1600,innerHeight/900);slides.forEach(function(x){{x.style.transform='scale('+s+')'}})}}
  function go(n){{i=Math.max(0,Math.min(slides.length-1,n));slides.forEach(function(x,k){{x.classList.toggle('on',k===i)}});history.replaceState(null,'','#'+(i+1))}}
  addEventListener('keydown',function(ev){{
    if(['ArrowRight','PageDown',' '].indexOf(ev.key)>=0){{go(i+1);ev.preventDefault()}}
    else if(['ArrowLeft','PageUp'].indexOf(ev.key)>=0)go(i-1);
    else if(ev.key==='Home')go(0);else if(ev.key==='End')go(slides.length-1);
    else if(ev.key==='n'||ev.key==='N')document.body.classList.toggle('show-notes');
  }});
  document.getElementById('stage').addEventListener('click',function(ev){{go(ev.clientX<innerWidth/3?i-1:i+1)}});
  addEventListener('resize',fit);fit();go((parseInt(location.hash.slice(1),10)||1)-1);
}})();
</script></body></html>
"""


def main() -> None:
    if len(sys.argv) != 3:
        sys.exit(__doc__)
    source, target = Path(sys.argv[1]), Path(sys.argv[2])
    try:
        deck = json.loads(source.read_text())
        page = render(deck)
    except (OSError, json.JSONDecodeError, DeckError) as error:
        sys.exit(f"{source}: {error}")
    target.parent.mkdir(parents=True, exist_ok=True)
    target.write_text(page)
    print(f"wrote {target} ({len(deck['slides'])} slides)")


if __name__ == "__main__":
    main()
