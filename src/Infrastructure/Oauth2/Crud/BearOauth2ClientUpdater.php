<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;

class BearOauth2ClientUpdater {
    public function __construct(private readonly BearOauth2Client $model) {
        BearDBService::mustBeInTransaction();
    }

    public static function fromOauth2ClientId(string $oauth2_client_id, bool $lockForUpdate = false): BearOauth2ClientUpdater {
        if ($lockForUpdate) {
            return new BearOauth2ClientUpdater(model: BearOauth2Client::lockForUpdate()->findOrFail(id: $oauth2_client_id));
        }
        return new BearOauth2ClientUpdater(model: BearOauth2Client::findOrFail(id: $oauth2_client_id));
    }


    public function setOauth2ClientSlug(string $oauth2_client_slug): self {
        $this->model->oauth2_client_slug = $oauth2_client_slug;
        return $this;
    }

    public function setOauth2ClientDescription(string $oauth2_client_description): self {
        $this->model->oauth2_client_description = $oauth2_client_description;
        return $this;
    }

    public function setOauth2ClientType(string $oauth2_client_type): self {
        $this->model->oauth2_client_type = $oauth2_client_type;
        return $this;
    }

    public function setOauth2ClientId(string $oauth2_client_id): self {
        $this->model->oauth2_client_id = $oauth2_client_id;
        return $this;
    }

    public function setOauth2AuthorizeUri(string $oauth2_authorize_uri): self {
        $this->model->oauth2_authorize_uri = $oauth2_authorize_uri;
        return $this;
    }

    public function setOauth2TokenUri(string $oauth2_token_uri): self {
        $this->model->oauth2_token_uri = $oauth2_token_uri;
        return $this;
    }

    public function setEncryptedOauth2ClientSecret(string $encrypted_oauth2_client_secret): self {
        $this->model->encrypted_oauth2_client_secret = $encrypted_oauth2_client_secret;
        return $this;
    }

    public function setOauth2ClientBaseUrl(string|null $oauth2_client_base_url): self {
        $this->model->oauth2_client_base_url = $oauth2_client_base_url;
        return $this;
    }

    public function setOauth2ClientScope(string|null $oauth2_client_scope): self {
        $this->model->oauth2_client_scope = $oauth2_client_scope;
        return $this;
    }

    public function setEncryptedOauth2ClientAccessToken(string|null $encrypted_oauth2_client_access_token, CarbonInterface|null $oauth2_client_access_token_expires_at): self {
        $this->model->oauth2_client_access_token_expires_at = $oauth2_client_access_token_expires_at;
        $this->model->encrypted_oauth2_client_access_token = $encrypted_oauth2_client_access_token;
        $this->model->client_access_token_error_message = null;
        $this->model->client_access_token_first_error_at = null;
        return $this;
    }

    public function setOauth2ClientRedirectPath(string|null $oauth2_client_redirect_path): self {
        $this->model->oauth2_client_redirect_path = $oauth2_client_redirect_path;
        return $this;
    }

    public function setOauth2UserScope(string|null $oauth2_user_scope): self {
        $this->model->oauth2_user_scope = $oauth2_user_scope;
        return $this;
    }

    public function setClientAccessTokenErrorMessage(string|null $client_access_token_error_message): self {
        $this->model->client_access_token_error_message = $client_access_token_error_message;
        $this->model->client_access_token_first_error_at ??= now();
        $this->model->oauth2_client_access_token_expires_at = null;
        $this->model->encrypted_oauth2_client_access_token = null;
        return $this;
    }


    public function getOauth2ClientAccessTokenExpiresAt(): CarbonInterface|null {
        return $this->model->oauth2_client_access_token_expires_at;
    }

    public function getEncryptedOauth2ClientAccessToken(): string {
        return $this->model->encrypted_oauth2_client_access_token ?? '';
    }

    public function save(): BearOauth2Client {
        $this->model->save();
        return $this->model;
    }
}
