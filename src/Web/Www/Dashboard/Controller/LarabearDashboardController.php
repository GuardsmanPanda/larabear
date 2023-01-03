<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Dashboard\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class LarabearDashboardController extends Controller {
    public function index(): View {
        return Resp::view(view: 'larabear-dashboard::index');
    }
}
