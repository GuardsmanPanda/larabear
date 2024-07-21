<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Crud;

use Illuminate\Support\Facades\DB;

final class BearResponseErrorDeleter {
    public static function delete(
        int    $id = null,
        int    $status_code = null,
        string $http_path = null,
        string $action_name = null,
    ): void {
        $filters = [];
        if ($id !== null) {
            $filters['id'] = $id;
        }
        if ($status_code !== null) {
            $filters['status_code'] = $status_code;
        }
        if ($http_path !== null) {
            $filters['http_path'] = $http_path;
        }
        if ($action_name !== null) {
            $filters['action_name'] = $action_name;
        }
        DB::delete("DELETE FROM bear_error_response WHERE " . implode(separator: ' AND ', array: array_map(static fn ($key) => "$key = ?", array_keys($filters))), array_values($filters));
    }
}
