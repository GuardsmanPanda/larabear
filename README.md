# Larabear

Make Laravel strong like bear!

## Installation

You can install the package via composer:

```bash
composer require guardsmanpanda/larabear
```


To enable the majority of the functionality make sure that the "Initiate" middle is enabled on all routes
```php
class HttpKernel extends Kernel {
    // These middlewares are run during every request to your application.
    protected $middleware = [
        Initiate::class,
        OtherMiddleware::class,
    ];
```

 To filter console output from "php artisan" changed main artisan file to:
```php
#!/usr/bin/env php
<?php

use GuardsmanPanda\Larabear\Service\ConsoleOutputFilter;

define('LARAVEL_START', microtime(true));

require __DIR__.'/vendor/autoload.php';
$app = require __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$status = $kernel->handle($input = new Symfony\Component\Console\Input\ArgvInput, new ConsoleOutputFilter);

$kernel->terminate($input, $status);
exit($status);
```
## Usage
You can get proper type check data from the request by using the "Req" class:
```php
class MyController extends Controller {
    public function myMethod(): JsonResponse {
        $data = Req::getString('data');
```

### Security

If you discover any security related issues, please email guardsmanpanda@gmail.com instead of using the issue tracker.

## Credits

-   [Bjørn Dons](https://github.com/guardsmanpanda)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
