<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearPermissionEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearRoleEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRolePermission;

final class BearRolePermissionCreator {
    public static function create(BearRoleEnumInterface $role, BearPermissionEnumInterface $permission): BearRolePermission {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearRolePermission();

        $model->role_enum = $role->getValue();
        $model->permission_enum = $permission->getValue();

        $model->save();
        return $model;
    }
}
