<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Service;

use GuardsmanPanda\Larabear\Infrastructure\Http\Middleware\BearInitiateMiddleware;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use RuntimeException;
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

    public static function redirectWithMessage(string $url, string $message, int $status = 303): RedirectResponse {
        return new RedirectResponse(url: "$url?message=" . urlencode($message), status: $status);
    }

    /**
     * @param string $view
     * @param array<string, mixed> $data
     * @return View
     */
    public static function view(string $view, array $data = []): View {
        $res = view(view: $view, data: $data);
        return $res instanceof View ? $res : throw new RuntimeException(message: 'Unexpect View Type');
    }
}
