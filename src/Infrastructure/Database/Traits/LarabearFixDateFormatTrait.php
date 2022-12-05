<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Traits;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

trait LarabearFixDateFormatTrait {
    public function getDateFormat(): string {
        return BearDatabaseService::defaultConnectionDriver() === 'mysql' ? 'Y-m-d H:i:s' : 'Y-m-d H:i:sO';
    }
}