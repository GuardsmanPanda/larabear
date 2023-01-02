<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\UserApi\User\Controller\LarabearUserApiUserController;
use Illuminate\Support\Facades\Route;

Route::get(uri: 'current', action: [LarabearUserApiUserController::class, 'current']);
