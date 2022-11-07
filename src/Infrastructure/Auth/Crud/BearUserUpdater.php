<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use RuntimeException;

class BearUserUpdater {
    public function __construct(private readonly BearUser $model) {
        BearDBService::mustBeInTransaction();
        if (!Req::isWriteRequest()) {
            throw new RuntimeException(message: 'Database write operations should not be performed in read-only [GET, HEAD, OPTIONS] requests.');
        }
    }

    public static function fromId(string $id): BearUserUpdater {
        return new BearUserUpdater(model: BearUser::where(column: 'id', operator: '=', value: $id)->sole());
    }


    public function setUserDisplayName(string|null $user_display_name): void {
        $this->model->user_display_name = $user_display_name;
    }

    public function setUserEmail(string|null $user_email): void {
        $this->model->user_email = $user_email;
    }

    public function setUserCountryIso2Code(string|null $user_country_iso2_code): void {
        $this->model->user_country_iso2_code = $user_country_iso2_code;
    }

    public function setUserLanguageIso2Code(string|null $user_language_iso2_code): void {
        $this->model->user_language_iso2_code = $user_language_iso2_code;
    }

    public function save(): BearUser {
        $this->model->save();
        return $this->model;
    }
}
