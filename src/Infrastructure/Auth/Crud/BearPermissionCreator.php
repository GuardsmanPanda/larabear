<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearPermission;
use RuntimeException;

class BearPermissionCreator {
    public static function create(
        string $permission_slug,
        string $permission_description = null
    ): BearPermission {
        BearDBService::mustBeInTransaction();
        if (!Req::isWriteRequest()) {
            throw new RuntimeException(message: 'Database write operations should not be performed in read-only [GET, HEAD, OPTIONS] requests.');
        }
        $model = new BearPermission();

        $model->permission_slug = $permission_slug;
        $model->permission_description = $permission_description;

        $model->save();
        return $model;
    }
}
