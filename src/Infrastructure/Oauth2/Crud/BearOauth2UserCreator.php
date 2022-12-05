<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2User;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Support\Str;

class BearOauth2UserCreator {
    public static function create(
        string $oauth2_client_id,
        string $oauth2_user_identifier,
        string $oauth2_scope,
        string $oauth2_user_email = null,
        string $oauth2_user_name = null,
        CarbonInterface $user_access_token_expires_at = null,
        string $encrypted_user_access_token = null,
        string $encrypted_user_refresh_token = null,
        BearUser $user = null,
    ): BearOauth2User {
        BearDatabaseService::mustBeInTransaction();

        $model = new BearOauth2User();
        $model->id = Str::uuid()->toString();

        $model->oauth2_client_id = $oauth2_client_id;
        $model->oauth2_user_identifier = $oauth2_user_identifier;
        $model->oauth2_user_email = $oauth2_user_email;
        $model->oauth2_user_name = $oauth2_user_name;

        $model->user_access_token_expires_at = $user_access_token_expires_at;
        $model->encrypted_user_access_token = $encrypted_user_access_token;
        $model->encrypted_user_refresh_token = $encrypted_user_refresh_token;

        $model->oauth2_scope = $oauth2_scope;
        $model->oauth2_scope_json = new ArrayObject();
        $dateString = Carbon::now()->toDateString();
        foreach (explode(' ', $oauth2_scope) as $scope) {
            $model->oauth2_scope_json->$scope = $dateString;
        }

        $model->user_id = $user?->id;

        $model->save();
        return $model;
    }
}
