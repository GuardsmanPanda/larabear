<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Www\Credential\Controller\LarabearOauth2ClientController;
use Illuminate\Support\Facades\Route;

Route::prefix('oauth2/client')->group(function () {
    Route::get(uri: '', action: [LarabearOauth2ClientController::class, 'index']);
    Route::post(uri: '', action: [LarabearOauth2ClientController::class, 'create']);
    Route::get(uri: 'create', action: [LarabearOauth2ClientController::class, 'createDialog']);
    Route::get(uri: '{oauth2_client_id}/update', action: [LarabearOauth2ClientController::class, 'updateDialog']);
    Route::get(uri: '{oauth2_client_id}/add-user', action: [LarabearOauth2ClientController::class, 'addUserDialog']);
    Route::patch(uri: '{oauth2_client_id}', action: [LarabearOauth2ClientController::class, 'update']);
    Route::delete(uri: '{oauth2_client_id}', action: [LarabearOauth2ClientController::class, 'delete']);
});
