# Official Laravel 13 documentation workflow

## Sources and version matching

Start with the [official Laravel 13 documentation](https://laravel.com/framework/docs/13.x). Keep the `13.x` version in links and verify the page version after redirects. Use `composer.lock` or the installed framework to establish the exact application version; a `^13.0` constraint alone does not identify the installed minor release.

For the areas touched by the task, search and open the relevant official documentation sections before choosing APIs or judging code. Read the section itself rather than treating search snippets as evidence. An available documentation connector can be used if it provides official, version-matched content; otherwise browse the official site. Reuse sections already read during the task unless a new uncertainty or version mismatch requires another lookup.

Use the topic links below selectively. Read the release notes and upgrade guide when creating a new app, upgrading, or checking version-specific/deprecated behavior; they are not substitutes for the topic documentation.

| Task area | Official Laravel 13 sources |
| --- | --- |
| Setup, compatibility, upgrades | [Installation](https://laravel.com/framework/docs/13.x/installation), [release notes](https://laravel.com/framework/docs/13.x/releases), [upgrade guide](https://laravel.com/framework/docs/13.x/upgrade) |
| Request handling | [Routing](https://laravel.com/framework/docs/13.x/routing), [controllers](https://laravel.com/framework/docs/13.x/controllers), [middleware](https://laravel.com/framework/docs/13.x/middleware), [validation](https://laravel.com/framework/docs/13.x/validation) |
| Access and web protection | [Authentication](https://laravel.com/framework/docs/13.x/authentication), [authorization](https://laravel.com/framework/docs/13.x/authorization), [request forgery protection](https://laravel.com/framework/docs/13.x/csrf) |
| Models and persistence | [Eloquent](https://laravel.com/framework/docs/13.x/eloquent), [casts](https://laravel.com/framework/docs/13.x/eloquent-mutators), [relationships](https://laravel.com/framework/docs/13.x/eloquent-relationships), [migrations](https://laravel.com/framework/docs/13.x/migrations), [database transactions](https://laravel.com/framework/docs/13.x/database) |
| Views and lists | [Blade](https://laravel.com/framework/docs/13.x/blade), [pagination](https://laravel.com/framework/docs/13.x/pagination), [Vite](https://laravel.com/framework/docs/13.x/vite) |
| Package integration | [Container](https://laravel.com/framework/docs/13.x/container), [providers](https://laravel.com/framework/docs/13.x/providers), [package development](https://laravel.com/framework/docs/13.x/packages) |
| Verification | [Testing](https://laravel.com/framework/docs/13.x/testing), [HTTP tests](https://laravel.com/framework/docs/13.x/http-tests), [database tests](https://laravel.com/framework/docs/13.x/database-testing) |

If the website is unavailable, try the official [laravel/docs `13.x` branch](https://github.com/laravel/docs/tree/13.x). For exact signatures or features that may have arrived after the target's installed minor release, inspect the installed `vendor/laravel/framework` source or its corresponding official [framework tag](https://github.com/laravel/framework/tags). Current `13.x` documentation may describe newer minor-release features. Explain any conflict and test the behavior against the target's installed version.

If official documentation cannot be retrieved, disclose the limitation and use available version-matched source and tests for supported work. Label conclusions that still need documentation verification; do not claim to have consulted an inaccessible source. Third-party tutorials may offer context but are not authority for Laravel API behavior. Use each third-party library's own official documentation for its APIs.

## While building

- Match each framework-dependent change to the applicable documented API and the target's conventions. Check request validation/authorization, writable fields and casts, relationships/constraints, transactions, middleware, and rendering where those areas are involved.
- Apply corrections to the generated target code when a bundled stub differs from verified framework behavior. Keep optional preferences separate from compatibility requirements; adopt new APIs only when they help the requested feature and exist in the installed release.
- Run the relevant checks from [verification.md](verification.md). Documentation establishes expected behavior; tests establish how this implementation behaves. In the handoff, cite the official sections behind material compatibility decisions and report actual verification separately.

## While reviewing

- Establish the requested files or comparison base and read project instructions. Trace changed behavior through callers and affected layers. Verify suspected issues against documentation and the installed implementation, including conditions under which an API is valid.
- Check relevant CRUD failure paths: invalid input, authorization bypass, unrestricted writes or queries, schema/data mismatches, relationship persistence, missing records, escaping, and pagination/query behavior. Scope performance findings to demonstrated or traceable expensive behavior.
- Report concrete findings in severity order: file/line, failure condition, impact, and correction. Link official sections for framework-dependent claims. Optional conventions are not bugs. State checks run and unverified behavior; no findings does not prove untested behavior correct.
- Run proportionate, non-destructive diagnostic checks when useful. A review-only request authorizes findings, not application changes, package installation, or migration execution. If asked to fix findings, implement the agreed scope and verify those changes using the build workflow.
