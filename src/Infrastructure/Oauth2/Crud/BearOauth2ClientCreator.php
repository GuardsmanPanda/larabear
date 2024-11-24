<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Enum\LarabearOauth2ClientTypeEnum;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;

final class BearOauth2ClientCreator {
    public static function syncToDatabase(
        string                       $id,
        string                       $description,
        LarabearOauth2ClientTypeEnum $oauth2_client_type,
        string                       $encrypted_secret,
        string                       $user_redirect_path,
        ?string                      $client_base_url = null,
        ?string                      $client_scope = null,
        string                       $user_scope = '',
    ): BearOauth2Client {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);
        BearDatabaseService::mustBeInTransaction();

        $model = BearOauth2Client::find(id: $id);

        if ($model === null) {
            $model = new BearOauth2Client();
            $model->id = $id;
            $model->encrypted_secret = $encrypted_secret;
        }

        $model->description = $description;
        $model->oauth2_client_type_enum = $oauth2_client_type;
        $model->user_redirect_path = $user_redirect_path;
        $model->client_base_url = $client_base_url;
        $model->client_scope = $client_scope;
        $model->user_scope = $user_scope;

        $model->save();
        return $model;
    }
}
