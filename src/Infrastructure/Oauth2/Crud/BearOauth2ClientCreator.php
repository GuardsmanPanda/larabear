<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Enum\LarabearOauth2ClientTypeEnum;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Interface\BearOauth2ClientTypeEnumInterface;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;

final class BearOauth2ClientCreator {
    public static function create(
        string                       $id,
        string                       $description,
        BearOauth2ClientTypeEnumInterface $oauth2_client_type,
        string                       $encrypted_secret,
        string                       $user_redirect_path,
        string                       $client_base_url = null,
        string                       $client_scope = null,
        string                       $user_scope = '',
    ): BearOauth2Client {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearOauth2Client();

        $model->id = $id;
        $model->description = $description;
        $model->oauth2_client_type_enum = $oauth2_client_type->getValue();
        $model->encrypted_secret = $encrypted_secret;
        $model->user_redirect_path = $user_redirect_path;
        $model->client_base_url = $client_base_url;
        $model->client_scope = $client_scope;
        $model->user_scope = $user_scope;

        $model->save();
        return $model;
    }
}
