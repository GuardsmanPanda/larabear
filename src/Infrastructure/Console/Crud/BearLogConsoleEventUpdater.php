<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Console\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Console\Model\BearLogConsoleEvent;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use RuntimeException;

class BearLogConsoleEventUpdater {
    public function __construct(private readonly BearLogConsoleEvent $model) {
        BearDBService::mustBeInTransaction();
        if (!Req::isWriteRequest()) {
            throw new RuntimeException(message: 'Database write operations should not be performed in read-only [GET, HEAD, OPTIONS] requests.');
        }
    }

    public static function fromConsoleEventId(string $consoleEventId): BearLogConsoleEventUpdater {
        return new BearLogConsoleEventUpdater(
            model:BearLogConsoleEvent::where('console_event_id', $consoleEventId)->sole()
        );
    }

    public function setConsoleEventFinishedAt(CarbonInterface|null $console_event_finished_at): void {
        $this->model->console_event_finished_at = $console_event_finished_at;
    }

    public function setConsoleEventFailedAt(CarbonInterface|null $console_event_failed_at): void {
        $this->model->console_event_failed_at = $console_event_failed_at;
    }

    public function setExecutionTimeMicroseconds(int|null $execution_time_microseconds): void {
        $this->model->execution_time_microseconds = $execution_time_microseconds;
    }

    public function setConsoleEventOutput(string|null $console_event_output): void {
        $this->model->console_event_output = $console_event_output;
    }

    public function save(): BearLogConsoleEvent {
        $this->model->save();
        return $this->model;
    }
}
