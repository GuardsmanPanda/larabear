<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Enum\BearOauth2ClientTypeEnum;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;

final readonly class BearOauth2ClientUpdater {
    public function __construct(private BearOauth2Client $model) {}

    public static function fromOauth2ClientId(string $oauth2_client_id, bool $lockForUpdate = false): BearOauth2ClientUpdater {
        if ($lockForUpdate) {
            return new BearOauth2ClientUpdater(model: BearOauth2Client::lockForUpdate()->findOrFail(id: $oauth2_client_id));
        }
        return new BearOauth2ClientUpdater(model: BearOauth2Client::findOrFail(id: $oauth2_client_id));
    }

    public function setDescription(string $description): self {
        $this->model->description = $description;
        return $this;
    }

    public function setOauth2ClientType(BearOauth2ClientTypeEnum $oauth2_client_type): self {
        $this->model->oauth2_client_type_enum = $oauth2_client_type;
        return $this;
    }


    public function setEncryptedSecret(string $encrypted_secret): self {
        $this->model->encrypted_secret = $encrypted_secret;
        return $this;
    }

    public function setClientBaseUrl(string|null $client_base_url): self {
        $this->model->client_base_url = $client_base_url;
        return $this;
    }

    public function setClientScope(string|null $client_scope): self {
        $this->model->client_scope = $client_scope;
        return $this;
    }

    public function setEncryptedAccessToken(string|null $encrypted_access_token, CarbonInterface|null $access_token_expires_at): self {
        $this->model->access_token_expires_at = $access_token_expires_at;
        $this->model->encrypted_access_token = $encrypted_access_token;
        $this->model->access_token_error_message = null;
        return $this;
    }

    public function setUserRedirectPath(string|null $user_redirect_path): self {
        $this->model->user_redirect_path = $user_redirect_path;
        return $this;
    }

    public function setUserScope(string $user_scope): self {
        $this->model->user_scope = $user_scope;
        return $this;
    }

    public function setAccessTokenErrorMessage(string|null $access_token_error_message): self {
        $this->model->access_token_error_message = $access_token_error_message;
        $this->model->access_token_expires_at = null;
        $this->model->encrypted_access_token = null;
        return $this;
    }


    public function getAccessTokenExpiresAt(): CarbonInterface|null {
        return $this->model->access_token_expires_at;
    }

    public function getEncryptedOauth2ClientAccessToken(): string {
        return $this->model->encrypted_oauth2_client_access_token ?? '';
    }

    public function update(): BearOauth2Client {
        $this->model->save();
        return $this->model;
    }
}
