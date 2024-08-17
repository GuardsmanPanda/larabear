<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Cast;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

/**
 * @implements CastsAttributes<ArrayObject<int, string>, ArrayObject<int, string>>
 */
final class BearDatabaseArrayCast implements CastsAttributes {
    /**
     * Transform a string representation of a postgres ARRAY into a php array.
     * @param array<string, mixed> $attributes
     * @return ArrayObject<int, string>
     */
    public function get(Model $model, string $key, mixed $value, array $attributes) {
        $value = substr(string: $value, offset: 1, length: -1);
        $result = new ArrayObject();
        foreach (explode(separator: ',', string: $value) as $element) {
            $result[] = substr(string: $element, offset: 1, length: -1);
        }
        return $result;
    }

    /**
     * Transform the values in a php array into a string representation of a postgres ARRAY.
     * Throws an exception on duplicate values, or values that contain a comma.
     * @param ArrayObject<int, string>|null $value
     * @param array<string, mixed> $attributes
     * @return string
     */
    public function set(Model $model, string $key, mixed $value, array $attributes) {
        if ($value === null) {
            throw new InvalidArgumentException(message: 'Array cannot be null.');
        }
        $value->asort();
        $processed = [];
        foreach ($value as $element) {
            if (str_contains(haystack: $element, needle: ',')) {
                throw new InvalidArgumentException(message: 'Array elements cannot contain a comma.');
            }
            $element = "'$element'";
            if (in_array(needle: $element, haystack: $processed, strict: true)) {
                throw new InvalidArgumentException(message: 'Array elements cannot be duplicated.');
            }
            $processed[] = $element;
        }
        return '{' . implode(separator: ',', array: $processed) . '}';
    }
}
