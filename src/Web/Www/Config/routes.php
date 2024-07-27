<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Www\Config\Controller\LarabearConfigController;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: [LarabearConfigController::class, 'index']);

Route::get(uri: '{key}/update', action: [LarabearConfigController::class, 'updateDialog']);
Route::patch(uri: '{key}', action: [LarabearConfigController::class, 'update']);
