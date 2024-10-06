<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearSqlService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearRoleEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRolePermission;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

final class BearRolePermissionCrud {
    public static function syncToDatabase(BearRoleEnumInterface $role): void {
        BearDatabaseService::mustBeInTransaction();
        $permissions_in_database = BearSqlService::toValueArray(sql: "
            SELECT permission_enum
            FROM bear_role_permission
            WHERE role_enum = ?
        ", bindings: [$role->getValue()]);
        $permissions_in_enum = [];
        foreach ($role->getRolePermission() as $permission) {
            $permissions_in_enum[] = $permission->getValue();
            $model = BearRolePermission::find(ids: ['role_enum' => $role->getValue(), 'permission_enum' => $permission->getValue()]) ?? new BearRolePermission();
            $model->role_enum = $role->getValue();
            $model->permission_enum = $permission->getValue();
            $model->save();
        }
        foreach ($permissions_in_database as $permission) {
            if (!in_array(needle: $permission, haystack: $permissions_in_enum, strict: true)) {
                BearRolePermission::find(ids: ['role_enum' => $role->getValue(), 'permission_enum' => $permission])?->delete();
            }
        }
    }
}
