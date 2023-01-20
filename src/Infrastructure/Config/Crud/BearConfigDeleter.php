<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Config\Model\BearConfig;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

final class BearConfigDeleter {
    public static function delete(BearConfig $model): void {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);
        $model->delete();
    }

    public static function deleteFromConfigKey(string $config_key): void {
        self::delete(model: BearConfig::findOrFail($config_key));
    }
}
