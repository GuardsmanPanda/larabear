<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Email\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Email\Model\BearEmail;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

final class BearEmailDeleter {
    public static function delete(BearEmail $model): void {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);
        $model->delete();
    }

    public static function deleteFromId(string $id): void {
        self::delete(model: BearEmail::findOrFail(id: $id));
    }
}
