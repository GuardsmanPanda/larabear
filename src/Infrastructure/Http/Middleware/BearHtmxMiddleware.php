<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class BearHtmxMiddleware {
    public function handle(Request $request, Closure $next): Response {
        $res = $next($request);
        if (Req::method() === 'GET' && Req::header(name: 'hx-request', nullIfMissing: true) === null && str_contains(Req::header(name: 'accept', nullIfMissing: true), 'html')) {
            return new Response(View::make(view:'shared::layout.layout', data: [
                'content' => $res->getContent(),
            ])->render());
        }
        return $res;
    }
}
