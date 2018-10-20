![laravel-testing-utils](https://user-images.githubusercontent.com/11269635/46561515-4d5a2c80-c8f8-11e8-8f16-b0eb950c5102.jpg)

# Laravel Testing Utils

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-circleci]][link-circleci]
[![StyleCI][ico-styleci]][link-styleci]
[![PhpStan][ico-phpstan]][link-phpstan]

This package adds various Laravel-related assertions so you won't have
to write them yourself in every new application. 

## Index
- [Installation](#installation)
  - [Downloading](#downloading)
- [Usage](#usage)
  - [`InteractsWithViews`](#interactswithviews)
  - [`TestCollectionMacros`](#testcollectionmacros)
- [Contributing](#contributing)
- [License](#license)

## Installation
You will have to follow a couple of steps to install this package.

### Downloading
Via [Composer](http://getcomposer.org):

```bash
$ composer require sven/laravel-testing-utils:^1.0 --dev
```

Or add the package to your development dependencies in `composer.json` 
and run `composer update` on the command line to download the package:

```json
{
    "require-dev": {
        "sven/laravel-testing-utils": "^1.0"
    }
}
```

## Usage
You will now have access to several traits and macros to use in your test classes.

### `InteractsWithViews`
This trait adds several view-related assertions. They are used as follows:

```php
<?php

use Sven\LaravelTestingUtils\InteractsWithViews;
use Illuminate\Foundation\Testing\TestCase;

class ServiceTest extends TestCase
{
    use InteractsWithViews;

    /** @test */
    public function it_creates_a_view()
    {
        // ...
        
        $this->assertViewExists('some.view-file');
    }
    
    /** @test */
    public function it_does_not_create_a_view()
    {
        // ...
        
        $this->assertViewNotExists('some.view-file');
    }
    
    /** @test */
    public function the_view_equals()
    {
        // ...
        
        $this->assertViewEquals('The Expected Contents', 'index');        
    }
    
    /** @test */
    public function the_view_does_not_equal()
    {
        // ...
        
        $this->assertViewNotEquals('This Is Not The Content You\'re Looking For', 'index');       
    }
}
```

### `TestCollectionMacros`
This set of macros adds some assertions to Laravel collections: `assertContains` and `assertNotContains`.
They are used as follows:

```php
<?php

use Sven\LaravelTestingUtils\Collections\TestCollectionMacros;
use Illuminate\Foundation\Testing\TestCase;

class ServiceTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        TestCollectionMacros::enable();
    }
        
    /** @test */
    public function it_fetches_some_data()
    {
        // ...
        
        $collection->assertContains('some-item');
        $collection->assertNotContains('some-other-item');
    }
}
```

## Contributing
All contributions (pull requests, issues and feature requests) are
welcome. Make sure to read through the [CONTRIBUTING.md](CONTRIBUTING.md) first,
though. See the [contributors page](../../graphs/contributors) for all contributors.

## License
`sven/laravel-testing-utils` is licensed under the MIT License (MIT). Please see the
[license file](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sven/laravel-testing-utils.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-green.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sven/laravel-testing-utils.svg?style=flat-square
[ico-circleci]: https://img.shields.io/circleci/project/github/svenluijten/laravel-testing-utils.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/102160848/shield
[ico-phpstan]: https://img.shields.io/badge/phpstan-enabled-blue.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/sven/laravel-testing-utils
[link-downloads]: https://packagist.org/packages/sven/laravel-testing-utils
[link-circleci]: https://circleci.com/gh/svenluijten/laravel-testing-utils
[link-styleci]: https://styleci.io/repos/102160848
[link-phpstan]: https://github.com/phpstan/phpstan
