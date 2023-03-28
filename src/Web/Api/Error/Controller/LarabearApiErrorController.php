<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Api\Error\Controller;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\LarabearDatabaseForeignKeyService;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

final class LarabearApiErrorController extends Controller {
    public function dbSoftDeleteErrors(): JsonResponse {
        BearGlobalStateService::setLogResponseError(value: false);
        $connection = config(key: 'database.default');
        $error = LarabearDatabaseForeignKeyService::getSoftDeletedForeignKeyConstraints($connection);
        return new JsonResponse(data: $error, status: count($error) > 0 ? 500 : 200);
    }
}
