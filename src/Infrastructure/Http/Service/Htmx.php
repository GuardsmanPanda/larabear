<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Service;

use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

final class Htmx {
    public static function refresh(): Response {
        Resp::header(key: 'HX-Refresh', value: 'true');
        return Resp::noContent();
    }

    public static function redirect(string $url): Response {
        Resp::header(key: 'HX-Redirect', value: $url);
        return Resp::noContent();
    }

    public static function dialogView(string $view, string $title = 'Dialog', array $data = []): View {
        Resp::header(key: 'HX-Trigger-After-Swap', value: '{"dialog:open" : "' . $title . '"}');
        Resp::header(key: 'HX-Retarget', value: '#dialog-content');
        return Resp::view(view: $view, data: $data);
    }
}
