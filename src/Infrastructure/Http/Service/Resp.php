<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Service;

use GuardsmanPanda\Larabear\Infrastructure\Http\Middleware\BearInitiateMiddleware;
use Illuminate\View\View;
use RuntimeException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

final class Resp {
    public static function header(string $key, string $value): void {
        BearInitiateMiddleware::$headers[$key] = $value;
    }

    public static function ok(): Response {
        return new Response(status: 200);
    }

    public static function created(string $content = ''): Response {
        return new Response(content: $content, status: 201);
    }

    public static function accepted(string $content = ''): Response {
        return new Response(content: $content, status: 202);
    }

    public static function noContent(): Response {
        return new Response(status: 204);
    }


    public static function redirectWithQueryMessage(string $url, string $message, int $status = 303): RedirectResponse {
        return new RedirectResponse(url: "$url?message=" . urlencode($message), status: $status);
    }

    /**
     * @param string $view
     * @param array<string, mixed> $data
     * @return View
     */
    public static function view(string $view, array $data = []): View {
        $res = view(view: $view, data: $data);
        return $res instanceof View ? $res : throw new RuntimeException(message: 'Unexpect View Type');
    }
}
