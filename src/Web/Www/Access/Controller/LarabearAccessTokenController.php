<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Access\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Htmx;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearAccessTokenCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearAccessTokenDeleter;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

final class LarabearAccessTokenController extends Controller {
    public function index(): View {
        return Resp::view(view: 'larabear-access::token.app.index', data: [
            'access_tokens' => DB::select(query: "
                SELECT 
                    id, api_primary_key,
                    path_prefix_restriction, ip_restriction,
                    description, expires_at, last_usage_date, created_at, updated_at
                FROM bear_access_token
                ORDER BY ip_restriction, created_at DESC
            ")
        ]);
    }


    public function createDialog(): View {
        $type = Req::getStringOrDefault(key: 'type', default: '');
        return Htmx::dialogView(view: 'larabear-access::token.app.create', title: "New Application Access Token", data: [
            'access_token_purpose' => $type === 'monitoring' ? 'Token for monitoring endpoints' : '',
            'route_prefix_restriction' => $type === 'monitoring' ? '/bear/api/monitoring' : '/',
        ]);
    }


    public function create(): View {
        $prefix = Req::getString(key: 'route_prefix_restriction');
        if (str_starts_with(haystack: '/', needle: $prefix)) {
            $prefix = substr(string: $prefix, offset: 1);
        }
        $res = BearAccessTokenCreator::create(
            path_prefix_restriction:$prefix,
            description: Req::getString(key: 'access_token_purpose'),
            access_token: Req::getStringOrNull(key: 'access_token', isOptional: true),
            ip_restriction: Req::getStringOrDefault(key: 'request_ip_restriction', default: '0.0.0.0/0'),
            api_primary_key: Req::getStringOrNull(key: 'api_primary_key', isOptional: true),
            expires_at: Req::getDateTimeOrNull(key: 'expires_at', isOptional: true),
        );
        return Htmx::dialogView(view: 'larabear-access::token.app.created', title: "Access Token", data: [
            'token' => $res[0],
            'secret' => $res[1],
        ]);
    }


    public function updateDialog(string $id): View {
        return Htmx::dialogView(view: 'larabear-access::token.app.update', title: "Update Access Token - $id", data: [
            'access_token' => DB::selectOne(query: "
                SELECT 
                    id, api_primary_key,
                    route_prefix_restriction, request_ip_restriction,
                    access_token_purpose, expires_at, last_usage_date
                FROM bear_access_token
                WHERE id = ?
            ", bindings: [$id])
        ]);
    }


    public function delete(string $id): void {
        BearAccessTokenDeleter::deleteFromId(id: $id);
    }
}
