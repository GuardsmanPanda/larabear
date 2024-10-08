<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Cast;

use GuardsmanPanda\Larabear\Infrastructure\App\DataType\BearPoint;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

/**
 * @implements CastsAttributes<BearPoint, BearPoint>
 */
final class BearDatabasePointCast implements CastsAttributes {
    /**
     * Transform a string representation of a postgres ARRAY into a php array.
     * @param array<string, mixed> $attributes
     * @return BearPoint
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): BearPoint {
        $data = pack('H*', $value);

        return new BearPoint(longitude: 0, latitude: 0);
    }

    /**
     * Transform the values in a php array into a string representation of a postgres ARRAY.
     * Throws an exception on duplicate values, or values that contain a comma.
     * @param BearPoint|null $value
     * @param array<string, mixed> $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): string {
        if ($value === null) {
            throw new InvalidArgumentException(message: 'Array cannot be null.');
        }

        return 'test';
    }
}
