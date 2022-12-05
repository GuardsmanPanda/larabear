<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Www\Log\Controller\LarabearLogErrorController;
use GuardsmanPanda\Larabear\Web\Www\Log\Controller\LarabearLogResponseErrorController;
use Illuminate\Support\Facades\Route;

Route::prefix('error')->group(function () {
    Route::get(uri: '', action: [LarabearLogErrorController::class, 'index']);
    Route::delete(uri: '', action: [LarabearLogErrorController::class, 'delete']);
});

Route::prefix('response-error')->group(function () {
    Route::get(uri: '', action: [LarabearLogResponseErrorController::class, 'index']);
    Route::delete(uri: '', action: [LarabearLogResponseErrorController::class, 'delete']);
});
