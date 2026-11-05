---
name: understand-codebase
description: Explain a codebase as an evidence-backed slide deck with speaker notes, covering stack, architecture, traced flows, patterns, trade-offs, bottlenecks and pain points. Use when asked to understand, explain, present, onboard to or review a codebase, or to explain how one of its flows works.
argument-hint: "[question or topic] [--for=present|review] [--depth=overview]"
---

# Understand Codebase

Read the code the way a senior engineer would, then write a deck someone can present from. The code is the source of truth: docs, records and saved results are leads for intent, vocabulary and numbers, and every behavior on a slide is confirmed in the code. Read [the evidence rules](references/evidence.md) before pass 2.

## Mode

- `--for=present` (default): the owner explains the system to an audience.
- `--for=review`: a newcomer or reviewer learns and judges the code.
- `--depth=overview`: the short set.
- A question or topic ("how does billing work"): answer only that, with the question set.
- A rerun: when `docs/codebase/deck.json` exists, diff its `commit` against HEAD and rebuild only the slides whose `files` changed, plus any slide a removal commit affects.

[The deck guide](references/deck.md) has the slide set for each mode.

## Passes

Each pass decides what the next one reads.

1. **Inventory:** `python3 <this skill>/scripts/inventory.py <target>`. Done when you have the reading list: stack files, entry points, docs, saved results, hotspots, removal commits and complex functions.
2. **Orient:** read in one parallel batch the README, agent instructions, glossary, decision records, stack files and entry-point files from the inventory. Write down each behavior the docs claim as a lead to confirm.
3. **Trace:** follow two or three flows that matter most (the main user action, a write path, a failure or escalation path) from the entry point to storage and back. Read only the functions on the path; stop at library boundaries and name them. Record each step with `file:line` and who does it. Done when every step of each flow has a citation.
4. **Fill gaps:** read the top hotspots, the domain model and the complex functions on traced flows that pass 3 did not cover.
5. **Sweep:** search for auth, transactions and locks, queues and workers, caching, raw SQL, retries, external and model calls, and TODO or FIXME. Read only the hits.
6. **Confirm:** check every lead from pass 2 against the code and the removal commits. Take numbers from saved results or commands; take reasons from records and commit messages.
7. **Write:** build the deck from the slide set, then publish it (Output).

Skip generated, vendored, lock, migration and fixture files unless a traced flow passes through them. For a repository with several services or thousands of source files, give each subsystem to its own Explore agent for passes 3 and 4 when the session can start agents, and merge their flows.

## Output

Write `docs/codebase/deck.json` (format in the deck guide). Then:

- **With an Artifact tool that offers a Slides type:** publish the same slides as a Slides artifact and give the link.
- **Otherwise:** `python3 <this skill>/scripts/render_deck.py docs/codebase/deck.json docs/codebase/deck.html`. Done when it reports one slide per deck entry.

Finish with the link or path, the slide titles in one line, the doc-versus-code contradictions found, and the numbers marked not measured.
