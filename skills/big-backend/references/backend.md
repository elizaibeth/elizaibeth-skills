# Backend reference patterns

Write native Laravel files in the target application. Select relevant files from [backend/resources/templates/](../backend/resources/templates/), replace their placeholders, and adapt their behavior to the agreed schema and installed framework. Implement missing behavior directly.

## Select patterns by layer

All paths in the table are relative to `backend/resources/templates/`. Read only the patterns needed for the current resource.

| Layer | Reference | Adaptation required |
| --- | --- | --- |
| Migrations | `migrations/migrations.stub` | Preserve the agreed or observed keys, types, precision, defaults, nullability and constraints. |
| Models | `models/model.stub`, selected relationship stubs | Set actual table/key/connection conventions, casts, writable/hidden fields, timestamps and soft deletion. |
| Validation | `requests/create_request.stub`, `requests/update_request.stub` | Separate create/update rules, including unique-value updates, and enforce the chosen authorization model. |
| Controllers | `controllers/controller.stub` | Supply matching named resource routes and views; retain validation and authorization. Add ownership/tenant query scopes where needed. |
| Policies | `policies/` | Replace sample team/admin/ownership assumptions with actual access rules. |
| Test data | `factories/factory.stub` | Produce valid related records and boundary cases without copying private production data. |

Repository and DataTable templates are optional, for a target that already uses those architectures; the controller template does not require them. Adapt any sample dependencies to the actual project.

The controller pattern uses `records` in index views and `record` in show/edit views, native pagination, validated requests, Gate checks, authentication middleware and session status messages. Match these contracts or change both caller and view together. A list-level permission check does not scope the records returned.

## Complete the resource

- Write relationship methods and their imports from the agreed schema and business semantics.
- Express custom table/key, timestamp and soft-delete behavior explicitly. Do not add conventional IDs or timestamps to an existing schema merely to fit a stub.
- Write schema constraints independently of form validation. Match nullability, precision and foreign-key actions to the agreed data model.
- Request stubs reuse static rules and allow authorization by default. Adapt them alongside policies and controller checks.
- Decide serialization visibility and form/list exposure explicitly; neither is established merely by a field appearing in a template.
- Build resource routes, authentication integration, navigation and real views in the target.

Use the [official documentation workflow](laravel-docs.md) for framework-dependent choices and [verification.md](verification.md) to verify the actual application.
