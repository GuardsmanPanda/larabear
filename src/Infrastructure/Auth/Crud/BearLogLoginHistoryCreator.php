<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Enum\BearUserLoginTypeEnum;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\DB;

final class BearLogLoginHistoryCreator {
    public static function create(string $user_id, BearUserLoginTypeEnum $login_type): void {
        BearDatabaseService::mustBeInTransaction();
        DB::insert(query: "INSERT INTO bear_user_login_history (user_id, login_type, request_country_code, request_ip) VALUES (?, ?, ?, ?)", bindings: [$user_id, $login_type->value, Req::ipCountry(), Req::ip()]);
    }
}
