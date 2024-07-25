<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Enum;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;

enum BearHttpMethodEnum: string {
    case GET = 'GET';
    case POST = 'POST';
    case PUT = 'PUT';
    case PATCH = 'PATCH';
    case DELETE = 'DELETE';
    case OPTIONS = 'OPTIONS';
    case HEAD = 'HEAD';
    case CLI = 'CLI';
}
