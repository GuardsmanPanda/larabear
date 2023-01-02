<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearAccessTokenUser;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use http\Exception\RuntimeException;

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
        $token = Req::request()->bearerToken() ?? throw new RuntimeException(message: "No token in use");
        self::deleteFromHashedToken(hashed_token: hash(algo: 'xxh128', data: $token));
    }
}
