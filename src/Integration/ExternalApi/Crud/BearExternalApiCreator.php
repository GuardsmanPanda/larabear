<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Enum\BearExternalApiTypeEnum;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Model\BearExternalApi;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use InvalidArgumentException;

final class BearExternalApiCreator {
    /**
     * @param string $enum
     * @param string $description
     * @param BearExternalApiTypeEnum $external_api_type
     * @param string|null $encrypted_token
     * @param string|null $base_url
     * @param string|null $oauth2_user_id
     * @param string|null $oauth2_client_id
     * @param ArrayObject<string, string> $base_headers_json
     * @param ArrayObject<string|int, mixed> $metadata_json
     * @return BearExternalApi
     */
    public static function create(
        string                  $enum,
        string                  $description,
        BearExternalApiTypeEnum $external_api_type,
        string                  $encrypted_token = null,
        string                  $base_url = null,
        string                  $oauth2_user_id = null,
        string                  $oauth2_client_id = null,
        ArrayObject             $base_headers_json = new ArrayObject([]),
        ArrayObject             $metadata_json = new ArrayObject([]),
    ): BearExternalApi {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearExternalApi();

        $model->enum = $enum;
        $model->description = $description;
        $model->external_api_type_enum = $external_api_type->value;
        if ($external_api_type === BearExternalApiTypeEnum::BASIC_AUTH) {
            $model->encrypted_token = base64_encode($encrypted_token ?? throw new InvalidArgumentException(message: 'Basic Auth requires a username:password'));
        } else {
            $model->encrypted_token = $encrypted_token;
        }
        $model->base_url = $base_url;
        $model->oauth2_user_id = $oauth2_user_id;
        $model->oauth2_client_id = $oauth2_client_id;
        $model->base_headers_json = $base_headers_json;
        $model->metadata_json = $metadata_json;

        $model->save();
        return $model;
    }
}
