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

            DB::insert(query: "
                INSERT INTO bear_error_response
                (ip, user_id, country_code, status_code, http_method, http_path, query_json, content, hostname, referer, action_name, response_body, request_id)
                VALUES (?, ?, ?, ? ,?, ?, ?, ?, ?, ?, ?, ?, ?)",
                bindings: [Req::ip(), BearGlobalStateService::getUserId(), Req::ipCountry(), $statusCode, Req::method(), Req::path(), $query_json, $requestContent, Req::hostname(), Req::referer(), Req::actionName(), $responseBody, BearGlobalStateService::getRequestId()]
            );
        } catch (Throwable $e) {
            Log::error(message: 'Failed log error response: ' . $e->getMessage());
        }
    }
}
