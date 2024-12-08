<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Service;

use Illuminate\Support\Facades\DB;

final class BearDB {
    /**
     * @param array<array-key, mixed> $data
     */
    public static function selectJson(string $sql, array $data = []): string {
        return DB::select(query: "SELECT json_agg(t) FROM ($sql) t", bindings: $data)[0]->json_agg ?? '[]';
    }
}
