<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Service;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class BearDBService {
    public static function mustBeInTransaction(): void {
        if (App::runningUnitTests() || DB::transactionLevel() > 0) {
            return;
        }
        throw new RuntimeException(message: 'DB::transaction() must be called before calling this method.');
    }

    public static function mustBeProperHttpMethod(array $verbs): void {
        if (App::runningUnitTests() || App::runningInConsole()) {
            return;
        }
        if (!in_array(needle: Req::method(), haystack: $verbs, strict: true)) {
            throw new RuntimeException(message: 'This method can only be called in the following HTTP methods: ' . implode(separator: ', ', array: $verbs));
        }
    }

    public static function defaultConnectionDriver(): string {
        return Config::get(key: 'database.connections.' . Config::get(key: 'database.default') . '.driver');
    }

    public static function extractPrimaryKeyArray(Model $model): array {
        $primary_key_value = $model->getKey();
        $res = [null, null, null];
        // Test the key to find out what type it is.
        if (is_int($primary_key_value)) {
            $res[0] = $primary_key_value;
        } else if (is_string($primary_key_value) && preg_match('/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/i', $primary_key_value)) {
            $res[1] = $primary_key_value;
        } else if (is_array($primary_key_value)) {
            $res[2] = json_encode(value: $primary_key_value, flags: JSON_THROW_ON_ERROR);
        } else {
            $res[2] = $primary_key_value;
        }
        return $res;
    }

    public static function extractAuditColumns(Model $model): array {
        $ignore_columns = property_exists(object_or_class: $model, property: 'log_exclude_columns') ? $model->log_exclude_columns : [];
        $arr = $model->toArray();
        foreach ($arr as $key => $value) {
            if (str_starts_with($key, 'encrypted_')) {
                $arr[$key] = 'HIDDEN';
            }
            if (in_array($key, $ignore_columns, true)) {
                unset($arr[$key]);
            }
        }
        return $arr;
    }
}
