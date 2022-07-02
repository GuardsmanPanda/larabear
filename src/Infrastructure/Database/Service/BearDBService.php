<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Service;

use Illuminate\Support\Facades\DB;
use RuntimeException;

class BearDBService {
    public static function mustBeInTransaction(): void {
        if (DB::transactionLevel() !== 0) {
           return;
        }
        throw new RuntimeException(message: 'DB::transaction() must be called before calling this method.');
    }
}