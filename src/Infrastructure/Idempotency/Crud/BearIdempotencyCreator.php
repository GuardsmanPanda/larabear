<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Idempotency\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\DB;

class BearIdempotencyCreator {
    public static function create(string $idempotency_key, int $persistForMonths = 3, string|int $createdByUserId = null): void {
        DB::insert(query: "
            INSERT INTO bear_idempotency (idempotency_key, persist_for_months, created_by_user_id, request_ip, request_country_code, request_http_method, request_http_path)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ", bindings: [$idempotency_key, $persistForMonths, $createdByUserId, Req::ip(), Req::ipCountry(), Req::method(), Req::path()]);
    }
}
