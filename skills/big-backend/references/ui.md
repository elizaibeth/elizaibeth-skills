# Compose BigBackend UI

## Start from the application examples

`components/examples/app/` is a small, complete admin interface for a sample `projects` resource nested under `customers`. Its folders mirror `resources/views/`, plus a navigation composer. It is the starting point for the layout and the resource pages. Do not write a shell or page markup from scratch.

| File | Use |
| --- | --- |
| `layouts/admin.blade.php` | Admin shell: head, skip link, fixed sidebar that slides in below `lg`, sticky header with breadcrumbs, dark-mode toggle and account menu, record tabs, flash and error messages. |
| `layouts/guest.blade.php`, `auth/login.blade.php` | Sign-in page with the same theme. |
| `layouts/_head.blade.php`, `_logo.blade.php`, `_messages.blade.php` | Partials shared by both layouts. `_head` applies the saved dark mode before the first paint. |
| `navigation/AdminNavigation.php` | View composer for `layouts.admin`. It builds the marked sidebar section, the record tabs and the ownership breadcrumbs from the current route. Copy it to `app/View/` and register it in a service provider. |
| `components/table`, `tr`, `td`, `empty`, `status` | Anonymous Blade components (`x-table`, `x-tr`, `x-td`, `x-empty`, `x-status`). Copy them to `resources/views/components/`. |
| `pagination/admin.blade.php` | Pagination view. Set it with `Paginator::defaultView('pagination.admin')`. |
| `projects/index`, `show`, `create`, `edit`, `_form` | Resource pages: page header and action, filter, table, empty state, pagination, details, child table, typed-name delete confirmation, and a shared form with `old()` values, method spoofing, a select, a date, a number, a textarea and a checkbox with a hidden `0` value. |
| `components/js/admin.js` | Alpine entrypoint for the shell: persist plugin, `global` store, `usePopper`, one `Alpine.start()`. |
| `components/css/components/form.css` | The `bb-form` stacked-form spacing used by the forms. |

For a new interface:

1. Copy the layouts, partials, components and pagination view into `resources/views/`. Replace the sample sections in `layouts/admin.blade.php` (labels, route names and icons), the logo and the guest-page text.
2. Adapt `AdminNavigation` to the real sections, ownership chain and record tabs. Keep one sidebar for every page. Tabs show the pages of one record; breadcrumbs show its owners.
3. Build each resource from the `projects` pages. Replace the fields, routes, route parameters, status values and text. Keep the structure, classes and accessibility attributes.
4. Import `js/admin.js` from `resources/js/app.js`, and add `alpinejs`, `@alpinejs/persist` and `@popperjs/core`.

In an application that already has a layout, keep it and use only the page examples inside it.

## Choose component examples

The [component library](../components/COMPONENTS.md) also contains Blade reference examples, CSS and JavaScript source for single components. Use them for needs that the application examples do not cover. They are patterns, not a ready-to-install application or a set of registered Blade components. Read only the files relevant to the interface being built.

| Need | Start with |
| --- | --- |
| Resource listing | `components/examples/interactive/table.blade.php`, `pagination.blade.php` |
| Fields | `components/examples/forms/input-text.blade.php`, `textarea.blade.php`, `select.blade.php`, `checkbox.blade.php` |
| Actions and feedback | `components/examples/elements/button.blade.php`, `alert.blade.php`, `badge.blade.php` |
| Confirmation and menus | `components/examples/interactive/modal.blade.php`, `dropdown.blade.php` |
| Enhanced selectors and dates | `components/examples/forms/tom-select.blade.php`, `datepicker.blade.php` |

Extract the needed component variant, leaving out reference headings, explanatory prose and demo data. Form layout examples illustrate arrangements, not complete resource workflows.

Replace placeholders with actual Blade bindings, named routes, unique IDs, labels, and error messages. Use `old()` values for failed validation, CSRF tokens, method spoofing for update/delete, and explicit checkbox values. Render table pagination from the server query, preserve filters across page changes, and handle empty lists. Gate visible actions and enforce the corresponding access check on the server.

