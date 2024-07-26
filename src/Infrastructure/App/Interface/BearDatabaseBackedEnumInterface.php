<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Interface;

use BackedEnum;
use Illuminate\Database\Eloquent\Model;

interface BearDatabaseBackedEnumInterface extends BackedEnum {
    public function getModel(): Model;

    public static function syncToDatabase(): void;
}
