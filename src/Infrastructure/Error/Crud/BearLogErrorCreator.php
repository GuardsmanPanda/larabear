<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Crud;

use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class BearLogErrorCreator {
    /**
     * @param string $message The error message, should be short and concise
     * @param string $namespace The namespace that the error belongs to, used to disambiguate errors.
     * @param string|null $key The key that the error belongs to, used to disambiguate errors.
     * @param BearSeverityEnum $severity The severity of the error, use high or greater for errors which *must* be handled.
     * @param string|null $remedy How to resolve the error, if known.
     * @param Throwable|null $exception The exception that caused the error, if any.
     * @return void
     */
    public static function create(
        string           $message,
        string           $namespace = 'default',
        string           $key = null,
        BearSeverityEnum $severity = BearSeverityEnum::LOW,
        string           $remedy = null,
        Throwable        $exception = null
    ): void {
        try {
            $connection = Config::get(key: 'bear.log_database_connection', default: Config::get(key: 'database.default'));
            $query = Req::allQueryData();
            $query_json = empty($query) ? null : json_encode(value: $query, flags: JSON_THROW_ON_ERROR);
            DB::connection($connection)->insert(query: "
            INSERT INTO bear_log_error (error_severity, error_namespace, error_key, error_message, error_remedy, exception_message, exception_trace, user_id, request_ip, request_country_code, request_http_method, request_http_path, request_http_query_json, app_action_name, request_id, console_id)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ", bindings: [$severity->name, $namespace, $key, $message, $remedy, $exception?->getMessage(), $exception?->getTraceAsString(), BearGlobalStateService::getUserId(), Req::ip(), Req::ipCountry(), Req::method(), Req::path(), $query_json, Req::actionName(), BearGlobalStateService::getRequestId(), BearGlobalStateService::getConsoleId()]);
        } catch (Throwable $e) {
            Log::error(message: 'Failed log error: ' . $e->getMessage());
        }
    }
}
