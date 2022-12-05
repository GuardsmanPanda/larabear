<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Dashboard\Controller;

use Illuminate\Routing\Controller;
use Illuminate\View\View;

class LarabearDashboardController extends Controller {
    public function index(): View {
        return view(view: 'larabear-dashboard::index');
    }
}
