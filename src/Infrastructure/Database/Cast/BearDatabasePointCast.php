<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Cast;

use GuardsmanPanda\Larabear\Infrastructure\App\DataType\BearPoint;
use GuardsmanPanda\Larabear\Infrastructure\App\Parser\BearBinaryStringParser;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

/**
 * @implements CastsAttributes<BearPoint, BearPoint>
 */
final class BearDatabasePointCast implements CastsAttributes {
    public function get(Model $model, string $key, mixed $value, array $attributes): BearPoint {
        $parser = BearBinaryStringParser::fromHexEWKBString(hexString: $value);
        $geoTypeId = $parser->getInt32();
        if ($geoTypeId !== 536870913) {
            throw new InvalidArgumentException(message: 'GeoType is not a point.');
        }
        $parser->getInt32(); // srid, we know it is 4326
        return new BearPoint(longitude: $parser->getDouble(), latitude: $parser->getDouble());
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
        dd($value);
        return 'test';
    }
}
