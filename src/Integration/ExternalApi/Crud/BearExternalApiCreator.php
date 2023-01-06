<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Enum\BearExternalApiTypeEnum;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Model\BearExternalApi;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Support\Str;

final class BearExternalApiCreator {
    public static function create(
        string $external_api_slug,
        string $external_api_description,
        BearExternalApiTypeEnum $external_api_type,
        string $encrypted_external_api_token = null,
        string $external_api_base_url = null,
        string $oauth2_user_id = null,
        ArrayObject $external_api_base_headers_json = null,
        ArrayObject $external_api_metadata_json = null
    ): BearExternalApi {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST']);

        $model = new BearExternalApi();
        $model->id = Str::uuid()->toString();

        $model->external_api_slug = $external_api_slug;
        $model->external_api_description = $external_api_description;
        $model->external_api_type = $external_api_type;
        $model->encrypted_external_api_token = $encrypted_external_api_token;
        $model->external_api_base_url = $external_api_base_url;
        $model->oauth2_user_id = $oauth2_user_id;
        $model->external_api_base_headers_json = $external_api_base_headers_json;
        $model->external_api_metadata_json = $external_api_metadata_json;

        $model->save();
        return $model;
    }
}
