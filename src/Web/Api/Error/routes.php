<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Api\Error\Controller\LarabearApiErrorController;
use Illuminate\Support\Facades\Route;

Route::get(uri: 'db-soft-delete-errors', action: [LarabearApiErrorController::class, 'dbSoftDeleteErrors']);
