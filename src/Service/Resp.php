<?php

namespace GuardsmanPanda\Larabear\Service;

use GuardsmanPanda\Larabear\Middleware\InitiateMiddleware;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\JsonResponse;

class Resp {
    public static function SQLJson(string $sql, array $data = []): JsonResponse {
        return new JsonResponse(DB::select("SELECT json_agg(t) FROM ($sql) t", $data)[0]->json_agg ?? '[]', json: true);
    }

    public static function SQLJsonSingle(string $sql, array $data = []): JsonResponse {
        return new JsonResponse(DB::select(" SELECT row_to_json(t) FROM ($sql) t ", $data)[0]->row_to_json ?? '{}', json: true);
    }

    public static function header(string $name, string $value): void {
        InitiateMiddleware::$headers[$name] = $value;
    }
}
