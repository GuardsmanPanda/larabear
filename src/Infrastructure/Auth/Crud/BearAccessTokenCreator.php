<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearAccessToken;
use Illuminate\Support\Str;

final class BearAccessTokenCreator {
    /**
     * @param string $path_prefix_restriction
     * @param string $description
     * @param string|null $access_token
     * @param string $ip_restriction
     * @param string|null $api_primary_key
     * @param CarbonInterface|null $expires_at
     * @return array{BearAccessToken, string}
     */
    public static function create(
        string          $path_prefix_restriction,
        string          $description,
        string          $access_token = null,
        string          $ip_restriction = '0.0.0.0/0',
        string          $api_primary_key = null,
        CarbonInterface $expires_at = null,
    ): array {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT']);
        BearDatabaseService::mustBeInTransaction();

        $model = new BearAccessToken();
        $model->id = Str::uuid()->toString();

        $model->path_prefix_restriction = trim(string: $path_prefix_restriction, characters: '/ ');
        $model->ip_restriction = $ip_restriction;
        $model->description = trim($description);
        $model->api_primary_key = $api_primary_key;
        $model->expires_at = $expires_at;

        if ($access_token === null || $access_token === '') {
            $access_token = "token/" . Str::random(length: 32) . "/$model->path_prefix_restriction";
        }

        $model->hashed_access_token = hash(algo: 'xxh128', data: $access_token);

        $model->save();
        return [$model, $access_token];
    }
}
