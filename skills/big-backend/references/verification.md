# Verify the generated website

Use the target application's established commands and test harness. Run the checks on the resources and integrations actually delivered; a skill metadata check only validates the skill's packaging.

## Backend evidence

- Check generated PHP syntax, unresolved stub placeholders, class/file names and dependency availability. Boot Laravel, list resource routes, and compile the Blade views.
- Run migrations against a disposable or intended development database. Never substitute a destructive database reset for an incremental migration against existing data.
- For a reconstructed database baseline, follow the schema-equivalence checks in [database-first.md](database-first.md); keep source-database adoption separate from testing an empty installation. For a new schema, check the migrations against the agreed spec and test constraints as well as HTTP validation.
- Exercise list, show, create, update and delete (or the requested subset) through HTTP feature tests. Assert persisted values, redirects, validation failures, missing records and related-record handling.
- Test guest access and users outside the intended role/ownership/tenant boundary, including direct requests to hidden UI actions. Verify sensitive/unvalidated attributes cannot be written.
- For update rules, test unchanged unique values and collisions with another record. For relationships and soft deletion, test actual persistence and visibility rules.

Common commands, when available in the target: `php artisan route:list`, `php artisan view:cache`, `php artisan test`, and its configured formatter/static analyser. Preserve existing failures separately from regressions caused by this work.

## UI evidence

- Run the production frontend build with the target's package manager and lockfile.
- Open the generated resource in a browser. Create a record, submit an invalid value, edit it, follow its details link, paginate/filter where provided, then delete the test record.
- Check labels, keyboard focus, validation feedback, empty states, confirmation flows, mobile layout, and both themes when dark mode is included.
- Inspect console errors, missing imports and images, failed network requests, and duplicate Alpine initialization. Exercise any selected third-party widgets.

If a required runtime, dependency, browser or database is unavailable, report exactly which verification remains undone. Do not describe a structural scan or JavaScript parse as a passing end-to-end application test.
