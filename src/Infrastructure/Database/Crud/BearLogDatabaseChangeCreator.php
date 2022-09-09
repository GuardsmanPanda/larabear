<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Crud;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class BearLogDatabaseChangeCreator {
    public static function create(
        string $table_name,
        string $change_type,
        int $record_id = null,
        string $record_uuid = null,
        string $record_identifier = null,
        string $column_name = null,
        string $old_value = null,
        string $new_value = null,
        bool $is_soft_deletion = false,
        array $record_data = null
    ): void {
        try {
            DB::insert(query: "
            INSERT INTO bear_log_error (error_severity, error_namespace, error_key, error_message, error_remedy, exception_message, exception_trace, user_id, request_ip, request_country_code, request_http_method, request_http_path, request_http_query_json, app_action_name)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ", bindings: [$severity->name, $namespace, $key, $message, $remedy, $exception?->getMessage(), $exception?->getTraceAsString(), BearGlobalStateService::getUserId(), Req::ip(), Req::ipCountry(), Req::method(), Req::path(), $query_json, Req::actionName()]);
        } catch (Throwable $e) {
            Log::error(message: 'Failed log Database Change: ' . $e->getMessage());
        }
    }

}