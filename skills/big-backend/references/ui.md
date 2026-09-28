# Compose BigBackend UI

## Choose examples

The [component library](../components/COMPONENTS.md) contains Blade reference examples, CSS and JavaScript source. It supplies patterns for composing a site, not a ready-to-install application or a set of registered Blade components. Read only the files relevant to the interface being built.

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

For a new BigBackend theme, copy `css/bigbackend.css`, `css/foundation.css`, and selected `css/components/*.css` files into a namespaced directory such as `resources/css/bigbackend/`. Maintain their relative structure and edit the copied component import index to contain just the needed modules. Import this entrypoint through the app's existing Vite/CSS setup, with Tailwind configured once. Recalculate its `@source` paths relative to its new location so real Blade/JS files are scanned; the bundled relative paths are not universal installation paths.

`bigbackend.css` owns the graphite, brand/teal, signal, and coral tokens. `foundation.css` includes global element and shell styling; retain only the rules that fit the target layout when integrating into an existing application. Load Plus Jakarta Sans only if desired and available through the project's font delivery; the CSS declaration alone does not download it. Its system font fallback works without external requests.

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
