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
                SELECT le.*, bc.cca2
                FROM bear_error_response le
                LEFT JOIN bear_country bc ON bc.cca2 = le.country_code
                ORDER BY le.created_at DESC
                LIMIT 1000
            "),
        ]);
    }

    public function delete(): View {
        BearResponseErrorDeleter::delete(
            id: Req::getIntOrNull(key: 'id', isOptional: true),
            status_code: Req::getIntOrNull(key: 'status_code', isOptional: true),
            http_path: Req::getStringOrNull(key: 'http_path', isOptional: true),
            action_name: Req::getStringOrNull(key: 'action_name', isOptional: true),
        );
        return  $this->index();
    }
}
