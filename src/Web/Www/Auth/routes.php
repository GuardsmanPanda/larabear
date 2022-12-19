<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Www\Auth\Controller\LarabearAuthOauth2Controller;
use Illuminate\Support\Facades\Route;

Route::get(uri: 'sign-in-form', action: [LarabearAuthOauth2Controller::class, 'showSignInForm']);
Route::get(uri: 'oauth2-client/{oauth2_client_id}/redirect', action: [LarabearAuthOauth2Controller::class, 'oauth2Redirect']);
Route::get(uri: 'oauth2-client/{oauth2_client_id}/callback', action: [LarabearAuthOauth2Controller::class, 'oauth2Callback']);
