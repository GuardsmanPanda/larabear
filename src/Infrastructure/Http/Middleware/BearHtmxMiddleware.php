<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

final class BearHtmxMiddleware {
    public function handle(Request $request, Closure $next, String $layout_location = 'layout.layout'): Response {
        $res = $next($request);
        Resp::header(key: 'Vary', value: 'hx-request');
        if (Req::method() === 'GET' && Req::header(key: 'hx-request', nullIfMissing: true) === null && str_contains(haystack: Req::header(key: 'accept', nullIfMissing: true) ?? '', needle: 'html')) {
            $headers = [];
            if (config(key: 'bear.ui.app_css') !== null) {
                if (str_starts_with(haystack: Req::path() ?? '', needle: 'bear')) {
                    $headers = ['Link' => '<' . config(key: 'bear.ui.app_css') . '>; rel=preload; as=style'];
                } else {
                    $headers = ['Link' => '<' . config(key: 'bear.ui.app_css') . '>; rel=preload; as=style, <' . config(key: 'bear.ui.app_js') . '>; rel=preload; as=script'];
                }
            }
            return new Response(content: View::make(view: $layout_location, data: [
                'content' => $res->getContent(),
            ])->render(), status: $res->getStatusCode(), headers: $headers);
        }
        return $res;
    }

    public static function using(String $layout_location): string {
        return BearHtmxMiddleware::class . ':' . $layout_location;
    }
}
