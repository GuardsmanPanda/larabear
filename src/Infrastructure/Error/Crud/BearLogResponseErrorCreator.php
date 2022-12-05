<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Crud;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class BearLogResponseErrorCreator {
    public static function create(
        int    $statusCode,
        string $responseBody,
    ): void {
        try {
            $query = Req::allQueryData();
            $query_json = empty($query) ? null : json_encode(value: $query, flags: JSON_THROW_ON_ERROR);
            DB::insert("
            INSERT INTO bear_log_response_error
            (request_ip, user_id, request_country_code, response_status_code, request_http_method, request_http_path, request_http_query_json, request_http_hostname, app_action_name, response_body, request_id)
            VALUES (?, ?, ?, ? ,?, ?, ?, ?, ?, ?, ?)",
                [Req::ip(), BearGlobalStateService::getUserId(), Req::ipCountry(), $statusCode, Req::method(), Req::path(), $query_json, Req::hostname(), Req::actionName(), $responseBody, BearGlobalStateService::getRequestId()]);
        } catch (Throwable $e) {
            Log::error(message: 'Failed log error response: ' . $e->getMessage());
        }
    }
}
