<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Event;

use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

final class BearBroadcastNowEvent implements ShouldBroadcastNow {
    /**
     * @param string $channel
     * @param string $event
     * @param array<string, mixed> $payload
     * @param bool $afterCommit
     */
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

    /**
     * @return array<string, mixed>
     */
    public function broadcastWith(): array {
        return $this->payload;
    }
}
