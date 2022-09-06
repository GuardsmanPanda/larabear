<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Command;

use GuardsmanPanda\Larabear\Infrastructure\Console\Service\ConsoleService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\DatabaseBaseInformation;
use Illuminate\Console\Command;

class BearCheckForeignKeysOnSoftDeletesCommand extends Command {
    protected $signature = 'bear:cfk';
    protected $description = 'Check Foreign Keys Against Soft Deletes.';

    public function handle(): void {
        $defaultConnection = config(key: 'database.default');
        ConsoleService::printH1(headline: "Checking [$defaultConnection] Foreign Keys Against Soft Deletes");
        $dbInfo = DatabaseBaseInformation::getInstance(connectionName: $defaultConnection);
        $table_names = $dbInfo->getAllTableNames();
        $tables_with_soft_deletes = [];

        foreach ($table_names as $table_name) {
            $columns = $dbInfo->getColumnsForTable(tableName: $table_name);
            foreach ($columns as $column) {
                if ($column->columnName === 'deleted_at') {
                    $tables_with_soft_deletes[] = $table_name;
                }
            }
        }

        $foreign_keys = $dbInfo->getAllForeignKeys();
        dd($tables_with_soft_deletes, $foreign_keys);
    }
}
