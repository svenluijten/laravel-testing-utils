![package-testing-utils](:hero)

# package-testing-utils

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-circleci]][link-circleci]
[![StyleCI][ico-styleci]][link-styleci]

Short description of the package. What does it do and why should people download
it? Brag a bit but don't exaggerate. Talk about what's to come and tease small
pieces of functionality.

> PackageTestingUtils
> package-testing-utils
> :styleci
> :hero


## Index
- [Installation](#installation)
  - [Downloading](#downloading)
  - [Registering the service provider](#registering-the-service-provider)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Installation
You'll have to follow a couple of simple steps to install this package.

### Downloading
Via [composer](http://getcomposer.org):

```bash
$ composer require sven/package-testing-utils
```

Or add the package to your dependencies in `composer.json` and run
`composer update` on the command line to download the package:

```json
{
    "require": {
        "sven/package-testing-utils": "*"
    }
}
```


### Registering the service provider
> Is this a Laravel package?

Next, add the `ServiceProvider` to your `providers` array in `config/app.php`:

```php
'providers' => [
    ...
    Sven\PackageTestingUtils\ServiceProvider::class,
];
```

If you would like to load this package in certain environments only, take a look
at [sven/env-providers](https://github.com/svenluijten/env-providers).

## Usage
Some examples of the code. How should people use it, what options does this package
provide? Should people be wary of some functionality?

```php
Maybe some code?
```

## Contributing
All contributions (pull requests, issues and feature requests) are
welcome. Make sure to read through the [CONTRIBUTING.md](CONTRIBUTING.md) first,
though. See the [contributors page](../../graphs/contributors) for all contributors.

## License
`sven/package-testing-utils` is licensed under the MIT License (MIT). Please see the
[license file](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sven/package-testing-utils.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-green.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sven/package-testing-utils.svg?style=flat-square
[ico-circleci]: https://img.shields.io/circleci/project/github/svenluijten/package-testing-utils.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/:styleci/shield

[link-packagist]: https://packagist.org/packages/sven/package-testing-utils
[link-downloads]: https://packagist.org/packages/sven/package-testing-utils
[link-circleci]: https://circleci.com/gh/svenluijten/package-testing-utils
[link-styleci]: https://styleci.io/repos/:styleci
