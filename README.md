# <img src="res/platinum.png" alt="" height="80" /> PSN Trophies (PHP API)

![version 0.2.1](https://img.shields.io/badge/version-0.2.1-blue.svg)
[![Build status](https://img.shields.io/travis/nhuhoai/psn-trophies.svg)](https://travis-ci.org/nhuhoai/psn-trophies)
[![Coveralls github](https://img.shields.io/coveralls/github/nhuhoai/psn-trophies.svg)](https://coveralls.io/github/nhuhoai/psn-trophies)
![License](https://img.shields.io/github/license/nhuhoai/psn-trophies.svg)

## Description

This is an unofficial API to get data from PlayStation Network. The main goal of this project is to make a proof of concept.

This project is based on those two repositories:

- [PHP wrapper for PSN API](https://github.com/Tustin/psn-php) by [@Tustin](https://github.com/Tustin)
- [PSN API in python](https://github.com/mgp25/psn-api) by [@mgp25](https://github.com/mgp25)

## Release notes

**All-in-one login**

#### Additions

-   All-in-one method for first authentication (get refresh token)

_For the complete history, please refer to [CHANGELOG.md](CHANGELOG.md)._

### Versioning

This project uses the [semantic versioning 2.0.0](https://semver.org/).

## Getting started

### Prerequisites

-   PHP 7.2 or greater
    -   curl module
-   PSN account with two factor authentication enabled

### Installing

-   Clone this project (or download the zip archive)

### Running

## Test, quality code and coverage

### Prerequisites

-   [PHPUnit 7](https://phpunit.de/)
-   [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)

### Testing

Use ```phpunit``` on the project's root directory.

### Quality checking

Use ```phpcs``` on the project's root directory.

### Coverage

Use ```phpunit``` on the project's root directory.

## Contributing

This project is using the [contributor covenant 1.4.1](https://www.contributor-covenant.org/). Please refer to [CONTRIBUTING.md](CONTRIBUTING.md).

## License and copyright

[MIT license](LICENSE.md)

&copy; 2019 Nhu-Hoai Robert VO
