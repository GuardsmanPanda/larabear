<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Console\Service;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;
use Override;
use Throwable;

abstract class BearTransactionCommand extends Command {
    public final function handle(): void {
        try {
            DB::beginTransaction();
            $this->handleInTransaction();
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }

    abstract protected function handleInTransaction(): void;

    #[Override] public final function option($key = null): bool {
        if ($key === null) {
            throw new InvalidArgumentException(message: "Option key must not be null");
        }
        $parent = parent::option($key);
        if (!is_bool($parent)) {
            throw new InvalidArgumentException(message: "Option $key did not return a boolean");
        }
        return $parent;
    }
}
