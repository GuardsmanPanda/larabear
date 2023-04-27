<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Api\Monitoring\Controller\LarabearMonitoringApiErrorController;
use GuardsmanPanda\Larabear\Web\Api\Monitoring\Controller\LarabearMonitoringApiQueueController;
use Illuminate\Support\Facades\Route;

Route::get(uri: 'no-failed-jobs', action: [LarabearMonitoringApiQueueController::class, 'noFailedJobs']);
Route::get(uri: 'no-stale-jobs', action: [LarabearMonitoringApiQueueController::class, 'noStaleJobs']);

Route::get(uri: 'no-soft-delete-errors', action: [LarabearMonitoringApiErrorController::class, 'noSoftDeleteErrors']);
Route::get(uri: 'no-severe-errors', action: [LarabearMonitoringApiErrorController::class, 'noSevereErrors']);
