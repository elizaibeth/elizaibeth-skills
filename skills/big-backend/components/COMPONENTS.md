# BigBackend UI component examples

This directory is a debranded reference library for generating Laravel backend interfaces. Apart from `examples/app`, it is not a set of complete pages and should not be copied wholesale into an application.

## Contents

- `examples/app`: a complete sample admin interface with sample data: the admin and guest layouts, sign-in, a navigation composer, table and status components, pagination, and the index, show, create and edit pages of one resource. Start a new interface here.
- `examples/elements`: small visual primitives such as buttons, badges, cards, alerts, and typography.
- `examples/forms`: form controls, validation patterns, editors, uploads, and form arrangements.
- `examples/interactive`: Alpine-powered components such as modals, dropdowns, tables, tabs, and notifications.
- `css/bigbackend.css`: the BigBackend theme entrypoint.
- `css/components`: namespaced first-party component styles plus isolated vendor integrations.
- `js`: Alpine stores, directives, and optional integrations used by interactive examples. `js/admin.js` is the small entrypoint for the `examples/app` shell. Demo initializers live under `js/examples` and are exposed as `window.componentExamples`.
- `images`: neutral placeholders used by examples that need imagery.

## Intended use

For a new interface, take the layout and the resource pages from `examples/app`. In an application that already has a layout, preserve its layout and conventions. For each other need, choose the smallest relevant example and adapt its markup to the target resource. Leave out reference headings, explanatory text, demonstration data and variants the requested interface does not need.

Copy only the CSS, JavaScript modules, and third-party dependencies required by the chosen components. The example files use Laravel Blade helpers and assume Tailwind CSS and Alpine.js.

BigBackend-owned component classes use the `bb-` prefix. The visual vocabulary is built around graphite surfaces, teal actions, coral highlights, rounded geometry, and lifted interaction states. Keep vendor-owned selectors unchanged when adapting integrations.

For integration, dependency selection, and adapting examples into working Laravel views, read [the UI guide](../references/ui.md).
