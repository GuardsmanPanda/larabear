<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Enum;

enum BearExternalApiAuthEnum: string {
    case NO_AUTH = 'NO_AUTH';
    case BASIC_AUTH = 'BASIC_AUTH';
    case BEARER_TOKEN = 'BEARER_TOKEN';
    case HEADER_X_API_KEY = 'HEADER_X_API_KEY';
    case HEADER_X_POSTMARK_SERVER_TOKEN = 'HEADER_X_POSTMARK_SERVER_TOKEN';
    case OAUTH2 = 'OAUTH2';
    case OAUTH2_CLIENT = 'OAUTH2_CLIENT';
    case QUERY_ACCESS_TOKEN = 'QUERY_ACCESS_TOKEN';
    case QUERY_KEY = 'QUERY_KEY';


    public function headerName(): string|null {
        return match ($this) {
            self::BASIC_AUTH, self::BEARER_TOKEN => 'Authorization',
            self::HEADER_X_API_KEY => 'X-Api-Key',
            self::HEADER_X_POSTMARK_SERVER_TOKEN => 'X-Postmark-Server-Token',
            default => null,
        };
    }


    public function queryName(): string|null {
        return match ($this) {
            self::QUERY_ACCESS_TOKEN => 'access_token',
            self::QUERY_KEY => 'key',
            default => null,
        };
    }


    public function tokenPrefix(): string {
        return match ($this) {
            self::BASIC_AUTH => 'Basic ',
            self::BEARER_TOKEN => 'Bearer ',
            default => '',
        };
    }
}
