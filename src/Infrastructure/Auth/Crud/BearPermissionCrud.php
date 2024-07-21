<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearPermissionEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearPermission;

final class BearPermissionCrud {
    public static function create(BearPermissionEnumInterface $permission): BearPermission {
        BearDatabaseService::mustBeInTransaction();
        $model = new BearPermission();

        $model->enum = $permission->getValue();
        $model->description = $permission->getDescription();

        $model->save();
        return $model;
    }


    public static function update(BearPermissionEnumInterface $permission): BearPermission {
        BearDatabaseService::mustBeInTransaction();
        $model = BearPermission::findOrFail($permission->getValue());

        $model->description = $permission->getDescription();

        $model->save();
        return $model;
    }
}
