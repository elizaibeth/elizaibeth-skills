# Laravel additions

Apply the PHP profile first. Use Pint and PHPStan/Larastan as Laravel defaults, retaining existing equivalents. Preserve PHPUnit/Pest choice. Inspect environment configuration, migrations, routes, and frontend scripts. Keep `.env.example` limited to non-secret names and safe defaults. Use isolated test data; setup does not authorize migrations, seeders, or queues against shared systems. CRUD feature implementation remains a separate task.

## Laravel checks

Use the PHP profile's Composer checks. For frontend dependencies, apply the shared [frontend profile](frontend.md).

Typical checks are:

```sh
php artisan about
php artisan test
```

## Coverage

Use the configured PHPUnit or Pest command. Typical examples are:

```sh
php artisan test --coverage
vendor/bin/pest --coverage
```
