<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Config\Service;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Config\Model\BearConfig;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use RuntimeException;

class BearConfigService {

    public static function getBoolean(string $config_key): bool {
        return  BearConfig::findOrFail(id: $config_key)->config_boolean ?? throw new RuntimeException(message: "Config key $config_key is not a boolean");
    }

    public static function getInteger(string $config_key): int {
        return  BearConfig::findOrFail(id: $config_key)->config_integer ?? throw new RuntimeException(message: "Config key $config_key is not an integer");
    }

    public static function getString(string $config_key): string {
        return  BearConfig::findOrFail(id: $config_key)->config_string ?? throw new RuntimeException(message: "Config key $config_key is not a string");
    }

    public static function getEncryptedString(string $config_key): string {
        return  BearConfig::findOrFail(id: $config_key)->encrypted_config_string ?? throw new RuntimeException(message: "Config key $config_key is not an encrypted string");
    }

    /**
     * @param string $config_key
     * @return ArrayObject<string, mixed>
     */
    public static function getJson(string $config_key): ArrayObject {
        return  BearConfig::findOrFail(id: $config_key)->config_json ?? throw new RuntimeException(message: "Config key $config_key is not a json");
    }

    public static function getDate(string $config_key): CarbonInterface {
        return  BearConfig::findOrFail(id: $config_key)->config_date ?? throw new RuntimeException(message: "Config key $config_key is not a date");
    }

    public static function getTimestamp(string $config_key): CarbonInterface {
        return  BearConfig::findOrFail(id: $config_key)->config_timestamp ?? throw new RuntimeException(message: "Config key $config_key is not a timestamp");
    }
}
