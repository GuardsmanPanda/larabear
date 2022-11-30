<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Service;

use GuardsmanPanda\Larabear\Infrastructure\Database\Dto\LarabearDatabaseColumnDto;
use Illuminate\Support\Facades\Config;
use RuntimeException;

abstract class LarabearDatabaseBaseInformation {
    public static function getInstance(string $connectionName): LarabearDatabaseBaseInformation {
        return match (Config::get(key: "database.connections.$connectionName.driver")) {
            'pgsql' => new LarabearLarabearDatabasePostgresInformation($connectionName),
            'mysql' => new LarabearLarabearDatabaseMySqlInformation($connectionName),
            default => throw new RuntimeException(message: 'Unsupported database driver for: ' . $connectionName)
        };
    }

    /**
     * @return array<string>
     */
    abstract public function getAllTableNames(): array;

    /**
     * @param string $tableName
     * @return array<LarabearDatabaseColumnDto>
     */
    abstract public function getColumnsForTable(string $tableName): array;
    abstract public function getAllPrimaryKeys(): array;
    abstract public function getAllForeignKeys(): array;
    abstract public function getDateFormat(): string;
    abstract public function databaseTypeToPhpType(string $databaseType): string;
}