## Styling and build integration

The bundled CSS uses Tailwind's `@theme`, `@source`, and `@custom-variant` syntax and therefore needs a compatible Tailwind 4 pipeline. Check the target's build before integrating it. In an older or differently styled project, adapt selected patterns to that stack unless a migration was requested.

For a new BigBackend theme, copy `css/bigbackend.css`, `css/foundation.css`, and selected `css/components/*.css` files into a namespaced directory such as `resources/css/bigbackend/`. Maintain their relative structure and edit the copied component import index to contain just the needed modules. Import this entrypoint through the app's existing Vite/CSS setup, with Tailwind configured once. The bundled `@source` paths fit `resources/css/bigbackend/bigbackend.css`. In another location, recalculate them so that the real Blade and JS files are scanned.

`bigbackend.css` owns the graphite, brand/teal, signal, and coral tokens. `foundation.css` includes global element styling and an older set of shell rules (`main-sidebar`, `sidebar-panel`, `nav.header`, `main-content`). The application shell uses Tailwind utilities and does not need those shell rules. Retain only the rules that fit the target layout. Load Plus Jakarta Sans only if desired and available through the project's font delivery; the CSS declaration alone does not download it. Its system font fallback works without external requests.

First-party classes include `bb-surface`, `bb-action`, `bb-field`, `bb-select`, `bb-checkbox`, `bb-switch`, `bb-avatar`, and `bb-popover`. Read their CSS before composing overrides. Keep Tailwind utilities, vendor selectors, directive names and third-party option keys intact: `pagination`, `swiper-pagination`, and `x-input-mask` are functional contracts. Renaming class tokens must not rewrite prose, paths, JS object keys, or vendor APIs.

## JavaScript dependencies

`components/js/app.js` is a broad demonstration entrypoint. Select the required registrations instead of loading its entire dependency graph into every CRUD screen. Use the target's existing Alpine instance when present; otherwise initialize one instance, register needed plugins/directives/data/stores, and call `Alpine.start()` once after registration. The bundled entrypoint registers components but does not call `start()`.

| Selected pattern | Dependencies and source |
| --- | --- |
| Alpine state, dialogs, tabs | `alpinejs`; add collapse/intersect/persist plugins only where referenced |
| Dropdowns/popovers | `@popperjs/core`, `js/components/usePopper.js` |
| Accordion | `js/components/accordionItem.js`; collapse plugin for `x-collapse` |
| Input masks | `cleave.js`, `js/directives/inputMask.js`; register `input-mask` |
| Tooltips | `tippy.js`, `js/directives/tooltip.js`, `css/components/tooltip.css` |
| Notifications | `toastify-js`, `js/magics/notification.js`, matching CSS |
| Date inputs | `flatpickr`, matching CSS |
| Enhanced selects | `tom-select`, matching CSS and selected initializer adapted from `js/examples/tomselectDemo.js` |
| Uploads/editor | `filepond` with its image-preview plugin, or `quill`, and matching CSS; implement actual storage and rich-text sanitization in the app |
| Charts/table widgets/carousels | `apexcharts`, `gridjs`, or `swiper`, only for the selected integration |

Follow actual imports for additional needs such as SimpleBar, Sortable, Day.js, Font Awesome, or Iodine. Client-side validation supplements server-side request validation.

Select compatible package versions based on the target's lockfile and the APIs used in the examples. There is no bundled frontend dependency lockfile; installing every latest version is not verified compatibility. Scope widget selectors to the instance, and check that dynamic Tailwind classes are included in the build.

The optional `global` store expects Alpine persist and the `breakpoints` store and includes shell behavior. Adapt it to the target or provide just the state needed by chosen examples. Any `componentExamples.*` references must be backed by copied/adapted initializers or replaced with production data handling.

When retaining sample imagery, copy the three files from `components/images/` into `public/images/components/`, matching their existing URLs. Use real application imagery for production records. A CSS/JS syntax check does not establish rendered appearance, Blade compilation, or interactive behavior; verify the chosen patterns in the running application.
