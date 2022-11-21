<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearAccessTokenApp;

class BearAccessTokenAppDeleter {
    public static function delete(BearAccessTokenApp $model): void {
        BearDBService::mustBeInTransaction();
        BearDBService::mustBeProperHttpMethod(verbs: ['DELETE']);
        $model->delete();
    }

    public static function deleteFromId(string $id): void {
        self::delete(model: BearAccessTokenApp::findOrFail(id: $id));
    }
}
