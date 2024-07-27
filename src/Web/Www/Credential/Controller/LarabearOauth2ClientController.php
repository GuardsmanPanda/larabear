<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Credential\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Htmx;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
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

    public function updateDialog(string $oauth2_client_id): View {
        return Htmx::dialogView(view: 'larabear-credential::oauth2.client.update', title: "Update Client - $oauth2_client_id", data: [
            'client' => BearOauth2Client::findOrFail(id: $oauth2_client_id),
        ]);
    }

    public function update(string $oauth2_client_id): View {
        return $this->index();
    }

    public function addUserDialog(string $oauth2_client_id): View {
        return Htmx::dialogView(view: 'larabear-credential::oauth2.client.add-user', title: "Add User To Client - $oauth2_client_id",  data: ['oauth2_client_id' => $oauth2_client_id]);
    }
}
