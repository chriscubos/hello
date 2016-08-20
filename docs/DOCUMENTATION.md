DOCMENTATION
============
Welcome to the Hello Package ... This package is meant for a Laravel training by [Christopher John Cubos](http://chriscubos.xyz) .

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
