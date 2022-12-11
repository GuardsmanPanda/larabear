<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Www\Access\Controller\LarabearAccessTokenAppController;
use GuardsmanPanda\Larabear\Web\Www\Access\Controller\LarabearPermissionController;
use GuardsmanPanda\Larabear\Web\Www\Access\Controller\LarabearRoleController;
use GuardsmanPanda\Larabear\Web\Www\Access\Controller\LarabearUserController;
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
    Route::get(uri: '{role_slug}/permission', action: [LarabearRoleController::class, 'permissionDialog']);
    Route::post(uri: '{role_slug}/permission/{permission_slug}', action: [LarabearRoleController::class, 'addPermissionToRole']);
    Route::delete(uri: '{role_slug}/permission/{permission_slug}', action: [LarabearRoleController::class, 'deletePermissionFromRole']);
    Route::delete(uri: '{role_slug}', action: [LarabearRoleController::class, 'delete']);
});

Route::prefix('permission')->group(function (): void {
    Route::get(uri: '', action: [LarabearPermissionController::class, 'index']);
    Route::post(uri: '', action: [LarabearPermissionController::class, 'create']);
    Route::get(uri: 'create', action: [LarabearPermissionController::class, 'createDialog']);
    Route::delete(uri: '{slug}', action: [LarabearPermissionController::class, 'delete']);
});

Route::prefix('user')->group(function (): void {
    Route::get(uri: '', action: [LarabearUserController::class, 'index']);
    Route::get(uri: '{user_id}/role-and-permission', action: [LarabearUserController::class, 'roleAndPermissionDialog']);
    Route::post(uri: '{user_id}/role/{role_slug}', action: [LarabearUserController::class, 'addRoleToUser']);
    Route::delete(uri: '{user_id}/role/{role_slug}', action: [LarabearUserController::class, 'deleteRoleFromUser']);
    Route::post(uri: '{user_id}/permission/{permission_slug}', action: [LarabearUserController::class, 'addPermissionToUser']);
    Route::delete(uri: '{user_id}/permission/{permission_slug}', action: [LarabearUserController::class, 'deletePermissionFromUser']);
});
