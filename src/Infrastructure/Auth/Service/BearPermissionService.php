<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Service;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearPermissionCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearPermission;

final class BearPermissionService {
    public static function permissionExists(string $permission_slug): bool {
        return BearPermission::find(id: $permission_slug) !== null;
    }

    public static function createIfNotExists(string $permission_slug, string $permission_description): BearPermission|null {
        if (!self::permissionExists(permission_slug: $permission_slug)) {
            return BearPermissionCreator::create(permission_slug: $permission_slug, permission_description: $permission_description);
        }
        return null;
    }
}
