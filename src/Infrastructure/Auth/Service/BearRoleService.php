<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Service;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearRoleCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRole;

final class BearRoleService {
    public static function roleExists(string $role_slug): bool {
        return BearRole::find(id: $role_slug) !== null;
    }

    public static function createIfNotExists(string $role_slug, string $role_description): BearRole|null {
        if (!self::roleExists(role_slug: $role_slug)) {
            return BearRoleCreator::create(role_slug: $role_slug, role_description: $role_description);
        }
        return null;

    }
}
