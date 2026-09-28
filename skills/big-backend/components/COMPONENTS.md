# BigBackend UI component examples

This directory is a debranded reference library for generating Laravel backend interfaces. It is not a set of complete pages and should not be copied wholesale into an application.

## Contents

- `examples/elements`: small visual primitives such as buttons, badges, cards, alerts, and typography.
- `examples/forms`: form controls, validation patterns, editors, uploads, and form arrangements.
- `examples/interactive`: Alpine-powered components such as modals, dropdowns, tables, tabs, and notifications.
- `css/bigbackend.css`: the BigBackend theme entrypoint.
- `css/components`: namespaced first-party component styles plus isolated vendor integrations.
- `js`: Alpine stores, directives, and optional integrations used by interactive examples. Demo initializers live under `js/examples` and are exposed as `window.componentExamples`.
- `images`: neutral placeholders used by examples that need imagery.

## Intended use

Choose the smallest relevant example, adapt its markup to the target resource, and preserve the target Laravel application's existing layout and conventions. Leave out reference headings, explanatory text, demonstration data and variants the requested interface does not need.

Copy only the CSS, JavaScript modules, and third-party dependencies required by the chosen components. The example files use Laravel Blade helpers and assume Tailwind CSS and Alpine.js.

BigBackend-owned component classes use the `bb-` prefix. The visual vocabulary is built around graphite surfaces, teal actions, coral highlights, rounded geometry, and lifted interaction states. Keep vendor-owned selectors unchanged when adapting integrations.

For integration, dependency selection, and adapting examples into working Laravel views, read [the UI guide](../references/ui.md).
