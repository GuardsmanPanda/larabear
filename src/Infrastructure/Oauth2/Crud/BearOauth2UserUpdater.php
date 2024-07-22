<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2User;
use Illuminate\Database\Eloquent\Casts\ArrayObject;

final readonly class BearOauth2UserUpdater {
    public function __construct(private BearOauth2User $model) {
        BearDatabaseService::mustBeInTransaction();
    }

    public static function fromId(string $id, bool $lockForUpdate): self {
        if ($lockForUpdate) {
            return new self(model: BearOauth2User::lockForUpdate()->findOrFail(id: $id));
        }
        return new self(model: BearOauth2User::findOrFail(id: $id));
    }


    public function setScope(string $scope): self {
        $this->model->scope = $scope;
        $dateString = Carbon::now()->toDateString();
        $tmp = [];
        foreach (explode(separator: ' ', string: $scope) as $scope2) {
            $tmp[$scope2] = $dateString;
        }
        $this->model->scope_json = new ArrayObject(array: $tmp);
        return $this;
    }


    public function setEmail(string|null $email): self {
        $this->model->email = $email;
        return $this;
    }

    public function setDisplayName(string|null $display_name): self {
        $this->model->display_name = $display_name;
        return $this;
    }

    public function setUserId(string|null $user_id): self {
        $this->model->user_id = $user_id;
        return $this;
    }

    public function setEncryptedAccessToken(string|null $encrypted_access_token, CarbonInterface|null $access_token_expires_at): self {
        $this->model->access_token_expires_at = $access_token_expires_at;
        $this->model->encrypted_access_token = $encrypted_access_token;
        $this->model->access_token_error_message = null;
        return $this;
    }

    public function setEncryptedRefreshToken(string|null $encrypted_refresh_token): self {
        $this->model->encrypted_refresh_token = $encrypted_refresh_token;
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

    public function getEncryptedAccessToken(): string {
        return $this->model->encrypted_access_token ?? '';
    }

    public function getEmail(): string|null {
        return $this->model->email;
    }


    public function update(): BearOauth2User {
        $this->model->save();
        return $this->model;
    }
}
