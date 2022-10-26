<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Service;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Config\Model\BearConfig;
use Illuminate\Support\Facades\DB;
use RuntimeException;
use stdClass;

class BearConfigService {

    public static function getBoolean(string $config_key): bool {
        return BearConfig::findOrFail(id: $config_key)->config_boolean;
    }

    public static function getInteger(string $config_key): int {
        return BearConfig::findOrFail(id: $config_key)->config_integer;
    }

    public static function getString(string $config_key): string {
        return BearConfig::findOrFail(id: $config_key)->config_string;
    }

    public static function getEncryptedString(string $config_key): string {
        return BearConfig::findOrFail(id: $config_key)->encrypted_config_string;
    }

    public static function getJson(string $config_key): stdClass {
        return BearConfig::findOrFail(id: $config_key)->config_json;
    }

    public static function getDate(string $config_key): CarbonInterface {
        return BearConfig::findOrFail(id: $config_key)->config_date;
    }

    public static function getTimestamp(string $config_key): CarbonInterface {
        return BearConfig::findOrFail(id: $config_key)->config_timestamp;
    }
}
