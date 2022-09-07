<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Command;

use GuardsmanPanda\Larabear\Infrastructure\Console\Service\ConsoleService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\DatabaseBaseInformation;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

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
        ConsoleService::printH2(headline: "Checking " . count($foreign_keys) . " Foreign Keys");
        foreach ($foreign_keys as $foreign_key) {
            if (!in_array($foreign_key->foreign_table, $tables_with_soft_deletes, true)) {
                continue;
            }
            $where = in_array($foreign_key->table_name, $tables_with_soft_deletes, true) ? "AND t1.deleted_at IS NULL" : '';
            $res = DB::connection($defaultConnection)->select("
                SELECT
                    * 
                FROM $foreign_key->table_name t1
                LEFT JOIN $foreign_key->foreign_table t2 ON t1.$foreign_key->column_name = t2.$foreign_key->foreign_key
                WHERE t2.deleted_at IS NOT NULL $where
                LIMIT 100
            ");
            $this->info(count($res) . " rows found in $foreign_key->table_name with a foreign key to $foreign_key->foreign_table that has been soft deleted");
        }
    }
}
