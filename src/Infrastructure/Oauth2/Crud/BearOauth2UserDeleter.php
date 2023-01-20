<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2User;

final class BearOauth2UserDeleter {
    public static function delete(BearOauth2User $model): void {
        BearDatabaseService::mustBeInTransaction();
        $model->delete();
    }

    public static function deleteFromId(string $id): void {
        self::delete(model: BearOauth2User::findOrFail(id: $id));
    }
}
