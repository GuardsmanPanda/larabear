<?php

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use RuntimeException;

class RegexService {
    public static function extractFirst(string $regex, string $subject, bool $nullIfNoMatch = false): string|null {
        $matches = [];
        preg_match(pattern: $regex, subject: $subject, matches: $matches);
        return $matches[1] ?? ($nullIfNoMatch ? null : throw new RuntimeException(message: "No match found for regex: $regex, subject: $subject"));
    }
}
