<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Interface;

interface DatabaseBackedEnumInterface {
    public function getEnum(): string;
    public function existsInDatabase(): bool;
    public static function syncToDatabase(): self;
}
