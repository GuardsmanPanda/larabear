<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearPermission;
use RuntimeException;

class BearPermissionDeleter {
    public static function delete(BearPermission $model): void {
        BearDatabaseService::mustBeInTransaction();
        if (!Req::isWriteRequest()) {
            throw new RuntimeException(message: 'Database write operations should not be performed in read-only [GET, HEAD, OPTIONS] requests.');
        }
        $model->delete();
    }

    public static function deleteFromPermissionSlug(string $permission_slug): void {
        self::delete(model: BearPermission::where(column: 'permission_slug', operator:'=', value: $permission_slug)->sole());
    }
}
