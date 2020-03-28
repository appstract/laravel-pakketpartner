# Laravel Pakketpartner

[![Latest Version on Packagist](https://img.shields.io/packagist/v/appstract/laravel-pakketpartner.svg?style=flat-square)](https://packagist.org/packages/appstract/laravel-pakketpartner)
[![Total Downloads](https://img.shields.io/packagist/dt/appstract/laravel-pakketpartner.svg?style=flat-square)](https://packagist.org/packages/appstract/laravel-pakketpartner)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/appstract/laravel-pakketpartner/master.svg?style=flat-square)](https://travis-ci.org/appstract/laravel-pakketpartner)

## Installation

You can install the package via composer:

``` bash
composer require appstract/laravel-pakketpartner
```

## Usage

``` php
$shipment = Pakketpartner::shipment();

$shipment->order_reference = 'Appstract';

$shipment->save();
```

## Testing

``` bash
composer test
```

## Contributing

Contributions are welcome, [thanks to y'all](https://github.com/appstract/laravel-pakketpartner/graphs/contributors) :)

## About Appstract

Appstract is a small team from The Netherlands. We create (open source) tools for Web Developers and write about related subjects on [Medium](https://medium.com/appstract). You can [follow us on Twitter](https://twitter.com/appstractnl), [buy us a beer](https://www.paypal.me/appstract/10) or [support us on Patreon](https://www.patreon.com/appstract).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
