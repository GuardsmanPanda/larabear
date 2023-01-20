<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Model\BearExternalApi;

final class BearExternalApiDeleter {
    public static function delete(BearExternalApi $model): void {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);
        $model->delete();
    }

    public static function deleteFromId(string $id): void {
        self::delete(model: BearExternalApi::findOrFail(id: $id));
    }
}
