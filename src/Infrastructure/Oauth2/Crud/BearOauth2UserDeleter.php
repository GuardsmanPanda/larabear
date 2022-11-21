<?php

namespace GuardsmanPanda\LarabearAuth\Infrastructure\Oauth2\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\LarabearAuth\Infrastructure\Oauth2\Model\BearOauth2User;

class BearOauth2UserDeleter {
    public static function delete(BearOauth2User $model): void {
        BearDBService::mustBeInTransaction();
        BearDBService::mustBeProperHttpMethod(verbs: ['DELETE']);
        $model->delete();
    }

    public static function deleteFromId(string $id): void {
        self::delete(model: BearOauth2User::findOrFail(id: $id));
    }
}
