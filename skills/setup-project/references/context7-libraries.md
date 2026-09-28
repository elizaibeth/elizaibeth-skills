# Approved Context7 catalog

Checked 2026-09-27 against Context7 library pages or its public index and the listed upstreams. IDs below are hard-coded setup defaults. Read only sections for the selected profiles, plus shared tools. Include a row only when its selection condition holds after configuration. Framework projects include their base language rows.

Each ID links to its Context7 entry; the source link identifies the official project. Confirmation means the entry exists and its source was checked, not that every entry carries a Context7 verification badge or that every query succeeds.

## Shared

| Select when | Exact ID | Source |
| --- | --- | --- |
| pre-commit is configured | [/pre-commit/pre-commit](https://context7.com/pre-commit/pre-commit) | [Upstream](https://github.com/pre-commit/pre-commit) |

## Python (including Django)

| Select when | Exact ID | Source |
| --- | --- | --- |
| Python profile | [/python/cpython](https://context7.com/python/cpython) | [Upstream](https://github.com/python/cpython) |
| uv is the package manager | [/astral-sh/uv](https://context7.com/astral-sh/uv) | [Upstream](https://github.com/astral-sh/uv) |
| Poetry is the package manager | [/python-poetry/poetry](https://context7.com/python-poetry/poetry) | [Upstream](https://github.com/python-poetry/poetry) |
| Ruff is configured | [/astral-sh/ruff](https://context7.com/astral-sh/ruff) | [Upstream](https://github.com/astral-sh/ruff) |
| mypy is configured | [/python/mypy](https://context7.com/python/mypy) | [Upstream](https://github.com/python/mypy) |
| pytest is the test runner | [/pytest-dev/pytest](https://context7.com/pytest-dev/pytest) | [Upstream](https://github.com/pytest-dev/pytest) |
| pytest-cov is configured | [/pytest-dev/pytest-cov](https://context7.com/pytest-dev/pytest-cov) | [Upstream](https://github.com/pytest-dev/pytest-cov) |
| coverage.py is directly configured or invoked | [/coveragepy/coveragepy](https://context7.com/coveragepy/coveragepy) | [Upstream](https://github.com/coveragepy/coveragepy) |

## Django additions

| Select when | Exact ID | Source |
| --- | --- | --- |
| Django profile | [/django/django](https://context7.com/django/django) | [Upstream](https://github.com/django/django) |
| pytest-django is configured | [/pytest-dev/pytest-django](https://context7.com/pytest-dev/pytest-django) | [Upstream](https://github.com/pytest-dev/pytest-django) |
| django-stubs is configured | [/typeddjango/django-stubs](https://context7.com/typeddjango/django-stubs) | [Upstream](https://github.com/typeddjango/django-stubs) |

## Go

| Select when | Exact ID | Source |
| --- | --- | --- |
| Go profile | [/golang/go](https://context7.com/golang/go) | [Upstream](https://github.com/golang/go) |
| golangci-lint is configured | [/golangci/golangci-lint](https://context7.com/golangci/golangci-lint) | [Upstream](https://github.com/golangci/golangci-lint) |

## Swift / iOS

| Select when | Exact ID | Source |
| --- | --- | --- |
| Swift profile | [/swiftlang/swift-book](https://context7.com/swiftlang/swift-book) | [Language guide](https://github.com/swiftlang/swift-book) |
| SwiftUI is used | [/websites/developer_apple_swiftui](https://context7.com/websites/developer_apple_swiftui) | [Apple](https://developer.apple.com/documentation/swiftui) |
| SwiftLint is configured | [/realm/swiftlint](https://context7.com/realm/swiftlint) | [Upstream](https://github.com/realm/SwiftLint) |

## PHP (including Laravel)

| Select when | Exact ID | Source |
| --- | --- | --- |
| PHP profile | [/websites/php_net_manual_en](https://context7.com/websites/php_net_manual_en) | [PHP manual](https://www.php.net/manual/en/) |
| Composer is the package manager | [/websites/getcomposer_doc](https://context7.com/websites/getcomposer_doc) | [Composer docs](https://getcomposer.org/doc/) |
| PHPUnit is directly configured or invoked | [/sebastianbergmann/phpunit-documentation-english](https://context7.com/sebastianbergmann/phpunit-documentation-english) | [Upstream docs](https://github.com/sebastianbergmann/phpunit-documentation-english) |
| Pest is the test runner | [/pestphp/docs](https://context7.com/pestphp/docs) | [Upstream docs](https://github.com/pestphp/docs) |
| PHPStan or Larastan is configured | [/phpstan/phpstan](https://context7.com/phpstan/phpstan) | [Upstream](https://github.com/phpstan/phpstan) |

## Laravel additions

| Select when | Exact ID | Source |
| --- | --- | --- |
| Laravel profile | [/laravel/docs](https://context7.com/laravel/docs) | [Upstream docs](https://github.com/laravel/docs) |
| Pint is configured | [/laravel/pint](https://context7.com/laravel/pint) | [Upstream](https://github.com/laravel/pint) |
| Larastan is configured | [/larastan/larastan](https://context7.com/larastan/larastan) | [Upstream](https://github.com/larastan/larastan) |

## Versions and gaps

Unversioned IDs can index a particular release branch. Include the installed version in each query and verify returned examples against it. Never append guessed versions or choose another library ID automatically. Unmatched tools (including Xcode, other package managers, formatters, and security scanners) use installed help or official documentation; omission is not a claim that Context7 lacks an entry.

When maintaining this catalog, check exact IDs and source identity through [Context7's tools](https://github.com/upstash/context7#available-tools) or public entries before changing rows. Ratings and search rank alone do not establish ownership. Do not generate a new catalog during routine project setup.
