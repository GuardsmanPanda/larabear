<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Enum\BearExternalApiTypeEnum;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Model\BearExternalApi;
use Illuminate\Database\Eloquent\Casts\ArrayObject;

class BearExternalApiUpdater {
    public function __construct(private readonly BearExternalApi $model) {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['PATCH']);
    }

    public static function fromId(string $id): self {
        return new self(model: BearExternalApi::findOrFail(id: $id));
    }


    public function setExternalApiSlug(string $external_api_slug): self {
        $this->model->external_api_slug = $external_api_slug;
        return $this;
    }

    public function setExternalApiDescription(string $external_api_description): self {
        $this->model->external_api_description = $external_api_description;
        return $this;
    }

    public function setExternalApiType(BearExternalApiTypeEnum $external_api_type): self {
        $this->model->external_api_type = $external_api_type;
        return $this;
    }

    public function setEncryptedExternalApiToken(string|null $encrypted_external_api_token): self {
        $this->model->encrypted_external_api_token = $encrypted_external_api_token;
        return $this;
    }

    public function setExternalApiBaseUrl(string|null $external_api_base_url): self {
        $this->model->external_api_base_url = $external_api_base_url;
        return $this;
    }

    public function setOauth2UserId(string|null $oauth2_user_id): self {
        $this->model->oauth2_user_id = $oauth2_user_id;
        return $this;
    }

    public function setExternalApiBaseHeadersJson(ArrayObject|null $external_api_base_headers_json): self {
        $this->model->external_api_base_headers_json = $external_api_base_headers_json;
        return $this;
    }

    public function setExternalApiMetadataJson(ArrayObject|null $external_api_metadata_json): self {
        $this->model->external_api_metadata_json = $external_api_metadata_json;
        return $this;
    }

    public function update(): BearExternalApi {
        $this->model->save();
        return $this->model;
    }
}
