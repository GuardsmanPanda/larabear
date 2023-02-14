<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Crud;

use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Email\Service\BearEmailService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use RuntimeException;
use Throwable;

final class BearErrorCreator {
    /**
     * @param string $message The error message, should be short and concise
     * @param string $namespace The namespace that the error belongs to, used to disambiguate errors.
     * @param string $key The key that the error belongs to, used to disambiguate errors.
     * @param BearSeverityEnum $severity The severity of the error, use high or greater for errors which *must* be handled.
     * @param string|null $remedy How to resolve the error, if known.
     * @param Throwable|null $exception The exception that caused the error, if any.
     * @param string|null $mailTo if set, an email will be sent to this address with the error details.
     * @return void
     */
    public static function create(
        string $message,
        string $namespace = 'default',
        string $key = 'default',
        BearSeverityEnum $severity = BearSeverityEnum::LOW,
        string $remedy = null,
        Throwable $exception = null,
        string $mailTo = null,
        bool $throw = false
    ): void {
        try {
            $query_json = BearGlobalStateService::getRequestId() === null ? null : json_encode(value: Req::allQueryData(), flags: JSON_THROW_ON_ERROR, depth: 128);
            DB::connection(name: 'larabear_transaction_free')->insert(query: "
            INSERT INTO bear_log_error (error_severity, error_namespace, error_key, error_message, error_remedy, exception_message, exception_trace, user_id, request_ip, request_country_code, request_http_method, request_http_path, request_http_query_json, app_action_name, request_http_hostname, request_id, console_id)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ", bindings: [$severity->name, $namespace, $key, $message, $remedy, $exception?->getMessage(), $exception?->getTraceAsString(), BearGlobalStateService::getUserId(), Req::ip(), Req::ipCountry(), Req::method(), Req::path(), $query_json, Req::actionName(), Req::hostname(), BearGlobalStateService::getRequestId(), BearGlobalStateService::getConsoleIdOrNull()]);
        } catch (Throwable $e) {
            Log::error(message: 'Failed log error: ' . $e->getMessage());
        }

        if ($mailTo !== null) {
            try {
                BearEmailService::sendView(
                    to: $mailTo,
                    subject: '[Error - ' . $severity->value . '] ' . $message,
                    view: 'larabear-error::larabear-log-error-email',
                    data: [
                        'message' => $message,
                        'namespace' => $namespace,
                        'key' => $key,
                        'severity' => $severity,
                        'remedy' => $remedy,
                        'exception' => $exception
                    ],
                    tag: 'larabear-error'
                );
            } catch (Throwable $e) {
                Log::error(message: 'Failed email error: ' . $e->getMessage());
            }
        }

        if ($throw) {
            throw new RuntimeException(message: $message, previous: $exception);
        }
    }
}
