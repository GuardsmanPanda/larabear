<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Www\Auth\Controller\LarabearAuthController;
use Illuminate\Support\Facades\Route;

Route::get(uri: 'sign-in-form', action: [LarabearAuthController::class, 'showSignInForm']);
Route::get(uri: 'oauth2-client/{oauth2_client_id}/redirect', action: [LarabearAuthController::class, 'oauth2Redirect']);
Route::get(uri: 'oauth2-client/{oauth2_client_id}/callback', action: [LarabearAuthController::class, 'oauth2Callback']);
