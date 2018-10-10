# Change Log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]
### Added

### Changed

### Deprecated

### Removed

## [1.2.0]
### Added
- `\Illuminate\Support\Collection::assertContains()` macro. ([#6](https://github.com/svenluijten/laravel-testing-utils/pull/4))
- `\Illuminate\Support\Collection::assertNotContains()` macro. ([#6](https://github.com/svenluijten/laravel-testing-utils/pull/4))
- `.editorconfig` file. ([`e84032f`](https://github.com/svenluijten/laravel-testing-utils/commit/e84032fc08304937b7234ba4752fbdc77ef6789d))

### Changed
- The `phpstan` check does not report missing methods as errors anymore. ([`a120eae`](https://github.com/svenluijten/laravel-testing-utils/commit/a120eae69dd321623768df1550b51a05c59f054b))

## [1.1.0]
### Changed
- Failure descriptions are more descriptive now.

## [1.0.0]
### Added
- `assertViewExists` assertion.
- `assertViewNotExists` assertion.

[Unreleased]: https://github.com/svenluijten/package-testing-utils/compare/v1.2.0...HEAD
[1.2.0]: https://github.com/svenluijten/package-testing-utils/compare/v1.1.0...v1.2.0
[1.1.0]: https://github.com/svenluijten/package-testing-utils/compare/v1.0.0...v1.1.0
[1.0.0]: https://github.com/svenluijten/laravel-testing-utils/commits/v1.0.0
