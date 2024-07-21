<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Interface\BearRoleEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearRole;

final class BearRoleCrud {
    public static function create(BearRoleEnumInterface $role): BearRole {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearRole();

        $model->enum = $role->getValue();
        $model->description = $role->getDescription();

        $model->save();
        return $model;
    }


    public static function update(BearRoleEnumInterface $role): BearRole {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);
        $model = BearRole::findOrFail($role->getValue());

        $model->description = $role->getDescription();

        $model->save();
        return $model;
    }
}
