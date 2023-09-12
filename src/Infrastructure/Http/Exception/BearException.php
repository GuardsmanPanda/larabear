<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Exception;

use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\JsonResponse;

class BearException extends HttpResponseException {
    /**
     * @param string $title
     * @param string $detail
     * @param string $type
     * @param string $instance
     * @param int $status
     * @param array<string, mixed> $additionalData
     */
    public function __construct(string $title, string $detail, string $type = 'about:blank', string $instance = '', int $status = 500, array $additionalData = []) {
        parent::__construct(new JsonResponse(
            data: $additionalData + ['type' => $type, 'instance' => $instance, 'title' => $title, 'detail' => $detail],
            status: $status,
            headers: ['Content-Type' => 'application/problem+json'],
        ));
    }
}
