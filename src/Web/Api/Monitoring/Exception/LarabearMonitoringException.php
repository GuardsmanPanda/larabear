<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Api\Monitoring\Exception;

use GuardsmanPanda\Larabear\Infrastructure\Http\Exception\BearException;

final class LarabearMonitoringException extends BearException {
    public function __construct(string $detail) {
        parent::__construct(title: 'Monitoring Exception', detail: $detail, type: 'monitoring-exception');
    }
}
