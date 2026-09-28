# Context7 Python and shared catalog research

Checked 2026-09-27 using Context7's public library pages and public search index. This verifies indexed IDs and upstream identity, not an authenticated MCP documentation query. The catalog uses upstream repositories, not similarly named forks.

| Exact ID | Primary evidence |
| --- | --- |
| `/python/cpython` | [Context7 index](https://context7.com/api/v1/search?query=python) lists the official CPython repository ID as finalized. |
| `/astral-sh/uv` | [Context7 entry](https://context7.com/astral-sh/uv) identifies `github.com/astral-sh/uv`. |
| `/astral-sh/ruff` | [Context7 entry](https://context7.com/astral-sh/ruff) identifies `github.com/astral-sh/ruff`. |
| `/python-poetry/poetry` | [Context7 index](https://context7.com/api/v1/search?query=poetry) confirms the exact ID; [official upstream](https://github.com/python-poetry/poetry) confirms identity. |
| `/python/mypy` | [Context7 entry](https://context7.com/python/mypy) identifies `github.com/python/mypy`. |
| `/pytest-dev/pytest` | [Context7 index](https://context7.com/api/v1/search?query=pytest) confirms the exact ID; [official upstream](https://github.com/pytest-dev/pytest) confirms identity. |
| `/pytest-dev/pytest-cov` | [Context7 entry](https://context7.com/pytest-dev/pytest-cov) identifies the pytest-dev coverage plugin. |
| `/coveragepy/coveragepy` | [Context7 entry](https://context7.com/coveragepy/coveragepy) identifies the coverage.py upstream. |
| `/django/django` | [Context7 index](https://context7.com/api/v1/search?query=django) confirms the exact ID; [official upstream](https://github.com/django/django) confirms identity. |
| `/pytest-dev/pytest-django` | [Context7 entry](https://context7.com/pytest-dev/pytest-django) and [index](https://context7.com/api/v1/search?query=django) identify the pytest-dev Django plugin. |
| `/typeddjango/django-stubs` | [Context7 entry](https://context7.com/typeddjango/django-stubs) identifies the TypedDjango project. |
| `/pre-commit/pre-commit` | [Context7 entry](https://context7.com/pre-commit/pre-commit) and [index](https://context7.com/api/v1/search?query=pre-commit) confirm the upstream. |

Some entry pages failed in the web reader although the public index returned the exact library. Some entries show a documentation-fetch error despite retaining library metadata. These observations support including known IDs with a runtime fallback, not claiming guaranteed service availability.

Context7's `verified` flag and reputation score are not equivalent to upstream ownership. Decisions above use source identity; the catalog does not promise that all rows have a Context7 verification badge. Version-neutral IDs are retained to avoid freezing projects to today's index versions. Query the installed version and check the returned evidence before using it.

The small catalog deliberately omits transitive dependencies, unrelated application libraries, and unverified IDs. Additions require research rather than constructing `/owner/package` guesses. [Context7's own documentation](https://github.com/upstash/context7#available-tools) defines direct ID queries and name resolution as distinct operations.
