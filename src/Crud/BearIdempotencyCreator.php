<?php

namespace GuardsmanPanda\Larabear\Crud;

use GuardsmanPanda\Larabear\Service\Req;
use Illuminate\Support\Facades\DB;

class BearIdempotencyCreator {
    public static function create(string $idempotency_key, string|int $createdByUserId = null): void {
        DB::insert(query: "
            INSERT INTO bear_idempotency (idempotency_key, created_by_user_id, request_ip, request_country_code, request_http_method, request_http_path)
            VALUES (?, ?, ?, ?, ?, ?)
        ", bindings: [$idempotency_key, $createdByUserId, Req::ip(), Req::ipCountry(), Req::method(), Req::path()]);
    }
}
