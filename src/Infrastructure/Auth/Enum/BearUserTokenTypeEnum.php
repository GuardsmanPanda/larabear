<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Enum;

enum BearUserTokenTypeEnum: string {
    case BEARER = 'BEARER';
    case PASSWORD_RESET = 'PASSWORD_RESET';
    case REMEMBER_TOKEN = 'REMEMBER_TOKEN';
}