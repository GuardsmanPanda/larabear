<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Enum;

enum BearOauth2ClientTypeEnum: string {
    case HELP_SCOUT = 'HELP_SCOUT';
    case GOOGLE = 'GOOGLE';
    case MICROSOFT = 'MICROSOFT';
    case OTHER = 'OTHER';
    case TWITCH = 'TWITCH';
}
