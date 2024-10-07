<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearRegexService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

final class BearUserCreator {
    public static function create(
        string $display_name,
        string $id = null,
        string $email = null,
        string $country_cca2 = null,
    ): BearUser {
        BearDatabaseService::mustBeInTransaction();

        if ($country_cca2 !== null) {
            // Check if the country code is valid, otherwise set it to null
            if (DB::selectOne(query: "SELECT 1 FROM bear_country WHERE cca2 = ?", bindings: [$country_cca2]) !== null) {
                BearErrorCreator::create(message: "Invalid country code: $country_cca2");
                $country_cca2 = null;
            }
        }

        $model = new BearUser();
        $model->id = $id ?? Str::uuid()->toString();

        $model->display_name = trim($display_name);
        $model->email = $email !== null ? BearRegexService::superTrim($email) : null;
        $model->country_cca2 = $country_cca2;

        $model->save();
        return $model;
    }
}
