<?php

namespace GuardsmanPanda\Larabear\Service;

use GuardsmanPanda\Larabear\Middleware\BearInitiateMiddleware;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class Resp {
    public static function SQLJson(string $sql, array $data = []): JsonResponse {
        return new JsonResponse(DB::select("SELECT json_agg(t) FROM ($sql) t", $data)[0]->json_agg ?? '[]', json: true);
    }

    public static function SQLJsonSingle(string $sql, array $data = []): JsonResponse {
        return new JsonResponse(DB::select(" SELECT row_to_json(t) FROM ($sql) t ", $data)[0]->row_to_json ?? '{}', json: true);
    }

    public static function header(string $name, string $value): void {
        BearInitiateMiddleware::$headers[$name] = $value;
    }

    public static function redirectWithError(string $url, string $error, int $status = 303): RedirectResponse {
        Session::flash(key: 'error', value: $error);
        return new RedirectResponse(url: $url, status: $status);
    }
}
