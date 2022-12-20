<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use Illuminate\Support\Facades\DB;

class BearLogLoginHistoryCreator {
    public static function create(
        bool $was_successful,
        string|null $user_id = null,
        string|null $login_from_country_code = null
    ): void {
        BearDatabaseService::mustBeInTransaction();
        DB::insert(query: "INSERT INTO bear_log_login_history (user_id, login_from_country_code, was_successful) VALUES (?, ?, ?)", bindings: [$user_id, $login_from_country_code, $was_successful]);
    }
}