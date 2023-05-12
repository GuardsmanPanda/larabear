<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Sms\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Sms\Model\BearSms;

final class BearSmsDeleter {
    public static function delete(BearSms $model): void {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);
        $model->delete();
    }

    public static function deleteFromId(string $id): void {
        self::delete(model: BearSms::findOrFail(id: $id));
    }
}
