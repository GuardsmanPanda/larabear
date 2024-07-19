<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearPermissionInterface;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearPermission;

final class BearPermissionCreator {
    public static function create(BearPermissionInterface $permission): BearPermission {
        BearDatabaseService::mustBeInTransaction();

        $model = new BearPermission();

        $model->permission_slug = $permission_slug;
        $model->permission_description = $permission_description;

        $model->save();
        return $model;
    }
}
