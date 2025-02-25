<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use GuardsmanPanda\Larabear\Infrastructure\Integrity\Service\ValidateAndParseValue;
use RuntimeException;

final class BearRegexService {
    public static function isMatch(string $regex, string $string): bool {
        return preg_match(pattern: $regex, subject: $string) === 1;
    }

    public static function extractFirstString(string $regex, string $subject): string {
        $matches = [];
        preg_match(pattern: $regex, subject: $subject, matches: $matches);
        return $matches[1] ?? throw new RuntimeException(message: "No match found for regex: $regex, subject: $subject");
    }

    public static function extractFirstStringOrNull(string $regex, string $subject): string|null {
        $matches = [];
        preg_match(pattern: $regex, subject: $subject, matches: $matches);
        return $matches[1] ?? null;
    }

    public static function extractFirstFloat(string $regex, string $subject): float {
        return ValidateAndParseValue::parseFloat(value: self::extractFirstString(regex: $regex, subject: $subject));
    }

    public static function extractFirstFloatOrNull(string $regex, string $subject): float|null {
        $res = self::extractFirstStringOrNull(regex: $regex, subject: $subject);
        return $res === null ? null : ValidateAndParseValue::parseFloat(value: $res);
    }

    public static function superTrim(string $string): string {
        $res = preg_replace(pattern: '/\s+/', replacement: ' ', subject: trim(string: $string));
        return is_string(value: $res) ? $res : throw new RuntimeException(message: "Failed to trim string: $string");
    }

    public static function superTrimOrNull(string|null $string): string|null {
        $res = $string === null ? null : preg_replace(pattern: '/\s+/', replacement: ' ', subject: trim(string: $string));
        return !is_string(value: $res) || $res === '' ? null : $res;
    }
}
