<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Integrity\Service;

use Carbon\CarbonImmutable;
use InvalidArgumentException;
use stdClass;
use Throwable;

class ValidateAndParseValue {
    public static function parseInt(mixed $value, string $errorMessage = null): int {
        if (is_int($value) || (is_string($value) && ctype_digit($value))) {
            return (int)$value;
        }
        $msg = "$value is not an integer, type: " . gettype($value);
        throw new InvalidArgumentException(message: $errorMessage === null ? $msg : "$errorMessage [$msg]");
    }


    public static function parseFloat(mixed $value, string $errorMessage = null): float {
        if (is_numeric($value)) {
            return (float)$value;
        }
        $msg = "$value is not a float, type: " . gettype($value);
        throw new InvalidArgumentException(message: $errorMessage === null ? $msg : "$errorMessage [$msg]");
    }


    public static function parseString(mixed $value, string $errorMessage = null): string {
        if (is_string($value)) {
            return $value;
        }
        $msg = "$value is not a string, type: " . gettype($value);
        throw new InvalidArgumentException(message: $errorMessage === null ? $msg : "$errorMessage [$msg]");
    }


    public static function parseJsonToArray(string|array $value, string $errorMessage = null): array {
        if (is_array($value)) {
            return $value;
        }
        try {
            return json_decode(json: $value, associative: true, depth: 512, flags: JSON_THROW_ON_ERROR);
        } catch (Throwable $e) {
            $msg = "Invalid JSON: " . $e->getMessage();
            throw new InvalidArgumentException(message: $errorMessage === null ? $msg : "$errorMessage [$msg]");
        }
    }

    public static function parseJsonToStdClass(string $value, string $errorMessage = null): stdClass {
        try {
            return json_decode(json: $value, associative: false, depth: 512, flags: JSON_THROW_ON_ERROR);
        } catch (Throwable $e) {
            $msg = "Invalid JSON: " . $e->getMessage();
            throw new InvalidArgumentException(message: $errorMessage === null ? $msg : "$errorMessage [$msg]");
        }
    }


    public static function parseBool(mixed $value, string $errorMessage = null): bool {
        if (is_string($value)) {
            $value = strtolower($value);
        }
        return match ($value) {
            'true', true => true,
            'false', false => false,
            default => throw new InvalidArgumentException(message: $errorMessage === null ? "$value is not a bool, type: " . gettype($value) : "$errorMessage [$value is not a bool, type: " . gettype($value) . "]"),
        };
    }


    public static function parseDate(mixed $value, string $errorMessage = null): CarbonImmutable {
        if ($value instanceof CarbonImmutable) {
            return $value;
        }
        if (!is_string($value)) {
            $msg = "$value is not a string, type: " . gettype($value);
            throw new InvalidArgumentException(message: $errorMessage === null ? $msg : "$errorMessage [$msg]");
        }
        $arr = explode(separator: '-', string: $value);
        if (count($arr) !== 3 || strlen($arr[0]) !== 4 || strlen($arr[1]) !== 2 || strlen($arr[2]) !== 2) {
            $msg = "Invalid date format: $value, must be YYYY-MM-DD";
            throw new InvalidArgumentException(message: $errorMessage === null ? $msg : "$errorMessage [$msg]");
        }
        $year = (int)$arr[0];
        $month = (int)$arr[1];
        $day = (int)$arr[2];
        if (!checkdate(month: $month, day: $day, year: $year)) {
            throw new InvalidArgumentException(message: "Invalid date: $value");
        }
        return CarbonImmutable::createFromDate(year: $year, month: $month, day: $day);
    }


    public static function parseDateTime(mixed $value, string|null $timezone = null, string $errorMessage = null): CarbonImmutable {
        if ($value instanceof CarbonImmutable) {
            return $value;
        }
        if (!is_string($value)) {
            $msg = "$value is not a string, type: " . gettype($value);
            throw new InvalidArgumentException(message: $errorMessage === null ? $msg : "$errorMessage [$msg]");
        }
        $value = str_replace(search: 'Z', replace: '+00:00', subject: $value);
        $date = CarbonImmutable::parse($value);
        if ($timezone === null && $value !== $date->toIso8601String()) {
            $msg = "Invalid date time: $value (must be ISO 8601), example: " . $date->toIso8601String();
            throw new InvalidArgumentException(message: $errorMessage === null ? $msg : "$errorMessage [$msg]");
        }
        if ($timezone !== null) {
            $date->setTimezone($timezone);
        }
        return $date;
    }


    public static function parseArray(mixed $value, string $errorMessage = null): array {
        if (is_array($value)) {
            return $value;
        }
        $msg = "$value is not an array, type: " . gettype($value);
        throw new InvalidArgumentException(message: $errorMessage === null ? $msg : "$errorMessage [$msg]");
    }


    public static function mustBeInArray(mixed $value, array $array, string $errorMessage = null): mixed {
        if (in_array(needle: $value, haystack: $array, strict: true)) {
            return $value;
        }
        $msg = "Value $value is not in array: " . implode(', ', $array);
        throw new InvalidArgumentException(message: $errorMessage === null ? $msg : "$errorMessage [$msg]");
    }
}
