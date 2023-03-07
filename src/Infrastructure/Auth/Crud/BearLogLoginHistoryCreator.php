<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use Illuminate\Support\Facades\DB;

final class BearLogLoginHistoryCreator {
    public static function create(
        string $user_id,
        string|null $login_from_country_code = null
    ): void {
        DB::insert(query: "INSERT INTO bear_log_login_history (user_id, login_from_country_code, was_successful) VALUES (?, ?, ?)", bindings: [$user_id, $login_from_country_code, true]);
    }
}
