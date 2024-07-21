<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearRoleEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRoleUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

final class BearRoleUserCreator {
    public static function create(
        BearRoleEnumInterface $role,
        string                $user_id
    ): BearRoleUser {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearRoleUser();

        $model->role_enum = $role->getValue();
        $model->user_id = $user_id;

        $model->save();
        return $model;
    }
}
