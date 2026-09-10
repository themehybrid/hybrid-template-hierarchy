# Change Log

You can see the changes made via the [commit log](https://github.com/themehybrid/hybrid-template-hierarchy/commits/master) for the latest release.

## [Unreleased]

### Fixed

- Guard `single()` and `taxonomy()` against a null queried object. Both reset
  the hierarchy and then read properties off `get_queried_object()`, which is
  null on any request without a queried post or term -- an admin screen, for
  one -- producing a run of "Attempt to read property on null" warnings per
  page load. Both now return the incoming hierarchy untouched instead.

## [1.0.4] - 2026-06-03

### Changed

- Restrict template filtering to PHP files on frontend
- Fix typo in `sr/Component.php`
- Bump min req PHP to 8.2+, and min req WP to 6.9+
- Update copyright date
- Update lint php

## [1.0.3] - 2024-08-01

### Changed

- Add composer minimum-stability to "dev"
- Add composer prefer-stable to true
- Add composer sort-packages configuration
- Update copyright date
- Update lint php

## [1.0.2] - 2023-08-02

### Updated

- Lint php files
- Lint composer.json

## [1.0.1] - 2023-02-20

### Updated

- Update copyright year
- Update copyright author
- Bump php version from 5.6 -> 7.4
- Improve compatibility with Hybrid Core v7
- Bump Hybrid Core version to 7.0
- Bump Hybrid Contracts version to 2.0

## [1.0.0] - 2021-08-01

### Added

- Launch.  Everything's new!
