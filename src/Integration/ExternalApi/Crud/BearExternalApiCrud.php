<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Interface\BearExternalApiEnumInterface;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Model\BearExternalApi;

final class BearExternalApiCrud {
    public static function syncToDatabase(BearExternalApiEnumInterface $enum): void {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['CLI']);
        BearDatabaseService::mustBeInTransaction();

        $model = BearExternalApi::find($enum->getValue()) ?? new BearExternalApi();

        $model->enum = $enum->getValue();
        $model->description = $enum->description();
        $model->external_api_auth_enum = $enum->externalApiAuth();
        $model->base_url = $enum->baseUrl();
        $model->oauth2_client_id = $enum->oauth2ClientId();
        $model->base_headers_json = $enum->baseHeadersJson();
        $model->metadata_json = $enum->metadataJson();

        $model->save();
    }


    public static function updateEncryptedToken(string $enum, string $encrypted_token): BearExternalApi {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH']);
        BearDatabaseService::mustBeInTransaction();
        $model = BearExternalApi::findOrFail(id: $enum);
        $model->encrypted_token = $encrypted_token;
        $model->save();
        return $model;
    }
}
