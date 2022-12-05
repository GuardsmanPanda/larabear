<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use RuntimeException;

class BearRegexService {
    public static function extractFirst(string $regex, string $subject, bool $nullIfNoMatch = false): string|null {
        $matches = [];
        preg_match(pattern: $regex, subject: $subject, matches: $matches);
        return $matches[1] ?? ($nullIfNoMatch ? null : throw new RuntimeException(message: "No match found for regex: $regex, subject: $subject"));
    }

    public static function superTrim(string $string): string {
        return preg_replace(pattern: '/\s+/', replacement: ' ', subject: trim(string: $string)) ?? Throw new RuntimeException(message: "Failed to superTrim string: [$string]");
    }
}
