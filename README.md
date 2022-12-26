[![Latest Version on Packagist](https://img.shields.io/packagist/v/guardsmanpanda/larabear.svg?style=flat-square)](https://packagist.org/packages/guardsmanpanda/larabear)
[![Total Downloads](https://img.shields.io/packagist/dt/guardsmanpanda/larabear.svg?style=flat-square)](https://packagist.org/packages/guardsmanpanda/larabear)


# Larabear

Make Laravel strong like bear!
***
## Installation

You can install the package via composer:

### Step 1
```bash
composer require guardsmanpanda/larabear
```

### Step 2
Add the Service provider to config/app.php:

```php
    'providers' => [
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        ...
        \GuardsmanPanda\Larabear\Infrastructure\Laravel\Provider\BearServiceProvider::class,
    ],
```

### Step 3
Publish the required config file:
```bash
php artisan vendor:publish --tag=bear
```

### Step 4
To test and verify that the system is configured properly you can run 
```bash
php artisan bear
```

### Step 5
To enable the majority of the functionality make sure that the "BearInitiateMiddleware" is enabled on all routes

```php
class HttpKernel extends Kernel {
    // These middlewares are run during every request to your application.
    protected $middleware = [
        \GuardsmanPanda\Larabear\Infrastructure\Http\Middleware\BearInitiateMiddleware::class,
        OtherMiddleware::class,
    ];
```

### Step 6
 To filter console output from "php artisan" changed main artisan file to:
```php
#!/usr/bin/env php
<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Infrastructure\Console\Service\ConsoleOutputFilter;

define('LARAVEL_START', microtime(true));

require __DIR__.'/vendor/autoload.php';
$app = require __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$status = $kernel->handle($input = new Symfony\Component\Console\Input\ArgvInput, new ConsoleOutputFilter);

$kernel->terminate($input, $status);
exit($status);
```
***
## Usage
You can get proper type check data from the request by using the "Req" class:
```php
class MyController extends Controller {
    public function myMethod(): JsonResponse {
        $data = Req::getString('data');
```
***
### Security

If you discover any security related issues, please email guardsmanpanda@gmail.com instead of using the issue tracker.
***
## Credits

-   [Bjørn Dons](https://github.com/guardsmanpanda)
***
## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
