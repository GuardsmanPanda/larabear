<?php

use GuardsmanPanda\Larabear\Web\Dashboard\Controller\BearDashboardController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

Route::prefix(prefix: 'bear')->middleware(middleware: Config::get(key:'bear.control_panel.middleware') ?? [])->group(function () {
    Route::get(uri: '/', action: [BearDashboardController::class, 'index']);
});
