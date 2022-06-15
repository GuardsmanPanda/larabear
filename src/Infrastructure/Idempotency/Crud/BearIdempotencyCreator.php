<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Idempotency\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\DB;

class BearIdempotencyCreator {
    public static function create(string $idempotency_key): void {
        DB::insert(query: "
            INSERT INTO bear_idempotency (idempotency_key, request_ip, request_country_code, request_http_method, request_http_path)
            VALUES (?, ?, ?, ?, ?)
        ", bindings: [$idempotency_key, Req::ip(), Req::ipCountry(), Req::method(), Req::path()]);
    }
}
