<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Command;

use GuardsmanPanda\Larabear\Infrastructure\Console\Service\ConsoleService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\DatabaseForeignKeyService;
use Illuminate\Console\Command;

class BearCheckForeignKeysOnSoftDeletesCommand extends Command {
    protected $signature = 'bear:cfk';
    protected $description = 'Check Foreign Keys Against Soft Deletes.';

    public function handle(): void {
        $defaultConnection = config(key: 'database.default');
        ConsoleService::printH1(headline: "Checking [$defaultConnection] Foreign Keys Against Soft Deletes");
        $res = DatabaseForeignKeyService::getSoftDeletedForeignKeyConstraints(connection: $defaultConnection);
        foreach ($res as $table) {
            ConsoleService::printH2(headline: "Table: {$table['table_name']}  -->  {$table['foreign_table']} [{$table['foreign_key']}]");
            $amount = count($table['errors']);
            ConsoleService::writeLine("  <bg=green;fg=bright-green;options=bold> $amount </>" . " Column: {$table['column_name']}");
            foreach ($table['errors'] as $error) {
                ConsoleService::writeLine("    $error->error_column");
            }
        }
        $tableAmount = count($res);
        if ($tableAmount > 0) {
            ConsoleService::writeLine("");
            ConsoleService::writeLine(" <bg=bright-yellow;fg=black;options=bold>  $tableAmount  </> Tables With Soft Deleted Foreign Key Errors");
            ConsoleService::writeLine("");
        }
    }
}
