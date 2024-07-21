<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Enum;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Config\Crud\BearConfigCreator;
use GuardsmanPanda\Larabear\Infrastructure\Config\Interface\BearConfigEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Config\Model\BearConfig;

enum LarabearConfigEnum: string implements BearConfigEnumInterface {
    case LARABEAR_LOG_STORE_FOR_DAYS = 'LARABEAR::LOG_STORE_FOR_DAYS';
    case LARABEAR_LOG_DATABASE_CHANGE_STORE_FOR_DAYS = 'LARABEAR::LOG_DATABASE_CHANGE_STORE_FOR_DAYS';
    case LARABEAR_LAST_UNIQUE_SHORT_CODE = 'LARABEAR::LAST_UNIQUE_SHORT_CODE';
    case LARABEAR_PATH_TO_REDIRECT_IF_NOT_LOGGED_IN = 'LARABEAR::PATH_TO_REDIRECT_IF_NOT_LOGGED_IN';
    case LARABEAR_PATH_TO_REDIRECT_AFTER_LOGIN = 'LARABEAR::PATH_TO_REDIRECT_AFTER_LOGIN';
    case LARABEAR_OAUTH2_CREATE_USER_IF_NOT_EXISTS = 'LARABEAR::OAUTH2_CREATE_USER_IF_NOT_EXISTS';

    public function getValue(): string {
        return $this->value;
    }


    public function getDescription(): string {
        return match ($this) {
            self::LARABEAR_LOG_STORE_FOR_DAYS => 'Number of days to store logs for.',
            self::LARABEAR_LOG_DATABASE_CHANGE_STORE_FOR_DAYS => 'Number of days to store database change logs for.',
            self::LARABEAR_LAST_UNIQUE_SHORT_CODE => 'Used for generating unique short codes.',
            self::LARABEAR_PATH_TO_REDIRECT_IF_NOT_LOGGED_IN => 'Only used in session auth, if a user must be authenticated to see a route, but the user is not, then the user will be redirected to this path.',
            self::LARABEAR_PATH_TO_REDIRECT_AFTER_LOGIN => 'Used when authenticating through bear-auth, after a user logs in, they will be redirected to this path.',
            self::LARABEAR_OAUTH2_CREATE_USER_IF_NOT_EXISTS => 'If a user logs in via oauth2, but the user does not exist in the database, then create the user.',
        };
    }


    public function getDefaultConfigString(): string|null {
        return match ($this) {
            self::LARABEAR_LAST_UNIQUE_SHORT_CODE => '1',
            self::LARABEAR_PATH_TO_REDIRECT_IF_NOT_LOGGED_IN => '/login',
            self::LARABEAR_PATH_TO_REDIRECT_AFTER_LOGIN => '/dashboard',
            default => null
        };
    }


    public function getDefaultEncryptedConfigString(): string|null {
        return null;
    }


    public function getDefaultConfigInteger(): int|null {
        return match ($this) {
            self::LARABEAR_LOG_STORE_FOR_DAYS => 60,
            self::LARABEAR_LOG_DATABASE_CHANGE_STORE_FOR_DAYS => 9000,
            default => null
        };
    }


    public function getDefaultConfigBoolean(): bool|null {
        return match ($this) {
            self::LARABEAR_OAUTH2_CREATE_USER_IF_NOT_EXISTS => true,
            default => null
        };
    }


    public function getDefaultConfigDate(): CarbonInterface|null {
        return null;
    }


    public function getDefaultConfigTimestamp(): CarbonInterface|null {
        return null;
    }


    public static function syncToDatabase(): void {
        foreach (self::cases() as $config) {
            if (BearConfig::find(id: $config->getValue()) === null) {
                BearConfigCreator::create(enum: $config);
            }
        }
    }
}
