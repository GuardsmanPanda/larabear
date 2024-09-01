<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearRoleEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRole;

final class BearRoleCrud {
    public static function syncToDatabase(BearRoleEnumInterface $role): void {
        BearDatabaseService::mustBeInTransaction();

        $model = BearRole::find(id: $role->getValue()) ?? new BearRole();
        $model->enum = $role->getValue();
        $model->description = $role->getDescription();

        $model->save();
    }
}
