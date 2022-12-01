<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Service;

use GuardsmanPanda\Larabear\Infrastructure\Database\Dto\LarabearDatabaseColumnDto;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class LarabearLarabearDatabaseMySqlInformation extends LarabearDatabaseBaseInformation {
    private readonly string $databaseName;

    public function __construct(private readonly string $connectionName) {
        $this->databaseName = Config::get(key: "database.connections.$connectionName.database");
    }

    public function getAllTableNames(): array {
        $res = DB::connection(name: $this->connectionName)->select(query: "SELECT table_name as table_name FROM information_schema.tables WHERE table_type = 'BASE TABLE' AND table_schema = ?", bindings: [$this->databaseName]);
        return array_column(array: $res, column_key: 'table_name');
    }

    public function getColumnsForTable(string $tableName): array {
        $res = DB::connection(name: $this->connectionName)->select(query: "
            SELECT column_name as column_name, data_type as data_type, is_nullable = 'YES' AS is_nullable
            FROM information_schema.columns
            WHERE table_schema = ? AND table_name = ?
            ORDER BY ordinal_position
        ", bindings: [$this->databaseName, $tableName]);
        $tmp = [];
        foreach ($res as $row) {
            $tmp[] = new LarabearDatabaseColumnDto(
                columnName: $row->column_name,
                nativeDataType: $row->data_type,
                isNullable: $row->is_nullable,
                phpDataType: $this->databaseTypeToPhpType(databaseType: $row->data_type),
                sortOrder: $this->mysqlTypeSortOrder($row->data_type) + ($row->is_nullable ? 1 : 0),
                requiredHeader: $this->mysqlTypeToPhpHeader($row->data_type),
                eloquentCast: $this->mysqlTypeToEloquentCast($row->column_name, $row->data_type)
            );
        }
        return $tmp;
    }

    public function getAllPrimaryKeys(): array {
        return DB::connection(name: $this->connectionName)->select(query: "
            SELECT
                kcu.table_name AS table_name,
                kcu.column_name AS column_name
            FROM information_schema.key_column_usage kcu
            LEFT JOIN information_schema.table_constraints tc ON kcu.table_name = tc.table_name AND kcu.constraint_schema = tc.table_schema
            WHERE kcu.table_schema = ? AND tc.constraint_type = 'PRIMARY KEY' AND kcu.constraint_name = 'PRIMARY'
        ", bindings: [$this->databaseName]);
    }

    public function getAllForeignKeys(): array {
        return DB::connection(name: $this->connectionName)->select(query: "
            SELECT
            	tc.table_name AS table_name,
            	tc.constraint_name AS constraint_name,
            	tc.constraint_type AS constraint_type,
            	kcu.column_name AS column_name,
                kcu.REFERENCED_TABLE_NAME AS foreign_table,
                kcu.REFERENCED_COLUMN_NAME AS foreign_key
            FROM information_schema.table_constraints tc
            JOIN information_schema.key_column_usage kcu
            USING(constraint_name,table_schema,table_name)
            WHERE tc.table_schema = ? AND tc.constraint_type = 'FOREIGN KEY'
            ORDER BY REVERSE(kcu.column_name)
        ", bindings: [$this->databaseName]);
    }

    public function getDateFormat(): string {
        return 'Y-m-d H:i:s';
    }


    public function databaseTypeToPhpType(string $databaseType): string {
        return match ($databaseType) {
            'date', 'datetime', 'timestamp' => 'CarbonInterface',
            'char', 'varchar', 'tinytext', 'text', 'mediumtext', 'longtext', 'enum' => 'string',
            'tinyint', 'smallint', 'mediumint', 'int', 'bigint' => 'int',
            'decimal', 'double' => 'float',
            'json' => 'ArrayObject',
            default => throw new RuntimeException(message: "Unknown type: $databaseType")
        };
    }


    private function mysqlTypeSortOrder(string $mysql_type): int {
        return match ($mysql_type) {
            'tinyint' => 0,
            'smallint', 'mediumint', 'int', 'bigint' => 2,
            'datetime', 'timestamp' => 12,
            'date', => 10,
            'char', 'varchar', 'tinytext', 'text', 'mediumtext', 'longtext', 'enum' => 6,
            'decimal', 'double' => 4,
            'json' => 8,
            default => throw new RuntimeException(message: "Unknown type: $mysql_type")
        };
    }


    private function mysqlTypeToPhpHeader(string $mysql_type): string {
        return match ($mysql_type) {
            'json' => 'use ArrayObject;',
            'char', 'varchar', 'tinytext', 'text', 'mediumtext', 'longtext', 'enum', 'tinyint', 'smallint', 'mediumint', 'int', 'bigint', 'decimal', 'double' => '',
            'date', 'datetime', 'timestamp' => 'use Carbon\\CarbonInterface;',
            default => throw new RuntimeException(message: "Unknown type: $mysql_type")
        };
    }


    private function mysqlTypeToEloquentCast(string $name, string $mysql_type): string|null {
        if (str_starts_with($name, 'encrypted_')) {
            return "'encrypted'";
        }
        return match ($mysql_type) {
            'char', 'varchar', 'tinytext', 'text', 'mediumtext', 'longtext', 'enum', 'tinyint', 'smallint', 'mediumint', 'int', 'bigint', 'decimal', 'double' => null,
            'datetime', 'timestamp' => "'immutable_datetime'",
            'json' => "AsArrayObject::class",
            'date' => "'immutable_date'",
            default => throw new RuntimeException(message: "Unknown type: $mysql_type")
        };
    }
}
