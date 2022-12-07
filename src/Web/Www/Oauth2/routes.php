<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Www\Oauth2\Controller\Oauth2ClientController;
use Illuminate\Support\Facades\Route;

Route::prefix('client')->group(function () {
    Route::get(uri: '', action: [Oauth2ClientController::class, 'index']);
    Route::post(uri: '', action: [Oauth2ClientController::class, 'create']);
    Route::get(uri: 'create', action: [Oauth2ClientController::class, 'createDialog']);
    Route::get(uri: '{oauth2_client_id}/update', action: [Oauth2ClientController::class, 'updateDialog']);
    Route::get(uri: '{oauth2_client_id}/add-user', action: [Oauth2ClientController::class, 'addUserDialog']);
    Route::patch(uri: '{oauth2_client_id}', action: [Oauth2ClientController::class, 'update']);
    Route::delete(uri: '{oauth2_client_id}', action: [Oauth2ClientController::class, 'delete']);
});
