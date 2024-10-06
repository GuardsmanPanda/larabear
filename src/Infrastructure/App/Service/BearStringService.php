<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use InvalidArgumentException;

final class BearStringService {
    public static function getPosition(string $haystack, string $needle): int {
        $position = strpos(haystack: $haystack, needle: $needle);
        if ($position === false) {
            throw new InvalidArgumentException(message: "needle [$needle] not found in haystack [$haystack]");
        }
        return $position;
    }
}
