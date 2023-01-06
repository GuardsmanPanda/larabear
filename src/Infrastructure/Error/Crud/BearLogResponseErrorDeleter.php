<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Crud;

use Illuminate\Support\Facades\DB;

final class BearLogResponseErrorDeleter {
    public static function delete(
        int $id = null,
        int $response_status_code = null,
        string $request_http_path = null,
        string $app_action_name = null,
    ): void {
        $filters = [];
        if ($id !== null) {
            $filters['id'] = $id;
        }
        if ($response_status_code !== null) {
            $filters['response_status_code'] = $response_status_code;
        }
        if ($request_http_path !== null) {
            $filters['request_http_path'] = $request_http_path;
        }
        if ($app_action_name !== null) {
            $filters['app_action_name'] = $app_action_name;
        }
        DB::delete("DELETE FROM bear_log_response_error WHERE " . implode(separator: ' AND ', array: array_map(static fn ($key) => "$key = ?", array_keys($filters))), array_values($filters));
    }
}
