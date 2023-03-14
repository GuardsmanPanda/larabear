<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Access\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearAccessTokenAppCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearAccessTokenAppDeleter;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

final class LarabearAccessTokenAppController extends Controller {
    public function index(): View {
        return Resp::view(view: 'larabear-access::token.app.index', data: [
            'access_tokens' => DB::select(query: "
                SELECT 
                    id, api_primary_key,
                    route_prefix_restriction, request_ip_restriction,
                    access_token_purpose, expires_at, last_usage_at, created_at, updated_at
                FROM bear_access_token_app
                ORDER BY request_ip_restriction, created_at DESC
            ")
        ]);
    }

    public function createDialog(): View {
        return Resp::view(view: 'larabear-access::token.app.create');
    }

    public function create(): View {
        $prefix = Req::getStringOrDefault(key: 'route_prefix_restriction');
        if (str_starts_with(haystack: '/', needle: $prefix)) {
            $prefix = substr(string: $prefix, offset: 1);
        }
        BearAccessTokenAppCreator::create(
            route_prefix_restriction:$prefix,
            access_token_purpose: Req::getStringOrDefault(key: 'access_token_purpose'),
            access_token: Req::getStringOrDefault(key: 'access_token'),
            request_ip_restriction: Req::getStringOrDefault(key: 'request_ip_restriction', default: '0.0.0.0/0'),
            api_primary_key: Req::getString(key: 'api_primary_key'),
            expires_at: Req::getDateTime(key: 'expires_at'),
        );
        return $this->index();
    }

    public function updateDialog(string $id): View {
        return Resp::view(view: 'larabear-access::token.app.update', data: [
            'access_token' => DB::selectOne(query: "
                SELECT 
                    id, api_primary_key,
                    route_prefix_restriction, request_ip_restriction,
                    access_token_purpose, expires_at, last_usage_at
                FROM bear_access_token_app
                WHERE id = ?
            ", bindings: [$id])
        ]);
    }

    public function delete(string $id): void {
        BearAccessTokenAppDeleter::deleteFromId(id: $id);
    }
}
