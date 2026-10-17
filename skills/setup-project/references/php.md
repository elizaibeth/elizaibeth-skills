# PHP

Inspect source/test layout and Composer scripts. Configure PHPUnit or the existing runner, PHP-CS-Fixer or PHP_CodeSniffer, and PHPStan or Psalm. Retain working tool choices and scope analysis to the codebase's maturity. Laravel's profile supplies framework-specific defaults before dependencies are added.

## Composer

Use `composer.json` and `composer.lock` as the source of truth. Read the PHP constraint and existing scripts before adding tools. Typical checks are:

```sh
composer validate --strict
composer install
composer audit
```

Use `composer update` only when requested. Keep development tools in `require-dev`, preserve the lockfile, and do not replace the project's autoloading or framework conventions.

## Three-day release hold

Merge this into `composer.json`. Preserve a longer existing period:

```json
{
    "config": {
        "policy": {
            "cooldown": {
                "period": "3 days"
            }
        }
    }
}
```

Composer withholds versions published in the last 72 hours during `composer require` and `composer update`, using the repository's publication time. Keep `require-published-time` at its default so a missing time fails. This reduces risk; it does not guarantee safety.

Older Composer versions lack the cooldown policy. Verify the installed version supports it against the official [config docs](https://getcomposer.org/doc/06-config.md); a major upgrade needs approval. Otherwise, report an enforcement gap.

Keep the cooldown `ignore` list absent by default. Report existing exceptions. Adding exemptions, shortening the period, or bypassing it with `COMPOSER_POLICY_COOLDOWN_PERIOD` requires explicit approval. If a version is too new, use an eligible compatible version or report the block.

## Coverage

Use the existing PHPUnit or Pest runner. With PHPUnit, a typical command is:

```sh
vendor/bin/phpunit --coverage-text --coverage-clover=coverage.xml
```

Pest projects use their configured coverage command. Coverage needs Xdebug or PCOV; report a missing extension rather than silently skipping the check.
