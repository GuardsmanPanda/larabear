<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Service;

use Illuminate\Support\Facades\DB;

class LarabearDatabaseForeignKeyService {
    /**
     * @param string $connection
     * @param int $limit
     * @return array<array<string, mixed>>
     */
    public static function getSoftDeletedForeignKeyConstraints(string $connection, int $limit = 30): array {
        $dbInfo = LarabearDatabaseBaseInformation::getInstance(connectionName: $connection);
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
        $result = [];
        foreach ($foreign_keys as $foreign_key) {
            if (!in_array($foreign_key->foreign_table, $tables_with_soft_deletes, true)) {
                continue;
            }
            $where = in_array($foreign_key->table_name, $tables_with_soft_deletes, true) ? "AND t1.deleted_at IS NULL" : '';
            $res = DB::connection($connection)->select("
                SELECT
                    t1.$foreign_key->column_name as error_column
                FROM $foreign_key->table_name t1
                LEFT JOIN $foreign_key->foreign_table t2 ON t1.$foreign_key->column_name = t2.$foreign_key->foreign_key
                WHERE t2.deleted_at IS NOT NULL $where
                GROUP BY error_column
                ORDER BY error_column
                LIMIT $limit
            ");
            if (count($res) > 0) {
                $result[] = [
                    'table_name' => $foreign_key->table_name,
                    'column_name' => $foreign_key->column_name,
                    'foreign_table' => $foreign_key->foreign_table,
                    'foreign_key' => $foreign_key->foreign_key,
                    'errors' => $res
                ];
            }
        }
        return $result;
    }
}