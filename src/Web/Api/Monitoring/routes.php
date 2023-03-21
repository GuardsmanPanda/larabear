<?php declare(strict_types=1);

use GuardsmanPanda\Larabear\Web\Api\Error\Controller\LarabearApiErrorController;
use GuardsmanPanda\Larabear\Web\Api\Monitoring\Controller\LarabearMonitoringQueueController;
use Illuminate\Support\Facades\Route;

Route::get(uri: 'failed-jobs-count', action: [LarabearMonitoringQueueController::class, 'failedJobsCount']);
Route::get(uri: 'stale-jobs-count', action: [LarabearMonitoringQueueController::class, 'staleJobsCount']);
