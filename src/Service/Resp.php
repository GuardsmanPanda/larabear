<?php

namespace GuardsmanPanda\Larabear\Service;

use GuardsmanPanda\Larabear\Middleware\Initiate;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\JsonResponse;

class Resp {
    /**
     * @param string $sql
     * @param array<int, mixed> $data
     * @return JsonResponse
     */
    public static function SQLJson(string $sql, array $data = []): JsonResponse {
        return new JsonResponse(DB::select("
            SELECT json_agg(t) FROM ($sql) t
        ", $data)[0]->json_agg ?? '[]', json: true);
    }

    /**
     * @param string $sql
     * @param array<int, mixed> $data
     * @return JsonResponse
     */
    public static function SQLJsonSingle(string $sql, array $data = []): JsonResponse {
        return new JsonResponse(DB::selectOne($sql, $data));
    }

    public static function header(string $name, string $value): void {
        Initiate::$headers[$name] = $value;
    }
}