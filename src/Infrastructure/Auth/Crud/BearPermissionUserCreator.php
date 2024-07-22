<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearPermissionEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearPermissionUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

final class BearPermissionUserCreator {
    public static function create(BearPermissionEnumInterface $permission, string $user_id): BearPermissionUser {
        return self::createFromString(permission_enum: $permission->getValue(), user_id: $user_id);
    }

    public static function createFromString(string $permission_enum, string $user_id): BearPermissionUser {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearPermissionUser();

        $model->permission_enum = $permission_enum;
        $model->user_id = $user_id;

        $model->save();
        return $model;
    }
}
