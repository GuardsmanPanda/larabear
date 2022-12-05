<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Handler;

use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\RecordsNotFoundException;
use Illuminate\Foundation\Exceptions\Handler;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Throwable;

class BearExceptionHandler extends Handler {
    public function render($request, Throwable $e): Response {
        if (BearGlobalStateService::getLogUnhandledException()) {
            $key = match (true) {
                $e instanceof ModelNotFoundException => 'unhandled_db_find_or_fail_exception',
                $e instanceof RecordsNotFoundException => 'unhandled_db_sole_exception',
                default => 'unhandled_exception',
            };
            BearLogErrorCreator::create(
                message: $e->getMessage(),
                namespace: 'larabear', key: $key,
                severity: BearSeverityEnum::MEDIUM,
                exception: $e
            );
        }
        if (config('app.debug')) {
            return parent::render($request, $e);
        }
        $e = $this->prepareException($e);
        return $e instanceof  HttpExceptionInterface ? new Response($e->getMessage(), $e->getStatusCode(), $e->getHeaders()) : new Response($e->getMessage(), 500);
    }

    protected function prepareException(Throwable $e): Throwable {
        return match (true) {
            $e instanceof ModelNotFoundException => new BadRequestHttpException(message: "The findOrFail... failed [{$e->getMessage()}]", previous: $e),
            $e instanceof RecordsNotFoundException => new BadRequestHttpException(message: "The call to sole() did not return exactly one record [{$e->getMessage()}]", previous: $e),
            default => parent::prepareException($e)
        };
    }
}
