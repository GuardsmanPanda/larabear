<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Www\Credential\Controller\LarabearExternalApiController;
use GuardsmanPanda\Larabear\Web\Www\Credential\Controller\LarabearOauth2ClientController;
use Illuminate\Support\Facades\Route;

Route::prefix('oauth2/client')->group(function () {
    Route::get(uri: '', action: [LarabearOauth2ClientController::class, 'index']);
    Route::get(uri: '{id}/update', action: [LarabearOauth2ClientController::class, 'updateDialog']);
    Route::get(uri: '{id}/add-user', action: [LarabearOauth2ClientController::class, 'addUserDialog']);
    Route::patch(uri: '{id}', action: [LarabearOauth2ClientController::class, 'update']);
});

Route::prefix('external')->group(function () {
    Route::get(uri: '', action: [LarabearExternalApiController::class, 'index']);
    Route::get(uri: '{enum}/update', action: [LarabearExternalApiController::class, 'updateDialog']);
    Route::patch(uri: '{enum}', action: [LarabearExternalApiController::class, 'update']);
});
