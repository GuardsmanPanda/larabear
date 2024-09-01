<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearAccessToken;

final class BearAccessTokenDeleter {
    public static function delete(BearAccessToken $model): void {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['DELETE']);
        BearDatabaseService::mustBeInTransaction();
        $model->delete();
    }

    public static function deleteFromId(string $id): void {
        self::delete(model: BearAccessToken::findOrFail(id: $id));
    }
}
