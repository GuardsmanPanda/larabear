<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use Illuminate\Support\Facades\Broadcast;
use Throwable;

final class BearBroadcastService {
    /**
     * @param string $channel
     * @param string $event
     * @param array<string, mixed> $data
     * @return void
     */
    public static function broadcastNow(string $channel, string $event = 'default', array $data = []): void {
        try {
            Broadcast::broadcast(channels: [$channel], event: $event, payload: $data);
        } catch (Throwable $t) {
            BearErrorCreator::create(
                message: "Broadcast Error [{$t->getMessage()}]",
                namespace: 'larabear', key: 'broadcast-now-error',
                severity: BearSeverityEnum::MEDIUM, exception: $t
            );
        }
    }
}
