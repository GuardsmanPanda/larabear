<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Event;

use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

final readonly class BearBroadcastNowEvent implements ShouldBroadcastNow {
    /**
     * @param string $channel
     * @param string $event
     * @param array<string, mixed> $payload
     */
    public function __construct(
        private string $channel,
        private string $event,
        private array  $payload
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
