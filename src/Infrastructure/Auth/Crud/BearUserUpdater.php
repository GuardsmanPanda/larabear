<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

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

    public function save(): BearUser {
        $this->model->save();
        return $this->model;
    }
}
