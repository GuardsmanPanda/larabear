<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Service;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class BearDBService {
    public static function mustBeInTransaction(): void {
        if (DB::transactionLevel() > 0) {
           return;
        }
        throw new RuntimeException(message: 'DB::transaction() must be called before calling this method.');
    }

    public static function defaultConnectionDriver(): string {
        return Config::get(key: 'database.connections.'. Config::get(key: 'database.default') . '.driver');
    }
}
