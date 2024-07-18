<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Enum;

enum BearOauth2ClientTypeEnum: string {
    case HELP_SCOUT = 'HELP_SCOUT';
    case GOOGLE = 'GOOGLE';
    case MICROSOFT = 'MICROSOFT';
    case TWITCH = 'TWITCH';

    public function getAuthorizeUri(): string {
        return match ($this) {
            self::HELP_SCOUT => 'https://secure.helpscout.net/authentication/authorizeClientApplication',
            self::GOOGLE => 'https://accounts.google.com/o/oauth2/auth',
            self::MICROSOFT => 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize',
            self::TWITCH => 'https://id.twitch.tv/oauth2/authorize',
        };
    }

    public function getTokenUri(): string {
        return match ($this) {
            self::HELP_SCOUT => 'https://secure.helpscout.net/authentication/token',
            self::GOOGLE => 'https://accounts.google.com/o/oauth2/token',
            self::MICROSOFT => 'https://login.microsoftonline.com/common/oauth2/v2.0/token',
            self::TWITCH => 'https://id.twitch.tv/oauth2/token',
        };
    }

    public function getDefaultScopes(): string {
        return match ($this) {
            self::GOOGLE => 'openid https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email',
            self::MICROSOFT => 'openid offline_access profile email ',
            self::TWITCH => 'openid user:read:email',
            self::HELP_SCOUT => '',
        };
    }
}
