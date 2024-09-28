<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Event\BearBroadcastNowEvent;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\DB;
use RuntimeException;
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
            $event =  new BearBroadcastNowEvent(channel: $channel, event: $event, payload: $data);
            Broadcast::event($event);
        } catch (Throwable $t) {
            BearErrorCreator::create(
                message: "Broadcast Error [{$t->getMessage()}]",
                slug: 'larabear::broadcast-now-error',
                severity: BearSeverityEnum::ERROR, exception: $t
            );
        }
    }

    /**
     * @param string $channel
     * @param string $event
     * @param array<string, mixed> $data
     * @return void
     */
    public static function broadcastAfterCommit(string $channel, string $event = 'default', array $data = []): void {
        if (DB::transactionLevel() === 0) {
            throw new RuntimeException(message: 'Cannot broadcast after commit outside of a transaction');
        }
        DB::afterCommit(function () use ($channel, $event, $data) {
            self::broadcastNow($channel, $event, $data);
        });
    }
}
