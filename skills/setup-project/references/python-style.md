# Python design style

Apply to Python projects that are **not Django**. For Django, use [Django design style](django-style.md) and skip this file: Django services own transactions and I/O, which conflicts with the pure core below.

Existing project structure and conventions win. Add these rules only where the project has none, and report conflicts briefly. Do not move code to match this guide during setup.

## Fit by project type

| Project | Apply |
| --- | --- |
| New service or CLI with business rules | Everything below |
| Library | Typing, errors, dependencies, and logging rules; no layer folders |
| Script, notebook, or data job | Typing and configuration rules only |

## AGENTS.md section

Add a `## Python design` section to root `AGENTS.md` with the rules below, and merge it once on reruns. Keep the rules short and self-contained; leave the reasons in this file. For libraries and scripts, include only the rules the table allows.

1. Use a small layered monolith: a functional core, an imperative shell, and dependencies that point inward.
2. The domain does no I/O: no network, files, database, environment, clock, or randomness.
3. Domain functions are pure. They take and return frozen dataclasses and plain values.
4. The domain imports nothing from the API layer, the shell, or web and CLI frameworks.
5. Routes and CLI commands stay thin: parse input, load data, call domain functions, map the result.
6. Pydantic schemas stay in the API layer. Convert to domain dataclasses at the boundary.
7. The shell performs I/O and passes the clock, settings, and loaded data into the domain.
8. The domain raises domain exceptions; only the shell maps them to HTTP errors or exit codes.
9. Add no interface, `Protocol`, or abstract class until a second implementation exists.
10. Annotate public functions. Avoid `Any` without a comment that gives the reason.
11. Read the environment once at startup into a typed settings object, and pass it down.
12. Log with `logging.getLogger(__name__)`. Do not log secrets or personal data.

## Layout

Use the `src/` layout from the [Python profile](python.md):

```text
src/<package>/
  domain/      # pure functions, frozen dataclasses, domain exceptions
  api/         # routes or CLI commands, Pydantic schemas, error mapping
  config.py    # typed settings, read once
  main.py      # wiring: build settings, load data, start the app
tests/
  domain/
  api/
```

Add `storage/` (or another named I/O module) to the shell only when the project reads or writes external state. Name modules for domain meaning (`pricing.py`), not role (`helpers.py`, `utils.py`). Keep the structure flat until a module outgrows one file.

## Domain

- Model data with `@dataclass(frozen=True, slots=True)`. Use `tuple` and `frozenset` instead of `list` and `set` in frozen fields.
- Return new values; do not mutate arguments.
- Pass anything impure as an argument, for example `now: datetime`, so tests need no patching.
- Define a small set of domain exceptions. Catch specific exceptions; never use a bare `except:`.
- Keep functions small and single-purpose. Prefer functions over classes unless the class holds state or invariants.

## Shell and API

- A route or command contains no business rules. If it needs an `if` for a business rule, move that rule into the domain.
- Validate untrusted input with Pydantic (or the framework's equivalent) at the boundary only. Do not pass raw dicts between functions.
- Choose sync or async per service and do not mix them. Move blocking calls out of `async def` into a thread.
- Map each domain exception to one error response in one place.

## Other rules

- Prefer the standard library. Add a dependency only with a stated reason, using `uv add` as the [Python profile](python.md) says.
- Use `X | None`, not `Optional[X]`. The [Python profile](python.md) sets mypy `strict`.
- Comment why, not what. Add a docstring to a public function only when its name and types do not say enough.

## Testing

Follow the [test environment](test-environment.md) tiers.

- **Domain:** unit tests on pure functions with plain values. No mocks, no fixtures that touch the system. Cover happy, failure, and boundary cases.
- **API and CLI:** a few request-level or command-level tests per endpoint, with the domain real and I/O faked.
- **Shell and storage:** service tests against real dependencies when the project has them.
- Use the project's existing coverage threshold. A pure core makes full coverage of `domain/` realistic.

## When the pattern stops fitting

Stop applying it, and tell the user, when:

- The project adds a database. Keep the domain pure; put queries in a `storage/` module in the shell and load data before calling the domain.
- The project grows several unrelated business areas. Split `domain/` into one package per area, with one-way dependencies.
- The project is or becomes Django. Switch to [Django design style](django-style.md).
