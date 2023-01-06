<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRolePermission;

final class BearRolePermissionCreator {
    public static function create(
        string $role_slug,
        string $permission_slug
    ): BearRolePermission {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST']);

        $model = new BearRolePermission();

        $model->role_slug = $role_slug;
        $model->permission_slug = $permission_slug;

        $model->save();
        return $model;
    }
}
