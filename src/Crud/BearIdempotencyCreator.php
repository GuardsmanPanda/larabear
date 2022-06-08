<?php

namespace GuardsmanPanda\Larabear\Crud;

use Illuminate\Support\Facades\DB;

class BearIdempotencyCreator {
    public static function create(string $idempotency_key, string|int $createdByUserId = null): void {
        DB::insert(query: "
            INSERT INTO bear_idempotency (idempotency_key, created_by_user_id)
            VALUES (?, ?)
        ", bindings: [$idempotency_key, $createdByUserId]);
    }
}