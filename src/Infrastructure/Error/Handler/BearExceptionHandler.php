<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Error\Handler;

use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use Illuminate\Foundation\Exceptions\Handler;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Throwable;

class BearExceptionHandler extends Handler {
    public function render($request, Throwable $e): Response {
        if (BearGlobalStateService::getLogUnhandledException()) {
            BearLogErrorCreator::create(
                message: $e->getMessage(),
                namespace: 'exception', key: 'unhandled',
                severity: BearSeverityEnum::MEDIUM,
                remedy: 'Fix code and delete this, or call "BearGlobalStateService::setLogUnhandledException(value: false);" before this exception is thrown.',
                exception: $e
            );
        }
        if (config('app.debug')) {
            return parent::render($request, $e);
        }
        $e = $this->prepareException($e);
        return $e instanceof  HttpExceptionInterface ? new Response($e->getMessage(), $e->getStatusCode(), $e->getHeaders()) : new Response($e->getMessage(), 500);
    }
}
