<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Api\Monitoring\Controller\LarabearMonitoringApiErrorController;
use GuardsmanPanda\Larabear\Web\Api\Monitoring\Controller\LarabearMonitoringApiQueueController;
use Illuminate\Support\Facades\Route;

Route::get(uri: 'failed-jobs-count', action: [LarabearMonitoringApiQueueController::class, 'failedJobsCount']);
Route::get(uri: 'stale-jobs-count', action: [LarabearMonitoringApiQueueController::class, 'staleJobsCount']);

Route::get(uri: 'soft-delete-errors', action: [LarabearMonitoringApiErrorController::class, 'softDeleteErrors']);
Route::get(uri: 'severe-errors', action: [LarabearMonitoringApiErrorController::class, 'severeErrors']);
