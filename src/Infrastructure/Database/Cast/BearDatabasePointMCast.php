<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Cast;

use GuardsmanPanda\Larabear\Infrastructure\App\DataType\BearPointM;
use GuardsmanPanda\Larabear\Infrastructure\App\Parser\BearBinaryStringBuilder;
use GuardsmanPanda\Larabear\Infrastructure\App\Parser\BearBinaryStringParser;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

/**
 * @implements CastsAttributes<BearPointM, BearPointM>
 */
final class BearDatabasePointMCast implements CastsAttributes {
    const int GEO_TYPE_POINT = 1073741825;

    public function get(Model $model, string $key, mixed $value, array $attributes): BearPointM|null {
        if ($value === null) {
            return null;
        }
        $parser = BearBinaryStringParser::fromHexEWKBString(hexString: $value);
        $geoTypeId = $parser->getInt32();
        if ($geoTypeId !== self::GEO_TYPE_POINT) {
            throw new InvalidArgumentException(message: 'GeoType is not a point.');
        }
        $srid = $parser->getInt32(); // srid, we know it is 4326
        return new BearPointM(longitude: $parser->getDouble(), latitude: $parser->getDouble(), measurement: $parser->getDouble(), srid: $srid);
    }

    /**
     * Transform the values in a php array into a string representation of a postgres ARRAY.
     * Throws an exception on duplicate values, or values that contain a comma.
     * @param BearPointM|null $value
     * @param array<string, mixed> $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): string|null {
        if ($value === null) {
            return null;
        }
        return BearBinaryStringBuilder::builder()
            ->appendByte(byte: 1)
            ->appendInt32(int32: self::GEO_TYPE_POINT)
            ->appendInt32(int32: $value->srid)
            ->appendDouble(double: $value->longitude)
            ->appendDouble(double: $value->latitude)
            ->appendDouble(double: $value->measurement)
            ->getStringAsUpperHex();
    }
}
