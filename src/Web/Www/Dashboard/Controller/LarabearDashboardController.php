<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Dashboard\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class LarabearDashboardController extends Controller {
    public function index(): View {
        return Resp::view(view: 'larabear-dashboard::index', data: [
            'opcache' => json_encode(opcache_get_status(), JSON_THROW_ON_ERROR | JSON_PRETTY_PRINT),
            'opcache_config' => json_encode(opcache_get_configuration(), JSON_THROW_ON_ERROR | JSON_PRETTY_PRINT),
        ]);
    }
}
