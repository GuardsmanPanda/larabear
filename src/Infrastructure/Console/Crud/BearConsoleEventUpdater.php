<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Console\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\Console\Model\BearConsoleEvent;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;

final readonly class BearConsoleEventUpdater {
    public function __construct(private BearConsoleEvent $model) {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['CLI']);
    }

    public static function fromConsoleEventId(string $consoleEventId): BearConsoleEventUpdater {
        return new BearConsoleEventUpdater(model: BearConsoleEvent::where(column: 'console_id', operator: '=', value: $consoleEventId)->sole());
    }

    public function setCommand(string $command): self {
        $this->model->command = $command;
        return $this;
    }

    public function setStartedAt(CarbonInterface $started_at): self {
        if ($started_at->toIso8601String() === $this->model->started_at->toIso8601String()) {
            return $this;
        }
        $this->model->started_at = $started_at;
        return $this;
    }

    public function setConsoleId(string $console_id): self {
        $this->model->console_id = $console_id;
        return $this;
    }

    public function setCronScheduleExpression(string|null $cron_schedule_expression): self {
        $this->model->cron_schedule_expression = $cron_schedule_expression;
        return $this;
    }

    public function setCronScheduleTimezone(string|null $cron_schedule_timezone): self {
        $this->model->cron_schedule_timezone = $cron_schedule_timezone;
        return $this;
    }

    public function setFinishedAt(CarbonInterface|null $finished_at): self {
        if ($finished_at?->toIso8601String() === $this->model->finished_at?->toIso8601String()) {
            return $this;
        }
        $this->model->finished_at = $finished_at;
        return $this;
    }

    public function setFailedAt(CarbonInterface|null $failed_at): self {
        if ($failed_at?->toIso8601String() === $this->model->failed_at?->toIso8601String()) {
            return $this;
        }
        $this->model->failed_at = $failed_at;
        return $this;
    }

    public function setExecutionTimeMicroseconds(int|null $execution_time_microseconds): self {
        $this->model->execution_time_microseconds = $execution_time_microseconds;
        return $this;
    }

    public function setOutput(string|null $output): self {
        $this->model->output = $output === null || trim($output) === '' ? null : $output;
        return $this;
    }

    public function update(): BearConsoleEvent {
        $this->model->save();
        return $this->model;
    }
}
