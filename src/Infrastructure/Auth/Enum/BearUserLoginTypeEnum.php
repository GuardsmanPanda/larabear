<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Enum;

enum BearUserLoginTypeEnum: string {
    case OAUTH2 = 'OAUTH2';
    case USER_API = 'USER_API';
    case WEB_FORM = 'WEB_FORM';
}
