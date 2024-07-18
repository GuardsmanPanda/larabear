<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Idempotency\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Idempotency\Model\BearIdempotency;

final class BearIdempotencyCreator {
    public static function create(
        string $idempotency_key,
        CarbonInterface $expires_at = null
    ): BearIdempotency {
        $model = new BearIdempotency();

        $model->idempotency_key = $idempotency_key;
        $model->expires_at = $expires_at;

        $model->save();
        return $model;
    }
}
