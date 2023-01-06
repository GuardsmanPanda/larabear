<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Service;


use Symfony\Component\HttpFoundation\Response;

final class Htmx {
    public static function refresh(): Response {
        Resp::header(key: 'HX-Refresh', value: 'true');
        return new Response();
    }

    public static function redirect(string $url): Response {
        Resp::header(key: 'HX-Redirect', value: $url);
        return new Response();
    }
}
