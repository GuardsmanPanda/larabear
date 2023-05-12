<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\Twilio\Data;

final class BearTwilioSmsResponse {
    public function __construct(public readonly string $error_message, public readonly int $code = -1, public readonly string|null $sid = null) {}
}
