<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRoleUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

final class BearRoleUserCreator {
    public static function create(
        string $role_slug,
        string $user_id
    ): BearRoleUser {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST']);

        $model = new BearRoleUser();

        $model->role_slug = $role_slug;
        $model->user_id = $user_id;

        $model->save();
        return $model;
    }
}
