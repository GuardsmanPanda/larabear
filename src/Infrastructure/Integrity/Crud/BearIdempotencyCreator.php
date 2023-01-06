<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Integrity\Crud;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\DB;

final class BearIdempotencyCreator {
    public static function create(string $idempotency_key): void {
        DB::insert(query: "
            INSERT INTO bear_log_idempotency (idempotency_key, request_ip, request_country_code, request_http_method, request_http_path, request_id, console_id)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ", bindings: [$idempotency_key, Req::ip(), Req::ipCountry(), Req::method(), Req::path(), BearGlobalStateService::getRequestId(), BearGlobalStateService::getConsoleIdOrNull()]);
    }
}
