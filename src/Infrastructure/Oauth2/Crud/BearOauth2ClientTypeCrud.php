<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Enum\LarabearOauth2ClientTypeEnum;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2ClientType;

final class BearOauth2ClientTypeCrud {
    public static function create(LarabearOauth2ClientTypeEnum $enum): void {
        BearDatabaseService::mustBeInTransaction();

        $model = new BearOauth2ClientType();

        $model->enum = $enum->getValue();
        $model->authorize_uri = $enum->getAuthorizeUri();
        $model->token_uri = $enum->getTokenUri();
        $model->default_Scope = $enum->getDefaultScope();

        $model->save();
    }
}