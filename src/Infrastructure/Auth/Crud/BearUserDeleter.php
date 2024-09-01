<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

final class BearUserDeleter {
    public static function delete(BearUser $model): void {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);
        BearDatabaseService::mustBeInTransaction();
        $model->delete();
    }

    public static function deleteFromId(string $id): void {
        self::delete(model: BearUser::findOrFail(id: $id));
    }
}
