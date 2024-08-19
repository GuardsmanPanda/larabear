<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Enum;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearPermissionCrud;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearPermissionEnumInterface;

enum LarabearPermissionEnum: string implements BearPermissionEnumInterface {
    case LARABEAR_UI = 'LARABEAR_UI';

    public function getValue(): string {
        return $this->value;
    }

    public function getDescription(): string {
        return match ($this) {
            self::LARABEAR_UI => 'Gives full access to the Larabear UI'
        };
    }

    public static function syncToDatabase(): void {
        foreach (self::cases() as $permission) {
            BearPermissionCrud::syncToDatabase($permission);
        }
    }
}
