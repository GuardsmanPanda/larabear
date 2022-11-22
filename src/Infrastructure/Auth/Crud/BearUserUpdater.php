<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Support\Facades\Hash;

class BearUserUpdater {
    public function __construct(private readonly BearUser $model) {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH']);
    }

    public static function fromId(string $id): BearUserUpdater {
        return new BearUserUpdater(model: BearUser::findOrFail(id: $id));
    }


    public function setUserDisplayName(string|null $user_display_name): self {
        $this->model->user_display_name = $user_display_name;
        return $this;
    }

    public function setUserEmail(string|null $user_email): self {
        $this->model->user_email = $user_email;
        return $this;
    }

    public function setUserCountryIso2Code(string|null $user_country_iso2_code): self {
        $this->model->user_country_iso2_code = $user_country_iso2_code;
        return $this;
    }

    public function setUserLanguageIso2Code(string|null $user_language_iso2_code): self {
        $this->model->user_language_iso2_code = $user_language_iso2_code;
        return $this;
    }

    public function setPassword(string|null $password): self {
        $this->model->password = $password !== null ? Hash::make($password) : null;
        return $this;
    }

    public function setRememberToken(string|null $remember_token): self {
        $this->model->remember_token = $remember_token;
        return $this;
    }

    public function setPasswordResetToken(string|null $password_reset_token): self {
        $this->model->password_reset_token = $password_reset_token;
        return $this;
    }

    public function setPasswordResetExpiresAt(CarbonInterface|null $password_reset_expires_at): self {
        $this->model->password_reset_expires_at = $password_reset_expires_at;
        return $this;
    }

    public function setEmailVerifiedNow(): self {
        $this->model->email_verified_at = now();
        return $this;
    }

    public function setLastLoginNow(): self {
        $this->model->last_login_at = now();
        return $this;
    }

    public function save(): BearUser {
        $this->model->save();
        return $this->model;
    }
}
