<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Idempotency\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Idempotency\Model\BearIdempotency;

final class BearIdempotencyDeleter {
    public static function delete(BearIdempotency $model): void {
        $model->delete();
    }

    public static function deleteFromId(string $id): void {
        self::delete(model: BearIdempotency::findOrFail(id: $id));
    }
}
