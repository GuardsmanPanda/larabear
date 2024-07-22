<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Handler;

use ErrorException;
use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\RecordsNotFoundException;
use Illuminate\Foundation\Exceptions\Handler;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Throwable;

final class BearExceptionHandler extends Handler {
    public function render($request, Throwable $e): Response {
        if (BearGlobalStateService::getLogUnhandledException() && !$e instanceof HttpResponseException) {
            $key = match (true) {
                $e instanceof ModelNotFoundException => 'unhandled-db-model-not-found',
                $e instanceof RecordsNotFoundException => 'unhandled-db-records-not-found',
                default => 'unhandled-exception',
            };
            if ($e::class !== 'Symfony\Component\HttpKernel\Exception\NotFoundHttpException') {
                BearErrorCreator::create(
                    message: $e->getMessage(),
                    slug: "larabear::$key",
                    severity: BearSeverityEnum::WARNING,
                    exception: $e
                );
            }
        }
        if (!Req::hasHeader(key: 'accept') || Req::headerOrNull(key: 'hx-request') !== null) {
            $request->headers->set('accept', 'application/json');
        }
        return parent::render(request: $request, e: $e);
    }

    protected function prepareException(Throwable $e): Throwable {
        $includeMessage = App::isLocal() || Config::get(key: 'bear.include_exception_message_in_production', default: false) === true;
        return match (true) {
            $e instanceof ModelNotFoundException => new BadRequestHttpException(message: "findOrFail() // sole() ... failed" . ($includeMessage ? " [{$e->getMessage()}]" : ""), previous: $e),
            $e instanceof RecordsNotFoundException => new BadRequestHttpException(message: "The call to sole() did not return exactly one record" . ($includeMessage ? " [{$e->getMessage()}]" : ""), previous: $e),
            $e instanceof ErrorException => new BadRequestHttpException(message: "ErrorException" . ($includeMessage ? " [{$e->getMessage()}]" : ""), previous: $e),
            default => parent::prepareException($e)
        };
    }
}
