<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\Postmark\Data;

final class BearPostMarkClientResponse {
    public function __construct(public readonly string $message, public readonly int $code, public readonly string|null $messageId = null) {}
}
