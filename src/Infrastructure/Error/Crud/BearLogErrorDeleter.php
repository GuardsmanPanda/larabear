<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Crud;

use Illuminate\Support\Facades\DB;

final class BearLogErrorDeleter {
    public static function delete(
        int $id = null,
        string $error_namespace = null,
        string $error_key = null,
        string $app_action_name = null,
    ): void {
        $filters = [];
        if ($id !== null) {
            $filters['id'] = $id;
        }
        if ($error_namespace !== null) {
            $filters['error_namespace'] = $error_namespace;
        }
        if ($error_key !== null) {
            $filters['error_key'] = $error_key;
        }
        if ($app_action_name !== null) {
            $filters['app_action_name'] = $app_action_name;
        }
        DB::delete("DELETE FROM bear_log_error WHERE " . implode(separator: ' AND ', array: array_map(static fn ($key) => "$key = ?", array_keys($filters))), array_values($filters));
    }
}
