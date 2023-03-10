<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Www\Log\Controller\LarabearErrorController;
use GuardsmanPanda\Larabear\Web\Www\Log\Controller\LarabearErrorResponseController;
use Illuminate\Support\Facades\Route;

Route::prefix('error')->group(function () {
    Route::get(uri: '', action: [LarabearErrorController::class, 'index']);
    Route::delete(uri: '', action: [LarabearErrorController::class, 'delete']);
});

Route::prefix('response-error')->group(function () {
    Route::get(uri: '', action: [LarabearErrorResponseController::class, 'index']);
    Route::delete(uri: '', action: [LarabearErrorResponseController::class, 'delete']);
});
