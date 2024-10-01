<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Cast;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
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
    public function get(Model $model, string $key, mixed $value, array $attributes): ArrayObject {
        $value = substr(string: $value, offset: 1, length: -1);
        $result = new ArrayObject();
        if ($value === '') {
            return $result;
        }
        foreach (explode(separator: ',', string: $value) as $element) {
            $result[] = str_starts_with($element, '"') ? substr(string: $element, offset: 1, length: -1) : $element;
        }
        return $result;
    }

    /**
     * Transform the values in a php array into a string representation of a postgres ARRAY.
     * Throws an exception on duplicate values, or values that contain a comma.
     * @param ArrayObject<int, string>|null $value
     * @param array<string, mixed> $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): string {
        if ($value === null) {
            throw new InvalidArgumentException(message: 'Array cannot be null.');
        }
        return BearDatabaseService::iterableToPostgres(values: $value);
    }
}
