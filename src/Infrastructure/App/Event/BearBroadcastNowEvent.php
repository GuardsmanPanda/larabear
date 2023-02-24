<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Event;

use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

final class BearBroadcastNowEvent implements ShouldBroadcastNow {
    public function __construct(
        private readonly string $channel,
        private readonly string $event,
        private readonly array $payload,
        public bool $afterCommit = true
    ) {}

    public function broadcastOn(): string {
        return $this->channel;
    }

    public function broadcastAs(): string {
        return $this->event;
    }

    public function broadcastWith(): array {
        return $this->payload;
    }
}
