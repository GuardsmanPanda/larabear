<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Enum;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearPermissionCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearPermissionInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearPermission;

enum LarabearPermissionEnum: string implements BearPermissionInterface {
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
            if (BearPermission::find(id: $permission->getValue()) !== null) {
                BearPermissionCreator::create($permission);
            }
        }
    }
}
