<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Log\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorDeleter;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LarabearLogErrorController extends Controller {
    public function index(): View {
        return view(view: 'larabear-log::error.index', data: [
            'errors' => DB::select(query: "
                SELECT *
                FROM bear_log_error le
                ORDER BY le.created_at DESC
                LIMIT 1000
            "),
        ]);
    }

    public function delete(): View {
        BearLogErrorDeleter::delete(
            id: Req::getInt(key: 'id', nullIfMissing: true),
            error_namespace: Req::getString(key: 'error_namespace', nullIfMissing: true),
            error_key: Req::getString(key: 'error_key', nullIfMissing: true),
            app_action_name: Req::getString(key: 'app_action_name', nullIfMissing: true),
        );
        return  $this->index();
    }
}
