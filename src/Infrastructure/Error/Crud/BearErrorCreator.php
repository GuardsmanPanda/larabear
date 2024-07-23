<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Crud;

use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use RuntimeException;
use Throwable;

final class BearErrorCreator {
    /**
     * @param string $message The error message, should be short and concise
     * @param string $slug The key that the error belongs to, used to disambiguate errors (error-namespace::error-key).
     * @param BearSeverityEnum $severity The severity of the error, use high or greater for errors which *must* be handled.
     * @param Throwable|null $exception The exception that caused the error, if any.
     * @param bool $rethrow If true, the error will be thrown as a RuntimeException after being logged.
     * @return void
     */
    public static function create(
        string           $message,
        string           $slug = 'default',
        BearSeverityEnum $severity = BearSeverityEnum::INFO,
        Throwable        $exception = null,
        bool             $rethrow = false
    ): void {
        try {
            $query_json = BearGlobalStateService::getRequestId() === null ? null : json_encode(value: Req::allQueryData(), flags: JSON_THROW_ON_ERROR, depth: 128);
            if ($query_json === '[]') {
                $query_json = null;
            }
            $exception_class = $exception === null ? null : $exception::class;
            DB::connection(name: 'larabear_transaction_free')->insert(query: "
                INSERT INTO bear_error (severity, slug, message, exception_message, exception_class, exception_trace, user_id, ip, country_code, http_method, http_path, query_json, action_name, hostname, referer, request_id, console_id)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
            ", bindings: [$severity->value, $slug, $message, $exception?->getMessage(), $exception_class, $exception?->getTraceAsString(), BearGlobalStateService::getUserId(), Req::ip(), Req::ipCountry(), Req::method(), Req::path(), $query_json, Req::actionName(), Req::hostname(), Req::referer(), BearGlobalStateService::getRequestId(), BearGlobalStateService::getConsoleIdOrNull()]);
        } catch (Throwable $e) {
            Log::error(message: 'Failed log error: ' . $e->getMessage());
        }
        if ($rethrow) {
            throw new RuntimeException(message: $message, previous: $exception);
        }
    }
}
