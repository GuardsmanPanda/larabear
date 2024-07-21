<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Enum;

use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud\BearOauth2ClientTypeCrud;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Interface\BearOauth2ClientTypeEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2ClientType;

enum LarabearOauth2ClientTypeEnum: string implements BearOauth2ClientTypeEnumInterface {
    case HELP_SCOUT = 'HELP_SCOUT';
    case GOOGLE = 'GOOGLE';
    case MICROSOFT = 'MICROSOFT';
    case TWITCH = 'TWITCH';

    public function getValue(): string {
        return $this->value;
    }

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

    public function getDefaultScope(): string {
        return match ($this) {
            self::GOOGLE => 'openid https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email',
            self::MICROSOFT => 'openid offline_access profile email ',
            self::TWITCH => 'openid user:read:email',
            self::HELP_SCOUT => '',
        };
    }


    public static function syncToDatabase(): void {
        foreach (self::cases() as $clientType) {
            if (BearOauth2ClientType::find(id: $clientType->value) !== null) {
                BearOauth2ClientTypeCrud::create($clientType);
            }
        }
    }
}
