<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Config\Model\BearConfig;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\App;
use RuntimeException;

class BearConfigDeleter {
    public static function delete(BearConfig $model): void {
        BearDBService::mustBeInTransaction();
        if (!App::runningUnitTests() && !Req::isWriteRequest()) {
            throw new RuntimeException(message: 'Database write operations should not be performed in read-only [GET, HEAD, OPTIONS] requests.');
        }
        $model->delete();
    }

    public static function deleteFromConfigKey(string $config_key): void {
        self::delete(model: BearConfig::findOrFail($config_key));
    }
}
