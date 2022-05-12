<?php

namespace GuardsmanPanda\Larabear\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Service\Req;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class Initiate {
    public function __construct(private readonly Application $app, public array $headers = []) {}

    public function handle(Request $request, Closure $next) {
        //----------------------------------------------------------------------------------------------------------
        //  First Handle maintenance mode
        //----------------------------------------------------------------------------------------------------------
        if ($this->app->isDownForMaintenance()) {
            $data = json_decode(file_get_contents($this->app->storagePath() . '/framework/down'), true, 512, JSON_THROW_ON_ERROR);
            if (isset($data['redirect'])) {
                $path = $data['redirect'] === '/' ? $data['redirect'] : trim($data['redirect'], '/');
                if ($request->path() !== $path) {
                    return new RedirectResponse($path, 307);
                }
                $headers = isset($data['retry']) ? ['Retry-After' => $data['retry']] : [];
                if (isset($data['refresh'])) {
                    $headers['Refresh'] = $data['refresh'];
                }
                return new Response($data['template'] ?? 'Service Unavailable', $data['status'] ?? 503, $headers);
            }
        }

        //----------------------------------------------------------------------------------------------------------
        //  Init the Req class and set headers to ensure browser does not store data if endpoint is auth secured.
        //----------------------------------------------------------------------------------------------------------
        Req::$r = $request;
        if ($request->bearerToken() !== null || $request->cookie('session.cookie') !== null) {
            $this->headers['Cache-Control'] = 'must-revalidate, no-store, private';
        }

        //----------------------------------------------------------------------------------------------------------
        //  Trim strings and convert empty strings to null, potential todo: config value to ignore params (such as password).
        //----------------------------------------------------------------------------------------------------------
        $this->trimAndConvertEmptyInputToNull($request);

        //----------------------------------------------------------------------------------------------------------
        //  Execute the request
        //----------------------------------------------------------------------------------------------------------
        $resp = $next($request);

        //----------------------------------------------------------------------------------------------------------
        //  Apply headers to response
        //----------------------------------------------------------------------------------------------------------
        if (method_exists($resp, 'header')) {
            foreach ($this->headers as $key => $value) {
                $resp->header($key, $value);
            }
        }
        return $resp;
    }


    private function trimAndConvertEmptyInputToNull(Request $request): void {
        $bags = [$request->query];
        if ($request->isJson()) {
            $bags[] = $request->json();
        } elseif ($request->request !== $request->query) {
            $bags[] = $request->request;
        }
        foreach ($bags as $bag) {
            foreach ($bag->getIterator() as $key => $value) {
                if (!is_string($value)) {
                    continue;
                }
                $value = trim($value);
                Log::info("Cleaning $key, set to $value");
                $bag->set($key, $value === '' ? null : $value);
            }
        }
    }
}