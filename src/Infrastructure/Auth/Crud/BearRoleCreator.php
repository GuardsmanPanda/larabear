<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRole;

class BearRoleCreator {
    public static function create(
        string $role_slug,
        string $role_description = null
    ): BearRole {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST']);

        $model = new BearRole();

        $model->role_slug = $role_slug;
        $model->role_description = $role_description;

        $model->save();
        return $model;
    }
}
