<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Credential\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Htmx;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud\BearOauth2ClientCreator;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud\BearOauth2ClientDeleter;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Enum\BearOauth2ClientTypeEnum;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

final class LarabearOauth2ClientController extends Controller {

    public function index(): View {
        return Resp::view(view: 'larabear-credential::oauth2.client.index', data: [
            'clients' => DB::select(query: "SELECT * FROM bear_oauth2_client ORDER BY created_at DESC"),
        ]);
    }

    public function createDialog(): View {
        return Htmx::dialogView(view: 'larabear-credential::oauth2.client.create', title: "Create A New Oauth2 Client");
    }

    public function create(): View {
        BearOauth2ClientCreator::create(
            id: Req::getStringOrDefault(key: 'oauth2_client_id'),
            description: Req::getStringOrDefault(key: 'oauth2_client_description'),
            oauth2_client_type: BearOauth2ClientTypeEnum::from(Req::getStringOrDefault(key: 'oauth2_client_type')),
            oauth2_authorize_uri: Req::getStringOrDefault(key: 'oauth2_authorize_uri'),
            oauth2_token_uri: Req::getStringOrDefault(key: 'oauth2_token_uri'),
            encrypted_secret: Req::getStringOrDefault(key: 'encrypted_oauth2_client_secret'),
            client_base_url: Req::getString(key: 'oauth2_client_base_url'),
            client_scope: Req::getString(key: 'oauth2_client_scope'),
            user_redirect_path: Req::getString(key: 'oauth2_client_redirect_path'),
            user_scope: Req::getString(key: 'oauth2_user_scope'),
        );
        return $this->index();
    }

    public function updateDialog(string $oauth2_client_id): View {
        return Htmx::dialogView(view: 'larabear-credential::oauth2.client.update', title: "Update Client - $oauth2_client_id", data: [
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
        return Htmx::dialogView(view: 'larabear-credential::oauth2.client.add-user', title: "Add User To Client - $oauth2_client_id",  data: ['oauth2_client_id' => $oauth2_client_id]);
    }
}
