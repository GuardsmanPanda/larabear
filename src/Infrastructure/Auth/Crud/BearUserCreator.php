<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Support\Str;

class BearUserCreator {
    public static function create(
        string $id = null,
        string $user_display_name = null,
        string $user_email = null,
        string $user_country_iso2_code = null,
        string $user_language_iso2_code = null,
        CarbonInterface $email_verified_at = null
    ): BearUser {
        BearDatabaseService::mustBeInTransaction();

        $model = new BearUser();
        $model->id = $id ?? Str::uuid()->toString();

        $model->user_display_name = $user_display_name;
        $model->user_email = $user_email;
        $model->user_country_iso2_code = $user_country_iso2_code;
        $model->user_language_iso2_code = $user_language_iso2_code;
        $model->email_verified_at = $email_verified_at;

        $model->save();
        return $model;
    }
}
