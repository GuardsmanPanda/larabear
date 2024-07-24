<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Service;

use GuardsmanPanda\Larabear\Infrastructure\Database\Data\LarabearDatabaseColumnData;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use RuntimeException;

final class LarabearDatabasePostgresInformation extends LarabearDatabaseBaseInformation {
    private readonly string $databaseName;
    private readonly string $schemaName;

    public function __construct(private readonly string $connectionName) {
        $this->databaseName = Config::get(key: "database.connections.$connectionName.database");
        $schema = Config::get(key: "database.connections.$connectionName.schema");
        if ($schema === null) {
            $searchPath = DB::connection(name: $connectionName)->selectOne(query: "SHOW search_path");
            $schema = explode(separator: ',', string: $searchPath->search_path)[0];
        }
        $this->schemaName = $schema;
    }


    public function getAllTableNames(): array {
        $res = DB::connection(name: $this->connectionName)->select(query: "SELECT table_name FROM information_schema.tables WHERE table_type = 'BASE TABLE' AND table_catalog = ? AND table_schema = ?", bindings: [$this->databaseName, $this->schemaName]);
        return array_column(array: $res, column_key: 'table_name');
    }


    public function getColumnsForTable(string $tableName): array {
        $res = DB::connection(name: $this->connectionName)->select(query: "
            SELECT column_name, data_type, is_nullable = 'YES' AS is_nullable
            FROM information_schema.columns
            WHERE table_catalog = ? AND table_name = ?
            ORDER BY ordinal_position
        ", bindings: [$this->databaseName, $tableName]);
        $tmp = [];
        foreach ($res as $row) {
            $tmp[] = new LarabearDatabaseColumnData(
                columnName: $row->column_name,
                nativeDataType: $row->data_type,
                isNullable: $row->is_nullable,
                phpDataType: $this->databaseTypeToPhpType(databaseType: $row->data_type),
                sortOrder: $this->postgresTypeSortOrder($row->data_type) + ($row->is_nullable ? 1 : 0),
                requiredHeader: $this->postgresTypeToPhpHeader($row->data_type),
                eloquentCast: $this->postgresTypeToEloquentCast($row->column_name, $row->data_type)
            );
        }
        return $tmp;
    }

    public function getAllPrimaryKeys(): array {
        return DB::connection(name: $this->connectionName)->select(query: "
            SELECT
                kcu.table_name,
                kcu.column_name
            FROM information_schema.key_column_usage kcu
            LEFT JOIN information_schema.table_constraints tc ON kcu.constraint_name = tc.constraint_name
            WHERE kcu.table_catalog = ? AND kcu.table_schema = ? AND tc.constraint_type = 'PRIMARY KEY' AND tc.table_schema = ?
        ", bindings: [$this->databaseName, $this->schemaName, $this->schemaName]);
    }

    public function getAllForeignKeys(): array {
        return DB::connection(name: $this->connectionName)->select(query: "
            SELECT
                tc.table_name,
                tc.constraint_name,
                tc.constraint_type,
                kcu.column_name,
                ccu.table_name as foreign_table,
                ccu.column_name as foreign_key
            FROM information_schema.table_constraints tc
            JOIN information_schema.key_column_usage kcu ON kcu.constraint_name = tc.constraint_name
            JOIN information_schema.constraint_column_usage AS ccu ON ccu.constraint_name = tc.constraint_name
            WHERE tc.table_catalog = ? AND tc.table_schema = ? AND tc.constraint_type = 'FOREIGN KEY'
            ORDER BY REVERSE(kcu.column_name)
        ", bindings: [$this->databaseName, $this->schemaName]);
    }

    public function getDateFormat(): string {
        return 'Y-m-d\TH:i:sP';
    }


    public function databaseTypeToPhpType(string $databaseType): string {
        return match ($databaseType) {
            'date', 'timestamp with time zone' => 'CarbonInterface',
            'text', 'inet', 'cidr', 'uuid', 'USER-DEFINED' => 'string',
            'integer', 'bigint', 'smallint' => 'int',
            'double precision' => 'float',
            'jsonb' => 'ArrayObject',
            'boolean' => 'bool',
            default => throw new RuntimeException(message: "Unknown type: $databaseType")
        };
    }

    private function postgresTypeSortOrder(string $postgres_type): int {
        return match ($postgres_type) {
            'integer', 'bigint', 'smallint' => 0,
            'timestamp with time zone' => 12,
            'date', => 10,
            'text', 'inet', 'cidr', 'uuid', 'USER-DEFINED' => 6,
            'double precision' => 4,
            'jsonb' => 8,
            'boolean' => 2,
            default => throw new RuntimeException(message: "Unknown type: $postgres_type")
        };
    }

    private function postgresTypeToPhpHeader(string $postgres_type): string {
        return match ($postgres_type) {
            'jsonb' => 'use Illuminate\\Database\\Eloquent\\Casts\\ArrayObject;',
            'text', 'inet', 'cidr', 'uuid', 'integer', 'bigint', 'smallint', 'double precision', 'boolean', 'USER-DEFINED' => '',
            'date', 'timestamp with time zone' => 'use Carbon\\CarbonInterface;',
            default => throw new RuntimeException(message: "Unknown type: $postgres_type")
        };
    }

    private function postgresTypeToEloquentCast(string $name, string $postgres_type): string|null {
        if (str_starts_with($name, 'encrypted_')) {
            return "'encrypted'";
        }
        return match ($postgres_type) {
            'text', 'inet', 'cidr', 'uuid', 'integer', 'bigint', 'smallint', 'double precision', 'boolean', 'USER-DEFINED' => null,
            'timestamp with time zone' => "'immutable_datetime'",
            'jsonb' => "AsArrayObject::class",
            'date' => "'immutable_date'",
            default => throw new RuntimeException(message: "Unknown type: $postgres_type")
        };
    }
}
