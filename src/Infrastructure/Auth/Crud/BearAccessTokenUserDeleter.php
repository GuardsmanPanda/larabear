<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearAccessTokenUser;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;

class BearAccessTokenUserDeleter {
    public static function delete(BearAccessTokenUser $model): void {
        $model->delete();
    }

    public static function deleteAllTokensForUser(BearUser $user): void {
        BearAccessTokenUser::where('user_id', $user->id)->delete();
    }

    public static function deleteFromHashedToken(string $hashed_token): void {
        self::delete(model: BearAccessTokenUser::findOrFail(id: $hashed_token));
    }

    public static function deleteCurrentlyUsedToken(): void {
        self::deleteFromHashedToken(hashed_token: hash(algo: 'xxh128', data: Req::request()->bearerToken()));
    }
}
