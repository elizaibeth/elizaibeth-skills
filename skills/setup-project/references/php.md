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

## Coverage

Use the existing PHPUnit or Pest runner. With PHPUnit, a typical command is:

```sh
vendor/bin/phpunit --coverage-text --coverage-clover=coverage.xml
```

Pest projects use their configured coverage command. Coverage needs Xdebug or PCOV; report a missing extension rather than silently skipping the check.
