<?php

namespace GuardsmanPanda\Larabear\Service;

use Carbon\CarbonImmutable;
use InvalidArgumentException;
use Throwable;

class ValidateAndParseValue {
    public static function parseInt(mixed $value): int {
        if (is_int($value) || (is_string($value) && ctype_digit($value))) {
            return (int) $value;
        }
        throw new InvalidArgumentException("$value is not an integer, type: " . gettype($value));
    }

    public static function parseFloat(mixed $value): float {
        if (is_float($value) || (is_string($value) && is_numeric($value))) {
            return (float) $value;
        }
        throw new InvalidArgumentException("$value is not a float, type: " . gettype($value));
    }

    public static function parseString(mixed $value): string {
        if (is_string($value)) {
            return $value;
        }
        throw new InvalidArgumentException("$value is not a string, type: " . gettype($value));
    }

    public static function parseJson(string|array $value): array {
        if (is_array($value)) {
            return $value;
        }
        try {
            return json_decode($value, false, 512, JSON_THROW_ON_ERROR);
        } catch (Throwable $e) {
            throw new InvalidArgumentException("Invalid JSON: " . $e->getMessage());
        }
    }

    public static function parseBool(mixed $value): bool {
        return match ($value) {
            'true', true => true,
            'false', false => false,
            default => throw new InvalidArgumentException("$value is not a bool, type: " . gettype($value)),
        };
    }

    public static function parseDate(mixed $value): CarbonImmutable {
        if ($value instanceof CarbonImmutable) {
            return $value;
        }
        if (!is_string($value)) {
            throw new InvalidArgumentException("$value is not a string, type: " . gettype($value));
        }
        $arr = explode('-', $value);
        if (count($arr) !== 3 || strlen($arr[0]) !== 4 || strlen($arr[1]) !== 2 || strlen($arr[2]) !== 2) {
            throw new InvalidArgumentException("Invalid date format: $value, must be YYYY-MM-DD");
        }
        $year = (int)$arr[0];
        $month = (int)$arr[1];
        $day = (int)$arr[2];
        if (!checkdate(month: $month, day: $day, year: $year)) {
            throw new InvalidArgumentException("Invalid date: $value");
        }
        return CarbonImmutable::createFromDate(year: $year, month: $month, day: $day);
    }


    public static function parseDateTime(mixed $value, string|null $timezone = null): CarbonImmutable {
        if ($value instanceof CarbonImmutable) {
            return $value;
        }
        if (!is_string($value)) {
            throw new InvalidArgumentException("$value is not a string, type: " . gettype($value));
        }

        $date = CarbonImmutable::parse($value);
        if ($timezone === null && $value !== $date->toIso8601String()) {
            throw new InvalidArgumentException("Invalid date time: $value (must be ISO 8601), example: " . $date->toIso8601String());
        }
        if ($timezone !== null) {
            $date->setTimezone($timezone);
        }
        return $date;
    }


    public static function parseArray(mixed $value): array {
        if (is_array($value)) {
            return $value;
        }
        throw new InvalidArgumentException("$value is not array, type: " . gettype($value));
    }
}