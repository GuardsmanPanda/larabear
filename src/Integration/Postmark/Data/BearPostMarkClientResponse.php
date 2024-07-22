<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\Postmark\Data;

final readonly class BearPostMarkClientResponse {
    public function __construct(public string $message, public int $code, public string|null $messageId = null) {}
}
