<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Crud;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

final class BearResponseErrorCreator {
    public static function create(
        int    $statusCode,
        string $responseBody,
    ): void {
        try {
            $query = Req::allQueryData();
            $query_json = count($query) === 0 ? null : json_encode(value: $query, flags: JSON_THROW_ON_ERROR);

            $requestContent = Req::content();
            if (strlen($requestContent) > 1000000) {
                $requestContent = "Request content too large to log [length: " . strlen($requestContent) . "]";
            } else if ($requestContent === '') {
                $requestContent = null;
            }

            DB::insert("
            INSERT INTO bear_error_response
            (request_ip, user_id, request_country_code, response_status_code, request_method, request_path, request_query_json, request_content, request_hostname, request_referer, app_action_name, response_body, request_id)
            VALUES (?, ?, ?, ? ,?, ?, ?, ?, ?, ?, ?, ?, ?)",
                [Req::ip(), BearGlobalStateService::getUserId(), Req::ipCountry(), $statusCode, Req::method(), Req::path(), $query_json, $requestContent, Req::hostname(), Req::referer(), Req::actionName(), $responseBody, BearGlobalStateService::getRequestId()]);
        } catch (Throwable $e) {
            Log::error(message: 'Failed log error response: ' . $e->getMessage());
        }
    }
}
