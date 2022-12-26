<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Log\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogResponseErrorDeleter;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LarabearLogResponseErrorController extends Controller {
    public function index(): View {
        return view(view: 'larabear-log::response-error.index', data: [
            'errors' => DB::select(query: "
                SELECT le.*, bc.country_name
                FROM bear_log_response_error le
                LEFT JOIN bear_country bc ON bc.country_iso2_code = le.request_country_code
                ORDER BY le.created_at DESC
                LIMIT 1000
                "),
        ]);
    }

    public function delete(): View {
        BearLogResponseErrorDeleter::delete(
            id: Req::getInt(key: 'id', defaultIfMissing: null),
            response_status_code: Req::getInt(key: 'response_status_code', defaultIfMissing: null),
            request_http_path: Req::getString(key: 'request_http_path', defaultIfMissing: null),
            app_action_name: Req::getString(key: 'app_action_name', defaultIfMissing: null),
        );
        return  $this->index();
    }
}
