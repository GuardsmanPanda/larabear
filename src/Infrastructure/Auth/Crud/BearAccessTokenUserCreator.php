<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Enum\BearUserTokenTypeEnum;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearAccessTokenUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

class BearAccessTokenUserCreator {
    public static function create(
        string $token,
        string $user_id,
        CarbonInterface $expires_at,
        BearUserTokenTypeEnum $user_token_type = BearUserTokenTypeEnum::BEARER,
    ): BearAccessTokenUser {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST']);

        $model = new BearAccessTokenUser();

        $model->hashed_token = hash(algo: 'xxh128', data: $token);
        $model->user_id = $user_id;
        $model->expires_at = $expires_at;
        $model->user_token_type = $user_token_type;

        $model->save();
        return $model;
    }
}
