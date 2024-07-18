<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Www\Access\Controller\LarabearAccessTokenAppController;
use GuardsmanPanda\Larabear\Web\Www\Access\Controller\LarabearUserController;
use Illuminate\Support\Facades\Route;

Route::prefix('token/app')->group(function (): void {
    Route::get(uri: '', action: [LarabearAccessTokenAppController::class, 'index']);
    Route::post(uri: '', action: [LarabearAccessTokenAppController::class, 'create']);
    Route::get(uri: 'create', action: [LarabearAccessTokenAppController::class, 'createDialog']);

    Route::delete(uri: '{id}', action: [LarabearAccessTokenAppController::class, 'delete']);
    Route::get(uri: '{id}/update', action: [LarabearAccessTokenAppController::class, 'updateDialog']);
});

Route::prefix('user')->group(function (): void {
    Route::get(uri: '', action: [LarabearUserController::class, 'index']);
    Route::get(uri: '{user_id}/role-and-permission', action: [LarabearUserController::class, 'roleAndPermissionDialog']);
    Route::post(uri: '{user_id}/role/{role_slug}', action: [LarabearUserController::class, 'addRoleToUser']);
    Route::delete(uri: '{user_id}/role/{role_slug}', action: [LarabearUserController::class, 'deleteRoleFromUser']);
    Route::post(uri: '{user_id}/permission/{permission_slug}', action: [LarabearUserController::class, 'addPermissionToUser']);
    Route::delete(uri: '{user_id}/permission/{permission_slug}', action: [LarabearUserController::class, 'deletePermissionFromUser']);
});
