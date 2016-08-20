chriscubos/hello
===========================
[![Laravel 5.1](https://img.shields.io/badge/Laravel-5.1-orange.svg?style=flat-square)](http://laravel.com)
[![Laravel 5.2](https://img.shields.io/badge/Laravel-5.2-orange.svg?style=flat-square)](http://laravel.com)
[![Laravel 5.3](https://img.shields.io/badge/Laravel-5.3-orange.svg?style=flat-square)](http://laravel.com)
[![Source](http://img.shields.io/badge/source-chriscubos/hello-blue.svg?style=flat-square)](https://github.com/chriscubos/hello)
[![License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://tldrlegal.com/license/mit-license)


# HELLO PACKAGE
Hello, Chris Package

## INSTALLATION

Add via composer

    composer require chriscubos/hello

Add to _config/app.php_ at the providers []:

    Chriscubos\Hello\HelloServiceProvider::class,

## USAGE

```php
    Hello::world();
    Hello::there();
    Hello::friend('John');
    Hello::message('whatever you want to do');
    Hello::target($target, $action);
```

## TODO
- [x] Hello Module
- [ ] Get User from Auth
- [ ] Migrations
- [ ] Views
- [ ] Routes
- [ ] Controllers
- [ ] Seed
- [ ] Artisan Commands

## TESTING
Run test with

    vendor/bin/phpunit


## OFFICIAL DOCUMENTATION

Documentation for the framework can be found on the [Hello documentation](https://github.com/chriscubos/hello/documentation.md).

## CONTRIBUTE

Thank you for considering to contribute to hello! The guide can be found at [Hello contribute](https://github.com/chriscubos/hello/contribute.md).

## LICENSE
chriscubos/hello is an open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## CREDITS
- [:white_check_mark:] Christopher John Cubos @chriscubos
- [:white_check_mark:] Ehan :cloud: Cubos @ethanskycubos
- [:white_check_mark:] Philippine Global Outsourcing @philippineglobaloutsourcing

## SPECIAL THANKS
[Philippines Outsourcing](http://philippineglobaloutsourcing.com/)
[Laravel Developer](http://chriscubos.xyz/)

(c) Copyright 2016 Christopher John Cubos / Ethan :cloud: Cubos / Philippine Global Outsourcing / chriscubos[0]. All Rights Reserved.



