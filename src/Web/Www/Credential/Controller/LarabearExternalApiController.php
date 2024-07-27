<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Credential\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Htmx;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Crud\BearExternalApiCrud;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

final class LarabearExternalApiController extends Controller {
    public function index(): View {
        return Resp::view(view: 'larabear-credential::external.index', data: [
            'external_apis' => DB::select(query: "SELECT * FROM bear_external_api ORDER BY enum"),
        ]);
    }

    public function updateDialog(string $enum): View {
        return Htmx::dialogView(view: 'larabear-credential::external.update',
            title: "Update Encrypted Token For - $enum",
            data: ['enum' => $enum]
        );
    }

    public function update(string $enum): View {
        BearExternalApiCrud::updateEncryptedToken(enum: $enum, encrypted_token: Req::getString(key: 'encrypted_token'));
        return $this->index();
    }
}
