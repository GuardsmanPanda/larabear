<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRole;
use RuntimeException;

class BearRoleCreator {
    public static function create(
        string $role_slug,
        string $role_description = null
    ): BearRole {
        BearDBService::mustBeInTransaction();
        if (!Req::isWriteRequest()) {
            throw new RuntimeException(message: 'Database write operations should not be performed in read-only [GET, HEAD, OPTIONS] requests.');
        }
        $model = new BearRole();

        $model->role_slug = $role_slug;
        $model->role_description = $role_description;

        $model->save();
        return $model;
    }
}
