<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Service;

use Illuminate\Database\Eloquent\Model;
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

    public static function extractPrimaryKeyArray(Model $model): array {
        $primary_key_value = $model->getKey();
        $res = [null, null, null];
        // Test the key to find out what type it is.
        if (is_int($primary_key_value)) {
            $res[0] = $primary_key_value;
        } else if (is_string($primary_key_value) && preg_match('/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/i', $primary_key_value)) {
            $res[1] = $primary_key_value;
        } else {
            $res[2] = $primary_key_value;
        }
        return $res;
    }

    public static function extractAuditColumns(Model $model): array {
        $ignore_columns = $model->log_exclude_columns ?? [];
        $arr = $model->toArray();
        foreach ($arr as $key => $value) {
            if (str_starts_with($key, 'encrypted_')) {
                $arr[$key] = 'HIDDEN';
            }
            if (in_array($key, $ignore_columns, true))  {
                unset($arr[$key]);
            }
        }
        return $arr;
    }
}
