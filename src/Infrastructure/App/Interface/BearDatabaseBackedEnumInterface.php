<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Interface;

use BackedEnum;

interface BearDatabaseBackedEnumInterface extends BackedEnum {
    public static function syncToDatabase(): void;
}
