<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Enum\BearExternalApiAuthEnum;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Model\BearExternalApi;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use InvalidArgumentException;

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

    public function setExternalApiAuth(BearExternalApiAuthEnum $external_api_auth): self {
        $this->model->external_api_auth_enum = $external_api_auth;
        return $this;
    }

    public function setEncryptedToken(string|null $encrypted_token): self {
        if ($this->model->external_api_auth_enum === BearExternalApiAuthEnum::BASIC_AUTH) {
            $this->model->encrypted_token = base64_encode(string: $encrypted_token ?? throw new InvalidArgumentException(message: 'Basic Auth requires a username:password'));
        } else {
            $this->model->encrypted_token = $encrypted_token;
        }
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
     * @param ArrayObject<string, mixed>|null $metadata_json
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
