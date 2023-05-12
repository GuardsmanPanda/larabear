<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RuntimeException;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

final class BearTransactionMiddleware {
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
            }
            return $res;
        } catch (Throwable $t) {
            DB::rollBack();
            BearErrorCreator::create(
                message: 'Transaction rolled back due to exception: ' . $t->getMessage(),
                key: 'larabear::transaction_rolled_back_exception',
                severity: BearSeverityEnum::HIGH,
            );
            throw new RuntimeException(message: "Transaction failed: [{$t->getMessage()}]", code: $t->getCode(), previous: $t);
        }
    }
}
