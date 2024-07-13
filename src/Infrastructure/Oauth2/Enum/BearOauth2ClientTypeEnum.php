<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Enum;

enum BearOauth2ClientTypeEnum: string {
    case HELP_SCOUT = 'HELP_SCOUT';
    case GOOGLE = 'GOOGLE';
    case MICROSOFT = 'MICROSOFT';
    case OTHER = 'OTHER';
    case TWITCH = 'TWITCH';

    public function authorizeUri(): string {
        return match ($this) {
            self::HELP_SCOUT => 'https://secure.helpscout.net/authentication/authorizeClientApplication',
            self::GOOGLE => 'https://accounts.google.com/o/oauth2/auth',
            self::MICROSOFT => 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize',
            self::OTHER => 'https://example.com/oauth2/authorize',
            self::TWITCH => 'https://id.twitch.tv/oauth2/authorize',
        };
    }

    public function tokenUri(): string {
        return match ($this) {
            self::HELP_SCOUT => 'https://secure.helpscout.net/authentication/token',
            self::GOOGLE => 'https://accounts.google.com/o/oauth2/token',
            self::MICROSOFT => 'https://login.microsoftonline.com/common/oauth2/v2.0/token',
            self::OTHER => 'https://example.com/oauth2/token',
            self::TWITCH => 'https://id.twitch.tv/oauth2/token',
        };
    }
}
