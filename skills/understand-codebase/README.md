# Understand Codebase

Read a codebase and turn it into a slide deck you can present, with speaker notes and evidence for every claim.

## Install

```sh
npx skills add elizaibeth/elizaibeth-skills --skill understand-codebase --global
```

Omit `--global` to install in one project.

## Examples

> Use $understand-codebase on this repository.

> Use $understand-codebase --for=review so I can onboard to this service.

> Use $understand-codebase "how does a booking get confirmed?"

## What you get

A deck in `docs/codebase/`: `deck.json` as the source, plus a Slides artifact when the agent can publish one, or a self-contained `deck.html` (arrow keys to move, N for speaker notes, print for PDF).

- `--for=present` (default) tells the system's story for an audience: the problem, the user journey with who does each step, a demo plan, each core component, how you know it works, results, trade-offs, risks and next steps.
- `--for=review` is for learning and judging the code: stack, architecture, traced flows, design patterns, trade-offs, bottlenecks, hotspots, what to change and open questions.
- `--depth=overview` gives six slides; a question gives three to five.

## How it reads code

A script maps the repository first: stack files, entry points, docs, saved results, git hotspots, change coupling, removal commits and complex functions. The agent then traces real flows from the entry points, sweeps for cross-cutting concerns, and confirms what the docs say against the code.

The code is the source of truth. Docs and decision records supply intent and reasons; a feature a doc describes appears on a slide only when the code still has it. Numbers come from saved results or commands, and bottlenecks are labelled measured or suspected.

Reruns update only the slides whose cited files changed.
