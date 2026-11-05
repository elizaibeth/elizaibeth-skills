# Deck

## Slide sets

Choose the set from `--for`. Drop a slide when the codebase has nothing true to put on it; add a slide only for a component the traces show is central.

**present** (default): the owner explains the system to an audience. About 15 slides. Build the story: problem, how it works, proof, honest limits, next.

1. Cover: name, one sentence on what it does, commit and date.
2. The problem: who has it and what goes wrong without the system. Take it from the brief or README, then confirm the code serves it.
3. The journey: the user's whole path as `steps`, with a "Done by" for each step.
4. Demo plan: 4–7 things to show, the real start commands, and a backup if a live dependency fails.
5. One slide per core step or component on the traced flows (each model step, the matcher, the scheduler…): a `table` of Stage | What happens | Done by, sourced to `file:line`.
6. Design principle, when the code shows one consistently (for example, code decides and the model assists).
7. Architecture: layers or services and the wiring point.
8. The central domain artifact (a decision log, a ledger, a state machine): its fields and the rules the code enforces.
9. Failure handling: what happens when each external call or model step fails.
10. Concurrency and scale, when the code handles parallel work: mechanisms and measured numbers.
11. How I know it works: test count, test tiers, evals.
12. Results: per-case or summary numbers from the latest saved results.
13. Trade-offs.
14. Risks: the top three bottlenecks or pain points, each labelled measured or suspected.
15. Next steps: from code gaps, missing tests, stale docs, and the owner's own plans in the docs.

**review**: a newcomer or reviewer learns and judges the code. About 12 slides.

1. Cover. 2. In 30 seconds (`stats`). 3. Tech stack (`table`). 4. Architecture. 5–6. Two or three traced flows (`steps`). 7. Domain core: states, rules, triggers. 8. Design patterns (`cards`). 9. Trade-offs. 10. Bottlenecks. 11. Hotspots and pain points (`bars` with a `side` list), including stale docs. 12. What I would change: three or four actions ranked by impact and effort. 13. Open questions the code cannot answer.

**overview** (`--depth=overview`): cover, in 30 seconds, stack, architecture, one flow, open questions.

**question**: a title slide with the answer in one sentence, the traced flow, one slide on the part that answers the question, and open questions. Three to five slides.

## Slide rules

- One idea per slide. Prefer `steps`, `table`, `cards` and `stats` to bullets; keep tables to seven rows.
- Any step list that mixes actors gets a "Done by" value per step: code, model, member, team, external API.
- Every content slide has a `source` line: the files, results or commands behind it.
- Titles use one grammar through the deck, and say the topic plainly.
- Plain words. Numbers with their unit and their source.

## Speaker notes

- **present**: a first-person script the owner can read aloud, two to four sentences per slide, starting with what the audience should take away.
- **review**: what to point at on screen, and the evidence detail that did not fit on the slide.
- Put doc-versus-code contradictions in the notes of the slide they affect.

## deck.json

Write `docs/codebase/deck.json`, the source for both outputs and for reruns:

```json
{
  "title": "Project: codebase tour",
  "for": "present",
  "commit": "7c5601b",
  "date": "2026-11-05",
  "slides": [
    {"layout": "cover", "eyebrow": "Codebase tour · 7c5601b", "title": "Project", "subtitle": "What it does.", "notes": "…"},
    {"layout": "steps", "title": "The journey", "rows": [{"text": "Member sends a request", "by": "member", "ref": "api/messages.py:51"}], "source": "…", "files": ["api/messages.py"], "notes": "…"}
  ]
}
```

`files` lists the files each slide cites, so a rerun knows which slides changed. Layouts and their fields:

| Layout | Required | Optional |
| --- | --- | --- |
| `cover` | `title` | `eyebrow`, `subtitle` |
| `statement` | `text` | `sub`, `title` |
| `stats` | `title`, `items` [{`value`, `label`}] | `text` |
| `steps` | `title`, `rows` [{`text`, `by`, `ref`}] | `caption` |
| `table` | `title`, `columns`, `rows` (lists of cells) | `caption` |
| `cards` | `title`, `items` [{`title`, `text`, `ref`}] | `caption` |
| `bars` | `title`, `items` [{`label`, `value`}] | `caption`, `side` [{`title`, `text`}] |
| `list` | `title`, `items` (strings) | `text` |

Every slide also takes `notes`, `source` and `files`.

With a Slides artifact type, build the same slides in its format: the deck.json content and order carry over one to one.
