<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Www\Access\Controller\LarabearAccessTokenController;
use GuardsmanPanda\Larabear\Web\Www\Access\Controller\LarabearUserController;
use Illuminate\Support\Facades\Route;

Route::prefix('token/app')->group(function (): void {
    Route::get(uri: '', action: [LarabearAccessTokenController::class, 'index']);
    Route::post(uri: '', action: [LarabearAccessTokenController::class, 'create']);
    Route::get(uri: 'create', action: [LarabearAccessTokenController::class, 'createDialog']);
    Route::delete(uri: '{id}', action: [LarabearAccessTokenController::class, 'delete']);
    Route::get(uri: '{id}/update', action: [LarabearAccessTokenController::class, 'updateDialog']);
});

Route::prefix('user')->group(function (): void {
    Route::get(uri: '', action: [LarabearUserController::class, 'index']);
    Route::get(uri: '{user_id}/role-and-permission', action: [LarabearUserController::class, 'roleAndPermissionDialog']);
    Route::post(uri: '{user_id}/role/{role_enum}', action: [LarabearUserController::class, 'addRoleToUser']);
    Route::delete(uri: '{user_id}/role/{role_enum}', action: [LarabearUserController::class, 'deleteRoleFromUser']);
    Route::post(uri: '{user_id}/permission/{permission_enum}', action: [LarabearUserController::class, 'addPermissionToUser']);
    Route::delete(uri: '{user_id}/permission/{permission_enum}', action: [LarabearUserController::class, 'deletePermissionFromUser']);
});
