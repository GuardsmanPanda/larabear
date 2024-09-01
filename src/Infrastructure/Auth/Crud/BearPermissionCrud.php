<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearPermissionEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearPermission;

final class BearPermissionCrud {
    public static function syncToDatabase(BearPermissionEnumInterface $permission): void {
        BearDatabaseService::mustBeInTransaction();

        $model = BearPermission::find($permission->getValue()) ?? new BearPermission();
        $model->enum = $permission->getValue();
        $model->description = $permission->getDescription();

        $model->save();
    }
}
