<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearAccessTokenApp;
use Illuminate\Support\Str;

final class BearAccessTokenAppCreator {
    public static function create(
        string $route_prefix_restriction,
        string $access_token_purpose,
        string $access_token,
        string $request_ip_restriction = '0.0.0.0/0',
        string $api_primary_key = null,
        CarbonInterface $expires_at = null,
    ): BearAccessTokenApp {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearAccessTokenApp();
        $model->id = Str::uuid()->toString();

        $model->route_prefix_restriction = trim(string: $route_prefix_restriction, characters: '/ ');
        $model->request_ip_restriction = $request_ip_restriction;
        $model->access_token_purpose = trim($access_token_purpose);
        $model->hashed_access_token = hash(algo: 'xxh128', data: $access_token);
        $model->api_primary_key = $api_primary_key;
        $model->expires_at = $expires_at;

        $model->save();
        return $model;
    }
}
