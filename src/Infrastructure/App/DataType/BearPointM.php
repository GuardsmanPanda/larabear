<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\DataType;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;

final readonly class BearPointM {
    public function __construct(public float $longitude, public float $latitude, public float $measurement) {
    }

    public static function fromRequest(): self {
        return new self(longitude: Req::getFloat(key: 'longitude'), latitude: Req::getFloat(key: 'latitude'), measurement: Req::getFloat(key: 'measurement'));
    }
}
