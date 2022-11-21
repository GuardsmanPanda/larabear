<?php

namespace GuardsmanPanda\Larabear\Web\Www\Dashboard\Controller;

use Illuminate\Routing\Controller;

class LarabearDashboardController extends Controller {
    public function index(): string {
        return view(view: 'larabear-dashboard::index');
    }
}
