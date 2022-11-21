<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRolePermission;
use RuntimeException;

class BearRolePermissionCreator {
    public static function create(
        string $role_slug,
        string $permission_slug
    ): BearRolePermission {
        BearDBService::mustBeInTransaction();
        if (!Req::isWriteRequest()) {
            throw new RuntimeException(message: 'Database write operations should not be performed in read-only [GET, HEAD, OPTIONS] requests.');
        }
        $model = new BearRolePermission();

        $model->role_slug = $role_slug;
        $model->permission_slug = $permission_slug;

        $model->save();
        return $model;
    }
}
