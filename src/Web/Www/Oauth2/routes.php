<?php

use GuardsmanPanda\Larabear\Web\Www\Oauth2\Controller\Oauth2ClientController;
use Illuminate\Support\Facades\Route;

Route::prefix('client')->group(function () {
    Route::get(uri: '', action: [Oauth2ClientController::class, 'index']);
});
