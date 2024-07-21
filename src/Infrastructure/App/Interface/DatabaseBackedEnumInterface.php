<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Interface;

interface DatabaseBackedEnumInterface {
    public static function syncToDatabase(): void;
}
