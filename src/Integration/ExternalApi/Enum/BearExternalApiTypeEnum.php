<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Enum;

enum BearExternalApiTypeEnum: string {
    case NO_AUTH = 'NO_AUTH';
    case BASIC_AUTH = 'BASIC_AUTH';
    case ACCESS_TOKEN_QUERY = 'ACCESS_TOKEN_QUERY';
    case BEARER_TOKEN = 'BEARER_TOKEN';
    case OAUTH2 = 'OAUTH2';
    case OAUTH2_CLIENT = 'OAUTH2_CLIENT';
    case X_API_KEY = 'X_API_KEY';
    case X_GOOG_API_KEY = 'X_GOOG_API_KEY';
    case X_POSTMARK_SERVER_TOKEN = 'X_POSTMARK_SERVER_TOKEN';
    case UNKNOWN = 'UNKNOWN';
}
