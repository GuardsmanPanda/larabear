<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use GuardsmanPanda\Larabear\Infrastructure\Integrity\Service\ValidateAndParseValue;
use Illuminate\Support\Env;

final class BearEnvService {
    public static function getString(string $key): string {
        return ValidateAndParseValue::parseString(value: Env::get(key: $key), errorMessage: "env key [$key] must be a string");
    }

    public static function getStringOrNull(string $key): string|null {
        $value = Env::get(key: $key);
        return $value === null ? null : ValidateAndParseValue::parseString(value: Env::get(key: $key), errorMessage: "env key [$key] must be a string");
    }

    public static function getStringOrDefault(string $key, string $default): string {
        $value = Env::get(key: $key);
        if ($value === null) {
            return $default;
        }
        return ValidateAndParseValue::parseString(value: Env::get(key: $key), errorMessage: "env key [$key] must be a string");
    }


    public static function getInt(string $key): int {
        return ValidateAndParseValue::parseInt(value: Env::get(key: $key), errorMessage: "env key [$key] must be an integer");
    }

    public static function getIntOrNull(string $key): int|null {
        $value = Env::get(key: $key);
        return $value === null ? null : ValidateAndParseValue::parseInt(value: Env::get(key: $key), errorMessage: "env key [$key] must be an integer");
    }

    public static function getIntOrDefault(string $key, int $default): int {
        $value = Env::get(key: $key);
        if ($value === null) {
            return $default;
        }
        return ValidateAndParseValue::parseInt(value: Env::get(key: $key), errorMessage: "env key [$key] must be an integer");
    }


    public static function getBool(string $key): bool {
        return ValidateAndParseValue::parseBool(value: Env::get(key: $key), errorMessage: "env key [$key] must be a boolean");
    }

    public static function getBoolOrNull(string $key): bool|null {
        $value = Env::get(key: $key);
        return $value === null ? null : ValidateAndParseValue::parseBool(value: Env::get(key: $key), errorMessage: "env key [$key] must be a boolean");
    }

    public static function getBoolOrDefault(string $key, bool $default): bool {
        $value = Env::get(key: $key);
        if ($value === null) {
            return $default;
        }
        return ValidateAndParseValue::parseBool(value: Env::get(key: $key), errorMessage: "env key [$key] must be a boolean");
    }

    /**
     * @param string $key
     * @param array<string> $array
     * @return string
     */
    public static function getStringFromArray(string $key, array $array): string {
        $value = self::getString(key: $key);
        return ValidateAndParseValue::mustBeInArray(value: $value, array: $array, errorMessage: "env key [$key] must be one of: " . implode(separator: ', ', array: $array));
    }
}
