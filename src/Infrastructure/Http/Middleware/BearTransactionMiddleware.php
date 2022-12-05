<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RuntimeException;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class BearTransactionMiddleware {
    public function handle(Request $request, Closure $next): Response {
        if (!Req::isWriteRequest()) {
            return $next($request);
        }
        try {
            DB::beginTransaction();
            $res = $next($request);
            if ($res->getStatusCode() < 400) {
                DB::commit();
            } else {
                DB::rollBack();
                BearLogErrorCreator::create(
                    message: 'Transaction rolled back due to HTTP status code ' . $res->getStatusCode(),
                    namespace: 'larabear',
                    key: 'transaction_rolled_back',
                    severity: BearSeverityEnum::HIGH,
                );
            }
            return $res;
        } catch (Throwable $t) {
            DB::rollBack();
            BearLogErrorCreator::create(
                message: 'Transaction rolled back due to exception: ' . $t->getMessage(),
                namespace: 'larabear',
                key: 'transaction_rolled_back_exception',
                severity: BearSeverityEnum::HIGH,
            );
            throw new RuntimeException(message: "Transaction failed: [{$t->getMessage()}]", code: $t->getCode(), previous: $t);
        }
    }
}
