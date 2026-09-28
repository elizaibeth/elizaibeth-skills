# Working on this collection

Keep skill instructions self-contained: installed skills cannot rely on this repository's root documentation or development dependencies.

For a user-visible skill or packaging change, add a Changeset. Read [the release guide](docs/releases.md) when changing release tooling or preparing a version. `package.json` owns the collection version; use the version script to update derived metadata.

Before handing off changes, run `npm run check`. For changed release scripts, exercise versioning in a temporary copy so the working tree's pending changesets remain intact.
