<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Service;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearRolePermissionCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRolePermission;

final class BearRolePermissionService {
    public static function rolePermissionExists(string $role_slug, string $permission_slug): bool {
        return BearRolePermission::where(column: 'role_slug', operator: '=', value: $role_slug)
            ->where(column: 'permission_slug', operator: '=', value: $permission_slug)
            ->exists();
    }

    public static function createIfNotExists(string $role_slug, string $permission_slug): BearRolePermission|null {
        if (!self::rolePermissionExists(role_slug: $role_slug, permission_slug: $permission_slug)) {
            return BearRolePermissionCreator::create(role_slug: $role_slug, permission_slug: $permission_slug);
        }
        return null;
    }
}
