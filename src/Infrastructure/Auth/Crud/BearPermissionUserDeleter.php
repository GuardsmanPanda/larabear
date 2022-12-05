<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearPermissionUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

class BearPermissionUserDeleter {
    public static function delete(BearPermissionUser $model): void {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['DELETE']);
        $model->delete();
    }
}
