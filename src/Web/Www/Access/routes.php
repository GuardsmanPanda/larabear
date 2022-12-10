<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Www\Access\Controller\LarabearAccessTokenAppController;
use GuardsmanPanda\Larabear\Web\Www\Access\Controller\LarabearPermissionController;
use GuardsmanPanda\Larabear\Web\Www\Access\Controller\LarabearRoleController;
use Illuminate\Support\Facades\Route;

Route::prefix('token/app')->group(function (): void {
    Route::get(uri: '', action: [LarabearAccessTokenAppController::class, 'index']);
    Route::post(uri: '', action: [LarabearAccessTokenAppController::class, 'create']);
    Route::get(uri: 'create', action: [LarabearAccessTokenAppController::class, 'createDialog']);

    Route::delete(uri: '{id}', action: [LarabearAccessTokenAppController::class, 'delete']);
    Route::get(uri: '{id}/update', action: [LarabearAccessTokenAppController::class, 'updateDialog']);

});

Route::prefix('role')->group(function (): void {
    Route::get(uri: '', action: [LarabearRoleController::class, 'index']);
    Route::post(uri: '', action: [LarabearRoleController::class, 'create']);
    Route::get(uri: 'create', action: [LarabearRoleController::class, 'createDialog']);
    Route::get(uri: '{slug}/permission', action: [LarabearRoleController::class, 'permissionDialog']);
    Route::delete(uri: '{slug}', action: [LarabearRoleController::class, 'delete']);
});

Route::prefix('permission')->group(function (): void {
    Route::get(uri: '', action: [LarabearPermissionController::class, 'index']);
    Route::post(uri: '', action: [LarabearPermissionController::class, 'create']);
    Route::get(uri: 'create', action: [LarabearPermissionController::class, 'createDialog']);
    Route::delete(uri: '{slug}', action: [LarabearPermissionController::class, 'delete']);
});
