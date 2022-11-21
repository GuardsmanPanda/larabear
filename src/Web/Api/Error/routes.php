<?php

use GuardsmanPanda\Larabear\Web\Api\Error\Controller\LarabearApiErrorController;
use Illuminate\Support\Facades\Route;

Route::get(uri: 'kuma-alert', action: [LarabearApiErrorController::class, 'kumaAlert']);
Route::get(uri: 'db-soft-delete-errors', action: [LarabearApiErrorController::class, 'dbSoftDeleteErrors']);
