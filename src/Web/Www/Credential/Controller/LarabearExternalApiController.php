<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Credential\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

final class LarabearExternalApiController extends Controller {
    public function index(): View {
        return Resp::view(view: 'larabear-credential::external.index', data: [
            'external_apis' => DB::select(query: "SELECT * FROM bear_external_api ORDER BY external_api_slug"),
        ]);
    }

    public function createDialog(): View {
        return Resp::view(view: 'larabear-credential::external.create');
    }
}
