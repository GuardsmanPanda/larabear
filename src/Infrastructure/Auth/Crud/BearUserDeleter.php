<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;

class BearUserDeleter {
    public static function delete(BearUser $model): void {
        BearDBService::mustBeInTransaction();
        BearDBService::mustBeProperHttpMethod(verbs: ['DELETE']);
        $model->delete();
    }

    public static function deleteFromId(string $id): void {
        self::delete(model: BearUser::where(column: 'id', operator: '=', value: $id)->sole());
    }
}
