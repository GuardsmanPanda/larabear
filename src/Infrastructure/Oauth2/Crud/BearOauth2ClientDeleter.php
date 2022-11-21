<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;

class BearOauth2ClientDeleter {
    public static function delete(BearOauth2Client $model): void {
        BearDBService::mustBeInTransaction();
        BearDBService::mustBeProperHttpMethod(verbs: ['DELETE']);
        $model->delete();
    }

    public static function deleteFromId(string $id): void {
        self::delete(model: BearOauth2Client::findOrFail(id: $id));
    }
}
