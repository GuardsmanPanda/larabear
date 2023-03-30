<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearAccessTokenApp;
use Illuminate\Support\Str;

final class BearAccessTokenAppCreator {
    /**
     * @param string $route_prefix_restriction
     * @param string $access_token_purpose
     * @param string|null $access_token
     * @param string $request_ip_restriction
     * @param string|null $api_primary_key
     * @param CarbonInterface|null $expires_at
     * @return array{BearAccessTokenApp, string}
     */
    public static function create(
        string $route_prefix_restriction,
        string $access_token_purpose,
        string $access_token = null,
        string $request_ip_restriction = '0.0.0.0/0',
        string $api_primary_key = null,
        CarbonInterface $expires_at = null,
    ): array {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearAccessTokenApp();
        $model->id = Str::uuid()->toString();

        $model->route_prefix_restriction = trim(string: $route_prefix_restriction, characters: '/ ');
        $model->request_ip_restriction = $request_ip_restriction;
        $model->access_token_purpose = trim($access_token_purpose);
        $model->api_primary_key = $api_primary_key;
        $model->expires_at = $expires_at;

        if ($access_token === null || $access_token === '') {
            $access_token = "token/" . Str::random(length: 32) . "/$model->route_prefix_restriction";
        }

        $model->hashed_access_token = hash(algo: 'xxh128', data: $access_token);

        $model->save();
        return [$model, $access_token];
    }
}
