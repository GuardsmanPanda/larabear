<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Enum\BearExternalApiTypeEnum;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Model\BearExternalApi;
use Illuminate\Database\Eloquent\Casts\ArrayObject;

final readonly class BearExternalApiUpdater {
    public function __construct(private BearExternalApi $model) {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);
    }

    public static function fromEnum(string $enum): self {
        return new self(model: BearExternalApi::findOrFail(id: $enum));
    }

    public function setDescription(string $description): self {
        $this->model->description = $description;
        return $this;
    }

    public function setExternalApiType(BearExternalApiTypeEnum $external_api_type): self {
        $this->model->external_api_type_enum = $external_api_type->value;
        return $this;
    }

    public function setEncryptedToken(string|null $encrypted_token): self {
        $this->model->encrypted_token = $encrypted_token;
        return $this;
    }

    public function setBaseUrl(string|null $base_url): self {
        $this->model->base_url = $base_url;
        return $this;
    }

    public function setOauth2UserId(string|null $oauth2_user_id): self {
        $this->model->oauth2_user_id = $oauth2_user_id;
        return $this;
    }

    /**
     * @param ArrayObject<string, string>|null $base_headers_json
     * @return $this
     */
    public function setBaseHeadersJson(ArrayObject|null $base_headers_json): self {
        $this->model->base_headers_json = $base_headers_json;
        return $this;
    }

    /**
     * @param ArrayObject<string|int, mixed>|null $metadata_json
     * @return $this
     */
    public function setMetadataJson(ArrayObject|null $metadata_json): self {
        $this->model->metadata_json = $metadata_json;
        return $this;
    }

    public function update(): BearExternalApi {
        $this->model->save();
        return $this->model;
    }
}
