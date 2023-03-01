<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Service;

use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\JsonResponse;

final class Json {
    public static function empty(): JsonResponse {
        return new JsonResponse(data: null, status: 204);
    }

    /**
     * @param string $sql
     * @param array<mixed> $data
     * @return JsonResponse
     */
    public static function fromSql(string $sql, array $data = []): JsonResponse {
        return new JsonResponse(data: DB::select(query: "SELECT json_agg(t) FROM ($sql) t", bindings: $data)[0]->json_agg ?? '[]', json: true);
    }

    /**
     * @param string $sql
     * @param array<mixed> $data
     * @return JsonResponse
     */
    public static function fromSqlSingle(string $sql, array $data = []): JsonResponse {
        return new JsonResponse(data: DB::select(query: " SELECT row_to_json(t) FROM ($sql) t ", bindings: $data)[0]->row_to_json ?? '{}', json: true);
    }
}
