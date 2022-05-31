<?php

namespace GuardsmanPanda\Larabear\Service;

use RuntimeException;

class RegexService {
    public static function extractFirst(string $regex, string $subject, bool $nullIfNoMatch = false): string|null {
        $matches = [];
        preg_match($regex, $subject, $matches);
        return $matches[1] ?? ($nullIfNoMatch ? null : throw new RuntimeException("No match found for regex: $regex, subject: $subject"));
    }
}
