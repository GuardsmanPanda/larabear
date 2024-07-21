<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Interface;

interface BearDatabaseBackedEnumInterface {
    public static function syncToDatabase(): void;
}
