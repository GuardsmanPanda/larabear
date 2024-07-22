<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\Twilio\Data;

final readonly class BearTwilioSmsResponse {
    public function __construct(public string $error_message, public int $code = -1, public string|null $sid = null) {}
}
