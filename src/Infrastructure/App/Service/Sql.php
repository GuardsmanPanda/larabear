<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use Illuminate\Support\Facades\DB;

final class Sql {
    /**
     * @param String $sql
     * @param array<mixed> $bindings
     * @return array<mixed>
     */
    public static function toValueArray(String $sql, array $bindings = []): array {
        $res = DB::select(query: $sql, bindings: $bindings);
        return array_map(fn($item) => $item->value, $res);
    }

    /**
     * @param String $sql
     * @param array<mixed> $bindings
     * @return array<string|int, mixed>
     */
    public static function toKeyValueArray(String $sql, array $bindings = []): array {
        $res = DB::select(query: $sql, bindings: $bindings);
        return array_map(fn($item) => [$item->key => $item->value], $res);
    }
}
