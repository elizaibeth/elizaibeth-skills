# Go

Inspect nested modules, generated code, and task runners. Configure gofmt or the project's gofumpt/goimports choice, golangci-lint, `go vet`, and govulncheck. Match lint configuration to the installed major version, Go version, and module import prefix. Run checks from each module root; use the existing container workflow when required. Add race checks where supported.

## Package and toolchain

Use `go.mod` and `go.sum` as the source of truth. Read the `go` and `toolchain` directives and module path before writing configuration. Use the repository's existing tool manager if it has one; otherwise use the Go toolchain and documented project commands. Do not switch module, vendoring, or tool-install strategy during setup.

Useful checks:

```sh
go mod tidy
go test ./...
go vet ./...
```

Run update commands only when requested. Treat a `go.mod`/`go.sum` diff as a reviewed change, not an incidental setup side effect.

## Three-day release hold

The Go toolchain has no release-age setting. Before adding or upgrading a module, read its publication time and use a version published at least 72 hours earlier:

```sh
go list -m -json <module>@<version>   # read the Time field
```

When CI is requested and the project uses Dependabot, set `cooldown: default-days: 3` for the `gomod` ecosystem. Report the hold as manual, not enforced.

## Coverage

Collect coverage with:

```sh
go test ./... -coverprofile=coverage.out
go tool cover -func=coverage.out
go tool cover -html=coverage.out -o coverage.html
```
