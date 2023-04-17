<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Email\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Email\Model\BearEmail;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Htmx;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

final class LarabearEmailController extends Controller {
    public function emailTable(): View {
        $bindings = [];
        $where = '';
        if (Req::has(key: 'email_tag') && Req::getString(key: 'email_tag') !== null) {
            $where .= ' AND be.email_tag = ?';
            $bindings[] = Req::getStringOrDefault(key: 'email_tag');
        }
        $bindings[] = Req::getIntOrDefault(key: 'limit', default: 20);
        return Resp::view(view: 'larabear-email::client.template.email-table', data: [
            'emails' => DB::select(query: "
                SELECT
                    be.id, be.email_to, be.email_cc, be.email_subject, be.email_error_message, be.email_sent_at, be.is_sandboxed, be.created_at
                FROM bear_email be
                WHERE true $where
                ORDER BY be.created_at DESC
                LIMIT ?
            ", bindings: $bindings),
        ]);
    }

    public function emailContentDialog(string $email_id): Response {
        $email = BearEmail::findOrFail(id: $email_id);
        return Htmx::dialog(title: $email->email_subject, content: $email->email_html ?? $email->email_text ?? 'No email content found.');
    }
}
