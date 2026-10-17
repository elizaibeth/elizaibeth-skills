# Swift / iOS

Configure SwiftLint and the existing formatter, with deliberate exclusions for generated/build directories. Inspect Xcode projects/workspaces, shared schemes, test targets, package managers, and CI destinations. Preserve signing, provisioning, deployment targets, and the project's dependency workflow. Document Xcode and command-line prerequisites for hooks.

## Package manager and builds

Preserve the existing Swift Package Manager or Xcode project workflow. Read `Package.swift`, the Xcode schemes, deployment targets, and declared destinations. Use `swift package resolve`/`swift package update` only according to the project's existing policy; do not replace a resolved package file casually.

Typical checks are:

```sh
swift build
swift test
xcodebuild -scheme <scheme> -destination '<destination>' test
```

Use the project's declared scheme and simulator/device destination in CI.

## Three-day release hold

Swift Package Manager has no release-age setting. Before adding or upgrading a package, check the release tag date and use a version published at least 72 hours earlier. When CI is requested and the project uses Dependabot, set `cooldown: default-days: 3` for the `swift` ecosystem. Report the hold as manual, not enforced.

## Coverage

For Xcode projects, collect coverage with the test action:

```sh
xcodebuild -scheme <scheme> -destination '<destination>' \
  -enableCodeCoverage YES test
```

Use `xccov view --report` on the generated result bundle when a numeric report is needed. For Swift packages, use the project's supported `swift test` coverage workflow.
