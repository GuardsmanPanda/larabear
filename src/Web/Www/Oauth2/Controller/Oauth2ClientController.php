<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Oauth2\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud\BearOauth2ClientCreator;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud\BearOauth2ClientDeleter;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class Oauth2ClientController extends Controller {

    public function index(): View {
        return view(view: 'larabear-oauth2::client.index', data: [
            'clients' => DB::select(query: "SELECT * FROM bear_oauth2_client ORDER BY oauth2_client_slug"),
        ]);
    }

    public function createDialog(): View {
        return view(view: 'larabear-oauth2::client.create');
    }

    public function create(): View {
        BearOauth2ClientCreator::create(
            oauth2_client_id: Req::getStringOrDefault(key: 'oauth2_client_id'),
            oauth2_client_slug: Req::getStringOrDefault(key: 'oauth2_client_slug'),
            oauth2_client_description: Req::getStringOrDefault(key: 'oauth2_client_description'),
            oauth2_client_type: Req::getStringOrDefault(key: 'oauth2_client_type'),
            oauth2_authorize_uri: Req::getStringOrDefault(key: 'oauth2_authorize_uri'),
            oauth2_token_uri: Req::getStringOrDefault(key: 'oauth2_token_uri'),
            encrypted_oauth2_client_secret: Req::getStringOrDefault(key: 'encrypted_oauth2_client_secret'),
            oauth2_client_base_url: Req::getString(key: 'oauth2_client_base_url'),
            oauth2_client_scope: Req::getString(key: 'oauth2_client_scope'),
            oauth2_client_redirect_path: Req::getString(key: 'oauth2_client_redirect_path'),
            oauth2_user_scope: Req::getString(key: 'oauth2_user_scope'),
        );
        return $this->index();
    }

    public function updateDialog(string $oauth2_client_id): View {
        return view(view: 'larabear-oauth2::client.update', data: [
            'client' => BearOauth2Client::findOrFail(id: $oauth2_client_id),
        ]);
    }

    public function update(string $oauth2_client_id): View {
        return $this->index();
    }

    public function delete(string $oauth2_client_id): void {
        BearOauth2ClientDeleter::deleteFromId(id: $oauth2_client_id);
    }

    public function addUserDialog(string $oauth2_client_id): View {
        return view(view: 'larabear-oauth2::client.add-user', data: ['oauth2_client_id' => $oauth2_client_id]);
    }
}
