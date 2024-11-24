<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2User;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Support\Str;

final class BearOauth2UserCreator {
    public static function create(
        string           $oauth2_client_id,
        string           $identifier,
        string           $scope,
        ?string          $email = null,
        ?string          $display_name = null,
        ?CarbonInterface $access_token_expires_at = null,
        ?string          $encrypted_access_token = null,
        ?string          $encrypted_refresh_token = null,
        ?BearUser        $user = null,
    ): BearOauth2User {
        BearDatabaseService::mustBeInTransaction();

        $model = new BearOauth2User();
        $model->id = Str::uuid()->toString();

        $model->oauth2_client_id = $oauth2_client_id;
        $model->identifier = $identifier;
        $model->email = $email;
        $model->display_name = $display_name;

        $model->access_token_expires_at = $access_token_expires_at;
        $model->encrypted_access_token = $encrypted_access_token;
        $model->encrypted_refresh_token = $encrypted_refresh_token;

        $model->scope = $scope;
        $model->scope_json = new ArrayObject();
        $dateString = Carbon::now()->toDateString();
        foreach (explode(separator: ' ', string: $scope) as $scope2) {
            $model->scope_json->$scope2 = $dateString;
        }

        $model->user_id = $user?->id;

        $model->save();
        return $model;
    }
}
