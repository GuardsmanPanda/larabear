<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Log\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearResponseErrorDeleter;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

final class LarabearErrorResponseController extends Controller {
    public function index(): View {
        return Resp::view(view: 'larabear-log::response-error.index', data: [
            'errors' => DB::select(query: "
                SELECT le.*, bc.country_name
                FROM bear_error_response le
                LEFT JOIN bear_country bc ON bc.country_iso2_code = le.request_country_code
                ORDER BY le.created_at DESC
                LIMIT 1000
                "),
        ]);
    }

    public function delete(): View {
        BearResponseErrorDeleter::delete(
            id: Req::getInt(key: 'id', defaultIfMissing: null),
            status_code: Req::getInt(key: 'response_status_code', defaultIfMissing: null),
            http_path: Req::getString(key: 'request_path', defaultIfMissing: null),
            action_name: Req::getString(key: 'app_action_name', defaultIfMissing: null),
        );
        return  $this->index();
    }
}
