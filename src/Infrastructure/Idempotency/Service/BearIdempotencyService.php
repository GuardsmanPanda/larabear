<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Idempotency\Service;


use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Idempotency\Crud\BearIdempotencyCreator;
use GuardsmanPanda\Larabear\Infrastructure\Idempotency\Model\BearIdempotency;

final class BearIdempotencyService {
    public function tryKey(string $idempotencyKey, CarbonInterface $expiresAt): bool {
        $old = BearIdempotency::find(id: $idempotencyKey);
        if ($old !== null && $old->expires_at > now()) {
            return false;
        }
        $old?->delete();
        BearIdempotencyCreator::create(idempotency_key: $idempotencyKey, expires_at: $expiresAt);
        return true;
    }
}
