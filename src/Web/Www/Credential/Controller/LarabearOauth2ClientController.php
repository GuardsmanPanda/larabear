<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Credential\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Htmx;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud\BearOauth2ClientUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

final class LarabearOauth2ClientController extends Controller {

    public function index(): View {
        return Resp::view(view: 'larabear-credential::oauth2.client.index', data: [
            'clients' => DB::select(query: "SELECT * FROM bear_oauth2_client ORDER BY bear_oauth2_client.oauth2_client_type_enum, id DESC"),
        ]);
    }

    public function updateDialog(string $id): View {
        return Htmx::dialogView(view: 'larabear-credential::oauth2.client.update', title: "Update Client - $id", data: [
            'client' => BearOauth2Client::findOrFail(id: $id),
        ]);
    }

    public function update(string $id): View {
        BearOauth2ClientUpdater::fromId(id: $id)
            ->setEncryptedSecret(encrypted_secret: Req::getString(key: 'encrypted_secret'))
            ->update();
        return $this->index();
    }

    public function addUserDialog(string $id): View {
        return Htmx::dialogView(view: 'larabear-credential::oauth2.client.add-user', title: "Add User To Client - $id",  data: ['id' => $id]);
    }
}
