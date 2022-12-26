<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearAccessTokenUser;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

class BearAccessTokenUserDeleter {
    public static function delete(BearAccessTokenUser $model): void {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['DELETE']);
        $model->delete();
    }

    public static function deleteAllTokensForUser(BearUser $user): void {
        BearDatabaseService::mustBeInTransaction();
        BearAccessTokenUser::where('user_id', $user->id)->delete();
    }

    public static function deleteFromHashedToken(string $hashed_token): void {
        self::delete(model: BearAccessTokenUser::findOrFail(id: $hashed_token));
    }
}
