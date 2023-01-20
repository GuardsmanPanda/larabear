<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearPermissionUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

final class BearPermissionUserCreator {
    public static function create(
        string $permission_slug,
        string $user_id
    ): BearPermissionUser {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearPermissionUser();

        $model->permission_slug = $permission_slug;
        $model->user_id = $user_id;

        $model->save();
        return $model;
    }
}
