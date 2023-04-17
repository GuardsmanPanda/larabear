<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Www\Email\Controller\LarabearEmailController;
use Illuminate\Support\Facades\Route;

Route::get(uri: 'table', action: [LarabearEmailController::class, 'emailTable']);
Route::get(uri: '{email_id}/content-dialog', action: [LarabearEmailController::class, 'emailContentDialog']);
