<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Service;

use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

final class Htmx {
    public static function refresh(): Response {
        Resp::header(key: 'HX-Refresh', value: 'true');
        return Resp::noContent();
    }

    public static function redirect(string $url, string $message = null): Response {
        if ($message !== null) {
            session()->flash(key: 'message', value: $message);
        }
        Resp::header(key: 'HX-Redirect', value: $url);
        return Resp::noContent();
    }

    /**
     * @param string $view
     * @param string $title
     * @param array<string, mixed> $data
     * @return View
     */
    public static function dialogView(string $view, string $title = 'Dialog', array $data = []): View {
        $revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
        Resp::header(key: 'HX-Trigger-After-Swap', value: '{"dialog:open" : "' . strtr(rawurlencode($title), $revert) . '"}');
        Resp::header(key: 'HX-Retarget', value: '#dialog-content');
        return Resp::view(view: $view, data: $data);
    }

    public static function dialog(string $title, string $content): Response {
        $revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
        Resp::header(key: 'HX-Trigger-After-Swap', value: '{"dialog:open" : "' . strtr(rawurlencode($title), $revert) . '"}');
        Resp::header(key: 'HX-Retarget', value: '#dialog-content');
        return Resp::ok(content: $content);
    }
}
