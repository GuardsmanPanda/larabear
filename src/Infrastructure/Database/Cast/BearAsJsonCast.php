<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Cast;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use stdClass;

class BearAsJsonCast implements CastsAttributes {
    public function get($model, string $key, mixed $value, array$attributes): stdClass|null|array {
        return $value === null ? new stdClass() : json_decode($value, false, 512, JSON_THROW_ON_ERROR);
    }

    public function set($model, string $key, mixed $value, array $attributes): string {
        return json_encode($value, JSON_THROW_ON_ERROR);
    }
}
