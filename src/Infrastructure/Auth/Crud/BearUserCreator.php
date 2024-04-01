<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearRegexService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Support\Str;

final class BearUserCreator {
    public static function create(
        string $user_display_name,
        string $id = null,
        string $user_first_name = null,
        string $user_last_name = null,
        string $user_email = null,
        string $user_country_iso2_code = null,
        string $user_language_iso2_code = null,
        string $user_city = null,
        string $user_profile_image = null,
        CarbonInterface $email_verified_at = null,
    ): BearUser {
        BearDatabaseService::mustBeInTransaction();

        if ($user_country_iso2_code !== null) {
            // Check if the country code is valid, otherwise set it to null
            if (!BearDatabaseService::exists(sql: "SELECT 1 FROM bear_country WHERE country_iso2_code = ?", bindings: [$user_country_iso2_code])) {
                BearErrorCreator::create(message: "Invalid country code: $user_country_iso2_code", remedy: "Add the missing country code to the database or fix the user's country code.");
                $user_country_iso2_code = null;
            }
        }

        $model = new BearUser();
        $model->id = $id ?? Str::uuid()->toString();

        $model->user_first_name = $user_first_name !== null ? BearRegexService::superTrim($user_first_name) : null;
        $model->user_last_name = $user_last_name !== null ? BearRegexService::superTrim($user_last_name) : null;
        $model->user_display_name = trim($user_display_name);
        $model->user_email = $user_email !== null ? BearRegexService::superTrim($user_email) : null;
        $model->user_country_iso2_code = $user_country_iso2_code;
        $model->user_language_iso2_code = $user_language_iso2_code;
        $model->user_city = $user_city !== null ? BearRegexService::superTrim($user_city) : null;
        $model->user_profile_image = $user_profile_image;
        $model->email_verified_at = $email_verified_at;
        $model->user_data_json = new ArrayObject();

        $model->save();
        return $model;
    }
}
