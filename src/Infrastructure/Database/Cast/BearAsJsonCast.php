<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Cast;

use ArrayObject;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use stdClass;

class BearAsJsonCast implements CastsAttributes {
    public function get($model, string $key, mixed $value, array$attributes): stdClass|ArrayObject {
        if ($value === null) {
            return new stdClass();
        }
        $decodedJson = json_decode(json: $value, associative: false, depth: 256, flags: JSON_THROW_ON_ERROR);
        if (is_array($decodedJson)) {
            return new ArrayObject($decodedJson);
        }

        return $decodedJson;
    }

    public function set($model, string $key, mixed $value, array $attributes): string {
        return json_encode(value: $value, flags: JSON_THROW_ON_ERROR);
    }
}
