<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use Illuminate\Support\Facades\DB;
use PDO;

final class BearSqlService {
    /**
     * @param String $sql
     * @param array<array-key, mixed> $bindings
     * @return array<array-key, mixed>
     */
    public static function toValueArray(String $sql, array $bindings = []): array {
        $res = DB::getReadPdo()->prepare($sql);
        $res->setFetchMode(PDO::FETCH_NUM);
        $res->execute($bindings);
        return array_map(fn($item) => $item[0], $res->fetchAll());
    }

    /**
     * @param String $sql
     * @param array<array-key, mixed> $bindings
     * @return array<array-key, mixed>
     */
    public static function toKeyValueArray(String $sql, array $bindings = []): array {
        $res = DB::getReadPdo()->prepare($sql);
        $res->setFetchMode(PDO::FETCH_NUM);
        $res->execute($bindings);
        $result = [];
        foreach ($res->fetchAll() as $item) {
            $result[$item[0]] = $item[1];
        }
        return $result;
    }
}
