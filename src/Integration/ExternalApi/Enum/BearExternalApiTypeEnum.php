<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Enum;

enum BearExternalApiTypeEnum: string {
    case BASIC_AUTH = 'BASIC_AUTH';
    case BEARER_TOKEN = 'BEARER_TOKEN';
    case NO_AUTH = 'NO_AUTH';
    case OAUTH2 = 'OAUTH2';
    case OAUTH2_CLIENT = 'OAUTH2_CLIENT';
    case X_API_KEY = 'X_API_KEY';
    case X_GOOG_API_KEY = 'X_GOOG_API_KEY';
    case X_POSTMARK_SERVER_TOKEN = 'X_POSTMARK_SERVER_TOKEN';
    case UNKNOWN = 'UNKNOWN';
}
