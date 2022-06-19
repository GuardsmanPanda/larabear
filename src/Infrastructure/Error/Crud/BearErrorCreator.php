<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Crud;

use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\DB;

class BearErrorCreator {
    public static function create(
        BearSeverityEnum $severity,
        string $namespace,
        string $errorMessage,
        string $group = null,
        string $exceptionMessage = null,
        string $exceptionTrace = null,
    ): void {
        DB::insert(query: "
            INSERT INTO bear_error_log (error_severity, error_namespace, error_group, error_message, exception_message, exception_trace, user_id, request_ip, request_country_code, request_http_method, request_http_path, request_http_query)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ", bindings: [$severity, $namespace, $group, $errorMessage, $exceptionMessage, $exceptionTrace, BearGlobalStateService::getUserId(), Req::ip(), Req::ipCountry(), Req::method(), Req::path(), Req::allQueryData()]);
    }
}