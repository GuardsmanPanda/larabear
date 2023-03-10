<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2User;
use Illuminate\Database\Eloquent\Casts\ArrayObject;

final class BearOauth2UserUpdater {
    public function __construct(private readonly BearOauth2User $model) {
        BearDatabaseService::mustBeInTransaction();
    }

    public static function fromId(string $id, bool $lockForUpdate): self {
        if ($lockForUpdate) {
            return new self(model: BearOauth2User::lockForUpdate()->findOrFail(id: $id));
        }
        return new self(model: BearOauth2User::findOrFail(id: $id));
    }


    public function setOauth2Scope(string $oauth2_scope): self {
        $this->model->oauth2_scope = $oauth2_scope;
        $dateString = Carbon::now()->toDateString();
        $tmp = [];
        foreach (explode(separator: ' ', string: $oauth2_scope) as $scope) {
            $tmp[$scope] = $dateString;
        }
        $this->model->oauth2_scope_json = new ArrayObject(array: $tmp);
        return $this;
    }


    public function setOauth2UserEmail(string|null $oauth2_user_email): self {
        $this->model->oauth2_user_email = $oauth2_user_email;
        return $this;
    }

    public function setOauth2UserName(string|null $oauth2_user_name): self {
        $this->model->oauth2_user_name = $oauth2_user_name;
        return $this;
    }

    public function setUserId(string|null $user_id): self {
        $this->model->user_id = $user_id;
        return $this;
    }

    public function setEncryptedUserAccessToken(string|null $encrypted_user_access_token, CarbonInterface|null $user_access_token_expires_at): self {
        $this->model->user_access_token_expires_at = $user_access_token_expires_at;
        $this->model->encrypted_user_access_token = $encrypted_user_access_token;
        $this->model->user_access_token_error_message = null;
        $this->model->user_access_token_first_error_at = null;
        return $this;
    }

    public function setEncryptedUserRefreshToken(string|null $encrypted_user_refresh_token): self {
        $this->model->encrypted_user_refresh_token = $encrypted_user_refresh_token;
        return $this;
    }


    public function setUserAccessTokenErrorMessage(string|null $user_access_token_error_message): self {
        $this->model->user_access_token_error_message = $user_access_token_error_message;
        $this->model->user_access_token_first_error_at ??= now();
        $this->model->user_access_token_expires_at = null;
        $this->model->encrypted_user_access_token = null;
        return $this;
    }

    public function getUserAccessTokenExpiresAt(): CarbonInterface|null {
        return $this->model->user_access_token_expires_at;
    }

    public function getEncryptedUserAccessToken(): string {
        return $this->model->encrypted_user_access_token ?? '';
    }

    public function getOauth2UserEmail(): string|null {
        return $this->model->oauth2_user_email;
    }


    public function update(): BearOauth2User {
        $this->model->save();
        return $this->model;
    }
}
