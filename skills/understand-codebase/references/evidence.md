# Evidence

The code is the source of truth. Everything else is a lead.

## Leads and confirmation

- **Docs and records** (README, AGENTS.md, glossaries, ADRs, decision logs, requirements, plans) give intent, vocabulary and reasons. Each behavior they describe is a lead until the code shows it.
- **Removal commits** from the inventory name features that may be gone. A doc claim that matches a removal commit is stale unless current code still implements it.
- **Confirmed** means you read the code path, or a test that exercises it. A passing test name alone confirms nothing.
- A contradiction between a doc and the code goes on the slide as the code's behavior, with the doc named in the notes. In review mode, list stale docs on the pain-point slide.

## Numbers

Use, in order: a command you ran now (test count, a timed request), a saved result in the repo (eval summary, load test, coverage report, benchmark), a number the code defines (a limit, a timeout, a threshold in config). State each number's source. With no source, write "not measured" and add it to open questions. Leave no blank and no placeholder.

When several saved runs exist, use the latest one that matches the current code, and say which run it is.

## Patterns

Name a pattern only when the code has its structure: cite the interface or table and its implementations or uses. Say whether the framework or the project provides it. Patterns worth checking: composition root and dependency injection, ports and adapters, repository, state machine with a transition table, strategy, observer and signals, middleware chain, optimistic locking, idempotency keys, outbox and queue workers, append-only logs, result types with fallbacks, CQRS.

## Algorithms

For each complex function the inventory lists that sits on a traced flow: what it computes, its cost at the real input size, edge cases (time zones, money, empty input), and whether a library or the database already does it.

## Trade-offs

Each row: decision, gain, cost, and where the reason comes from (a decision record, a commit message, a PR). Mark a reason with no record as inferred. Check that the decision still holds in the current code.

## Bottlenecks

Label each as **measured** (a saved result, a profile, a timed command) or **suspected** (read from code). Static signals, each with `file:line`:

- slow external calls (model, payment, search) inside a request handler
- queries in loops (N+1), unbounded queries, missing pagination
- missing indexes on filtered or joined columns
- a single writer, a global lock, shared mutable state
- work in requests that a queue or worker could do
- prompts or payloads that grow with data size

Then name what fails first at ten times the load.

## Pain points

From the inventory: churn × size, change coupling across folders, single-owner files, hotspots without tests. From reading: confusing names, duplicated logic, dead code, TODO clusters, inconsistent patterns, setup steps the docs leave out, stale docs.
