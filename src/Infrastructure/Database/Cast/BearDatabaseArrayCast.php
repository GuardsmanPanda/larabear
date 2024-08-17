<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Cast;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

/**
 * @implements CastsAttributes<string, array>
 */
final class BearDatabaseArrayCast implements CastsAttributes {
    public function get(Model $model, string $key, mixed $value, array $attributes) {
        // TODO: Implement get() method.
    }

    public function set(Model $model, string $key, mixed $value, array $attributes) {
        // TODO: Implement set() method.
    }
}
