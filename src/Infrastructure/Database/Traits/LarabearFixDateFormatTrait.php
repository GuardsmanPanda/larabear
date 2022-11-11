<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Traits;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;

trait LarabearFixDateFormatTrait {
    public function getDateFormat(): string {
        return BearDBService::defaultConnectionDriver() === 'mysql' ? 'Y-m-d H:i:s' : 'Y-m-d H:i:sO';
    }
}