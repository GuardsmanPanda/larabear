<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Interface\BearExternalApiEnumInterface;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Model\BearExternalApi;

final class BearExternalApiCreator {
    public static function create(BearExternalApiEnumInterface $enum): BearExternalApi {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearExternalApi();

        $model->enum = $enum->getValue();
        $model->description = $enum->description();
        $model->external_api_auth_enum = $enum->externalApiAuth();
        $model->base_url = $enum->baseUrl();
        $model->oauth2_user_id = $enum->oauth2UserId();
        $model->oauth2_client_id = $enum->oauth2ClientId();
        $model->base_headers_json = $enum->baseHeadersJson();
        $model->metadata_json = $enum->metadataJson();

        $model->save();
        return $model;
    }
}
