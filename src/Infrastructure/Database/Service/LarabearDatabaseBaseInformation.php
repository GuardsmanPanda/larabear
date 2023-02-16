<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Service;

use GuardsmanPanda\Larabear\Infrastructure\Database\Data\LarabearDatabaseColumnData;
use Illuminate\Support\Facades\Config;
use RuntimeException;
use stdClass;

abstract class LarabearDatabaseBaseInformation {
    final public static function getInstance(string $connectionName): LarabearDatabaseBaseInformation {
        return match (Config::get(key: "database.connections.$connectionName.driver")) {
            'pgsql' => new LarabearDatabasePostgresInformation(connectionName: $connectionName),
            'mysql' => new LarabearDatabaseMySqlInformation(connectionName: $connectionName),
            default => throw new RuntimeException(message: 'Unsupported database driver for: ' . $connectionName)
        };
    }

    /**
     * @return array<string>
     */
    abstract public function getAllTableNames(): array;

    /**
     * @param string $tableName
     * @return array<LarabearDatabaseColumnData>
     */
    abstract public function getColumnsForTable(string $tableName): array;

    /**
     * @return array<stdClass>
     */
    abstract public function getAllPrimaryKeys(): array;

    /**
     * @return array<stdClass>
     */
    abstract public function getAllForeignKeys(): array;
    abstract public function getDateFormat(): string;
    abstract public function databaseTypeToPhpType(string $databaseType): string;
}
