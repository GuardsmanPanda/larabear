<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\DataType;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;

final readonly class BearPoint {
    public function __construct(public float $longitude, public float $latitude, public int $srid = 4326) {
    }

    public static function fromRequest(): self {
        return new self(longitude: Req::getFloat(key: 'longitude'), latitude: Req::getFloat(key: 'latitude'));
    }

    public function __toString(): string {
        return sprintf('POINT(%F %F)', $this->longitude, $this->latitude);
    }
}
