<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Enum;

enum  BearExternalApiTypeEnum: string {
    case BEARER_TOKEN = 'BEARER_TOKEN';
    case OAUTH2 = 'OAUTH2';
    case X_API_KEY = 'X_API_KEY';
    case UNKNOWN = 'UNKNOWN';
}
