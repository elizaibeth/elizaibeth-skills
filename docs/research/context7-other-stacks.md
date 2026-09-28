# Context7 catalog: PHP, Laravel, Go, and Swift

Checked 2026-09-27. These are exact Context7 entries confirmed through its public index or library pages, not IDs inferred from repository names. Selection is a recommendation for the bundled setup catalog; enable optional tools only when the project uses them.

| Profile or tool | Recommended exact ID | Evidence and source |
| --- | --- | --- |
| PHP | `/websites/php_net_manual_en` | [Context7 index](https://context7.com/api/v1/search?query=php); [official manual](https://www.php.net/manual/en/) |
| Composer | `/websites/getcomposer_doc` | [Context7 index](https://context7.com/api/v1/search?query=composer); [official docs](https://getcomposer.org/doc/) |
| PHPUnit | `/sebastianbergmann/phpunit-documentation-english` | [Context7 index](https://context7.com/api/v1/search?query=phpunit); [upstream docs](https://github.com/sebastianbergmann/phpunit-documentation-english) |
| Pest | `/pestphp/docs` | [Context7 index](https://context7.com/api/v1/search?query=pest); [upstream docs](https://github.com/pestphp/docs) |
| PHPStan | `/phpstan/phpstan` | [Context7 index](https://context7.com/api/v1/search?query=phpstan); [upstream](https://github.com/phpstan/phpstan) |
| Laravel | `/laravel/docs` | [Context7 entry](https://context7.com/laravel/docs); [upstream docs](https://github.com/laravel/docs) |
| Pint | `/laravel/pint` | [Context7 entry](https://context7.com/laravel/pint), which names the [upstream repository](https://github.com/laravel/pint) |
| Larastan | `/larastan/larastan` | [Context7 index](https://context7.com/api/v1/search?query=larastan); [upstream](https://github.com/larastan/larastan) |
| Go | `/golang/go` | [Context7 entry](https://context7.com/golang/go), which names the [upstream repository](https://github.com/golang/go) |
| golangci-lint | `/golangci/golangci-lint` | [Context7 index](https://context7.com/api/v1/search?query=golangci-lint); [upstream](https://github.com/golangci/golangci-lint) |
| Swift language | `/swiftlang/swift-book` | [Context7 entry](https://context7.com/swiftlang/swift-book), which names the [official language guide repository](https://github.com/swiftlang/swift-book) |
| SwiftUI | `/websites/developer_apple_swiftui` | [Context7 index](https://context7.com/api/v1/search?query=swiftui); [Apple documentation](https://developer.apple.com/documentation/swiftui) |
| SwiftLint | `/realm/swiftlint` | [Context7 entry](https://context7.com/realm/swiftlint), which names the [upstream repository](https://github.com/realm/SwiftLint) |

## Selection notes

- Version-neutral IDs are not version-neutral content. The index currently reports PHPUnit documentation on `13.3`, Pest documentation on `5.x`, PHPStan on `2.3.x`, Laravel documentation on `13.x`, and Larastan on `3.x`. Check documentation against installed versions before applying examples. Do not construct version IDs by appending guessed suffixes. Sources: the corresponding index links above.
- The PHP manual website entry has substantially more indexed examples than `/php/doc-en`; the Composer website entry focuses on user documentation. Both website entries exist in the index. PHPUnit's documentation entry has substantially more examples than `/sebastianbergmann/phpunit`. Sources: the PHP, Composer, and PHPUnit index links above.
- Context7's `verified` flag is not the same as confirming an ID exists. The public index marks `/pestphp/docs`, `/composer/composer`, and `/larastan/larastan` as `verified: false`, while still returning finalized entries. Do not describe every proposed entry as Context7-verified. Sources: the Pest, Composer, and Larastan index links above.
- `/swiftlang/swift` also exists, but the language guide is the more focused default for application authors. This is a selection judgment based on the [compiler repository entry](https://context7.com/swiftlang/swift) and [language guide entry](https://context7.com/swiftlang/swift-book).
- No separate Xcode, XCTest, or Swift Package Manager IDs were established in this pass. Their omission should not imply that no Context7 entries exist. Use installed tools and official documentation until separately verified.

No Context7 MCP tool is available in this session. This verifies catalog identity, not a successful MCP documentation query. Some valid library pages were inaccessible through web search; the public index returned their exact IDs and finalized state.
