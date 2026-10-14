# Django design style

Apply to Django projects with the [Django additions](django.md). Existing project structure and conventions win: follow the code that is already there, add these rules only where the project has none, and report conflicts briefly. Do not move code to match this guide during setup.

## AGENTS.md section

Add a `## Django design` section to root `AGENTS.md` with the rules below, and merge it once on reruns. Keep the rules short and self-contained; leave the reasons in this file.

1. One app, one purpose. Apps depend in one direction; break a cycle with IDs or signals.
2. Models hold data, constraints, small single-model methods, and custom `QuerySet` classes. Declare integrity in the database: `UniqueConstraint`, `CheckConstraint`, indexes, explicit `on_delete`, and `related_name`.
3. Query logic lives in `QuerySet` methods or `selectors.py`, never in views or templates.
4. Workflows that span models, have side effects, or need a transaction live in `services.py`. Plain CRUD stays in views, forms, or serializers without a service.
5. Views, serializers, forms, admin, and management commands translate input and output only. They call services and selectors and hold no business rules.
6. Wrap multi-step writes in `transaction.atomic`. Run emails, tasks, and other side effects in `transaction.on_commit`.
7. Avoid N+1 queries with `select_related` and `prefetch_related`; assert query counts in tests for list endpoints.
8. Do not put workflows in `save()` overrides or signals. Use signals only to decouple apps.
9. Validate input at the boundary (forms or serializers). Services may assume validated types but must enforce business invariants.
10. Test services and selectors first, then a few request-level tests. Build data with factories, not fixtures.

## Structure

- Name apps for a domain concept (`billing`, `catalog`), not a layer (`utils`, `core`). Treat a `common` app as a last resort, and keep it free of imports from other project apps.
- Keep each app flat until it needs more: `models.py`, `selectors.py`, `services.py`, `views.py`, `urls.py`, `admin.py`, `tests/`. Split a module into a package only when it grows past what one file reads well.
- Import other apps through their public modules (`services`, `selectors`), not their private helpers.
- Keep project-wide settings, URL root, and ASGI/WSGI in `config/`, as the Django additions set.

## Models

- Add `__str__`, a deliberate `Meta.ordering` only when callers need it, and `Meta.constraints` for every rule the database can enforce.
- Put reusable filters on a `QuerySet` subclass and expose them through `Manager.from_queryset()` or `QuerySet.as_manager()`, so they chain: `Order.objects.open().for_customer(c)`.
- Keep methods that read one instance's own fields on the model. Move anything that touches other models, external systems, or the clock into a service.
- Prefer explicit fields over `JSONField` for data you query or constrain. Avoid `null=True` on string fields.
- Do not edit applied migrations. Keep data migrations apart from schema migrations, and make them reversible when practical.

## Services and selectors

- A service is a plain function with keyword-only arguments, type hints, and a verb name: `create_order(*, customer, items)`. It returns the object it created or changed.
- A service owns its transaction and raises a domain exception on a broken rule. It does not read `request`, return an HTTP response, or format output.
- A selector is a plain function that returns a `QuerySet` or objects and performs no writes. It applies the `select_related` and `prefetch_related` its callers need.
- Call a service from another service directly. Do not hide the call behind a signal.
- Skip the service when a view only creates or updates one model from validated data.

## Views and APIs

- Use function-based views for simple endpoints and class-based views when a generic view fits. Avoid mixin hierarchies more than two levels deep.
- A view parses input, calls a service or selector, and returns a response. Map domain exceptions to HTTP errors in one place.
- Keep one error and response shape across the API. With Django REST framework, use serializers for input and output validation only.
- Keep `admin.py` limited to display and editing configuration. Route admin actions with business effects through services.

## Operations

- Run slow, retryable, or external work in a task queue. Make tasks idempotent and pass IDs, not model instances.
- Log with `logging.getLogger(__name__)`. Do not log secrets or personal data.
- Do not use raw SQL built with string formatting. Use ORM expressions or parameterized queries.
- Keep CSRF protection on. Mark exemptions with a comment that states the reason.

## Reference

Django documents managers and custom `QuerySet` methods (topics/db/managers), query optimization (`select_related`, `prefetch_related`), and transactions (`atomic`, `on_commit`). The services and selectors layout is a community convention, for example the HackSoft Django style guide, not a Django requirement. Check version-dependent APIs against the project's installed Django version.
