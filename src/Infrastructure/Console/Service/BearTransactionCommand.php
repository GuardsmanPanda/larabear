<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Console\Service;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
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
}
