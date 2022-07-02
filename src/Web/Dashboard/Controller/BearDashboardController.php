<?php

namespace GuardsmanPanda\Larabear\Web\Dashboard\Controller;

use Illuminate\Routing\Controller;

class BearDashboardController extends Controller {
    public function index(): string {
        return view(view: 'dashboard.index');
    }
}
