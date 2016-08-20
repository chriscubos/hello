## CONTRIBUTION

### Coding Style
Here's the guide on the app

[:white_check_mark:] Indentions     : tab
[:white_check_mark:] Variables      : snake_case
[:white_check_mark:] DB table names : snake_case
[:white_check_mark:] Classes        : StudlyCase
[:white_check_mark:] Functions      : camelCase
[:white_check_mark:] .env variables : Uppercase

### Package Style
All package uses the [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) coding standard and the [PSR-4](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md) autoloading standard.

### PHPDoc
Below is an example of a valid documentation block. The `@param` attribute is followed by two spaces, the argument type, two more spaces, and finally the variable name: (same as with Laravel)

If you want attribution please include your `full name` and `email address`

```php
    /**
     * Register a binding with the container.
     *
     * @param  string|array  $abstract
     * @param  \Closure|string|null  $concrete
     * @param  bool  $shared
     * @author Christopher John Cubos <chris@philippineglobaloutsourcing.com>
     * @return void
     */
    
    public function index($abstract, $concrete = null, $shared = false)
    {
        //
    }
```


