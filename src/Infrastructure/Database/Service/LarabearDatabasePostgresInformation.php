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
            SELECT 
                column_name, data_type, udt_name,
                is_nullable = 'YES' AS is_nullable
            FROM information_schema.columns
            WHERE table_catalog = ? AND table_name = ?
            ORDER BY ordinal_position
        ", bindings: [$this->databaseName, $tableName]);
        $tmp = [];
        foreach ($res as $row) {
            $postgis_type = null;
            if ($row->data_type === 'USER-DEFINED' && $row->udt_name === 'geography') {
                $column = DB::connection(name: $this->connectionName)->selectOne(query: "
                SELECT type, srid
                FROM public.geography_columns
                WHERE f_table_catalog = ? AND f_table_schema = ? AND f_table_name = ? AND f_geography_column = ?
            ", bindings: [$this->databaseName, $this->schemaName, $tableName, $row->column_name]);
                if ($column->srid !== 4326) {
                    throw new RuntimeException(message: "Unsupported SRID: $column->srid for table: $tableName, row: $row->column_name");
                }
                $postgis_type = $column->type;
            }
            $tmp[] = new LarabearDatabaseColumnData(
                columnName: $row->column_name,
                nativeDataType: $row->data_type,
                isNullable: $row->is_nullable,
                phpDataType: $this->postgresTypeToPhpType(postgres_type: $postgis_type ?? $row->data_type, udt_name: $row->udt_name),
                sortOrder: $this->postgresTypeSortOrder(postgres_type: $postgis_type ?? $row->data_type, is_nullable: $row->is_nullable),
                requiredHeaders: $this->postgresTypeToPhpHeaders(postgres_type: $postgis_type ?? $row->data_type),
                eloquentCast: $this->postgresTypeToEloquentCast($row->column_name, postgres_type: $postgis_type ?? $row->data_type)
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


    private function postgresTypeToPhpType(string $postgres_type, string $udt_name): string {
        if ($postgres_type === 'ARRAY') {
            return match ($udt_name) {
                '_text' => 'ArrayObject<int, string>',
                default => throw new RuntimeException(message: "Unsupported array type: $udt_name")
            };
        }
        return match ($postgres_type) {
            'integer', 'bigint', 'smallint' => 'int',
            'boolean' => 'bool',
            'double precision' => 'float',
            'jsonb' => 'ArrayObject',
            'Point' => 'BearPoint',
            'PointM' => 'BearPointM',
            'text', 'inet', 'cidr', 'uuid', 'Polygon' => 'string',
            'date', 'timestamp with time zone' => 'CarbonInterface',
            default => throw new RuntimeException(message: "Unknown type: $postgres_type")
        };
    }


    private function postgresTypeSortOrder(string $postgres_type, bool $is_nullable): int {
        return match ($postgres_type) {
                'integer', 'bigint', 'smallint' => 0,
                'boolean' => 2,
                'double precision' => 4,
                'text', 'inet', 'cidr', 'uuid', 'Polygon' => 6,
                'Point', 'PointM'  => 8,
                'jsonb' => 10,
                'ARRAY' => 12,
                'date', => 14,
                'timestamp with time zone' => 16,
                default => throw new RuntimeException(message: "Unknown type: $postgres_type")
            } + ($is_nullable ? 1 : 0);
    }

    /**
     * @return array<string>
     */
    private function postgresTypeToPhpHeaders(string $postgres_type): array {
        return match ($postgres_type) {
            'text', 'inet', 'cidr', 'uuid', 'integer', 'bigint', 'smallint', 'double precision', 'boolean', 'Polygon' => [],
            'jsonb' => [
                'use Illuminate\\Database\\Eloquent\\Casts\\ArrayObject;',
                'use Illuminate\\Database\\Eloquent\\Casts\\AsArrayObject;',
            ],
            'date', 'timestamp with time zone' => [
                'use Carbon\\CarbonInterface;'
            ],
            'ARRAY' => [
                'use GuardsmanPanda\\Larabear\\Infrastructure\\Database\\Cast\\BearDatabaseTextArrayCast;',
                'use Illuminate\\Database\\Eloquent\\Casts\\ArrayObject;',
            ],
            'Point' => [
                'use GuardsmanPanda\\Larabear\\Infrastructure\\Database\\Cast\\BearDatabasePointCast;',
                'use GuardsmanPanda\\Larabear\\Infrastructure\\App\\DataType\\BearPoint;',
            ],
            'PointM' => [
                'use GuardsmanPanda\\Larabear\\Infrastructure\\Database\\Cast\\BearDatabasePointMCast;',
                'use GuardsmanPanda\\Larabear\\Infrastructure\\App\\DataType\\BearPointM;',
            ],
            default => throw new RuntimeException(message: "Unknown type: $postgres_type")
        };
    }

    private function postgresTypeToEloquentCast(string $column_name, string $postgres_type): string|null {
        if (str_starts_with($column_name, 'encrypted_')) {
            return "'encrypted'";
        }
        return match ($postgres_type) {
            'text', 'inet', 'cidr', 'uuid', 'integer', 'bigint', 'smallint', 'double precision', 'boolean', 'Polygon' => null,
            'timestamp with time zone' => "'immutable_datetime'",
            'ARRAY' => "BearDatabaseTextArrayCast::class",
            'jsonb' => "AsArrayObject::class",
            'date' => "'immutable_date'",
            'Point' => "BearDatabasePointCast::class",
            'PointM' => "BearDatabasePointMCast::class",
            default => throw new RuntimeException(message: "Unknown type: $postgres_type")
        };
    }
}
