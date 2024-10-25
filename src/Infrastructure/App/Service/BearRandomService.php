<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use Random\RandomException;
use RuntimeException;

final class BearRandomService {
    public static function percentChance(int $chance): bool {
        try {
            return random_int(1, 100) <= $chance;
        } catch (RandomException $e) {
            throw new RuntimeException(message: 'Failed to generate random number.', previous: $e);
        }
    }
}
