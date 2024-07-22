<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Log\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorDeleter;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

final class LarabearErrorController extends Controller {
    public function index(): View {
        return Resp::view(view: 'larabear-log::error.index', data: [
            'errors' => DB::select(query: "
                SELECT *
                FROM bear_error le
                ORDER BY le.created_at DESC
                LIMIT 1000
            "),
        ]);
    }

    public function delete(): View {
        BearErrorDeleter::delete(
            id: Req::getIntOrNull(key: 'id', isOptional: true),
            error_key: Req::getStringOrNull(key: 'error_key', isOptional: true),
            app_action_name: Req::getStringOrNull(key: 'app_action_name', isOptional: true),
        );
        return  $this->index();
    }
}
