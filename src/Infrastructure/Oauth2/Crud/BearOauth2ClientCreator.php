<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;

class BearOauth2ClientCreator {
    public static function create(
        string $oauth2_client_id,
        string $oauth2_client_slug,
        string $oauth2_client_description,
        string $oauth2_client_type,
        string $oauth2_authorize_uri,
        string $oauth2_token_uri,
        string $encrypted_oauth2_client_secret,
        string $oauth2_client_base_url = null,
        string $oauth2_client_scope = null,
        string $oauth2_client_redirect_path = null,
        string $oauth2_user_scope = null,
    ): BearOauth2Client {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH']);

        $model = new BearOauth2Client();

        $model->oauth2_client_id = $oauth2_client_id;
        $model->oauth2_client_slug = $oauth2_client_slug;
        $model->oauth2_client_description = $oauth2_client_description;
        $model->oauth2_client_type = $oauth2_client_type;
        $model->oauth2_authorize_uri = $oauth2_authorize_uri;
        $model->oauth2_token_uri = $oauth2_token_uri;
        $model->encrypted_oauth2_client_secret = $encrypted_oauth2_client_secret;
        $model->oauth2_client_base_url = $oauth2_client_base_url;
        $model->oauth2_client_scope = $oauth2_client_scope;
        $model->oauth2_client_redirect_path = $oauth2_client_redirect_path;
        $model->oauth2_user_scope = $oauth2_user_scope ?? '';

        $model->save();
        return $model;
    }
}
