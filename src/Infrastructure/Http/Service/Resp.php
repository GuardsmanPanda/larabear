<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Service;

use GuardsmanPanda\Larabear\Infrastructure\Http\Middleware\BearInitiateMiddleware;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class Resp {
    /**
     * @param string $sql
     * @param array<mixed> $data
     * @return JsonResponse
     */
    public static function SQLJson(string $sql, array $data = []): JsonResponse {
        return new JsonResponse(data: DB::select(query: "SELECT json_agg(t) FROM ($sql) t", bindings: $data)[0]->json_agg ?? '[]', json: true);
    }

    /**
     * @param string $sql
     * @param array<mixed> $data
     * @return JsonResponse
     */
    public static function SQLJsonSingle(string $sql, array $data = []): JsonResponse {
        return new JsonResponse(data: DB::select(query: " SELECT row_to_json(t) FROM ($sql) t ", bindings: $data)[0]->row_to_json ?? '{}', json: true);
    }

    public static function header(string $key, string $value): void {
        BearInitiateMiddleware::$headers[$key] = $value;
    }

    public static function redirectWithError(string $url, string $error, int $status = 303): RedirectResponse {
        Session::flash(key: 'error', value: $error);
        return new RedirectResponse(url: $url, status: $status);
    }
}
