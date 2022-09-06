<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Service;

use Illuminate\Support\Facades\Config;
use RuntimeException;

abstract class DatabaseBaseInformation {
    public static function getInstance(string $connectionName): DatabaseBaseInformation {
        return match (Config::get(key: "database.connections.$connectionName.driver")) {
            'pgsql' => new DatabasePostgresInformation($connectionName),
            default => throw new RuntimeException(message: 'Unsupported database driver for: ' . $connectionName)
        };
    }

    abstract public function getAllTableNames(): array;
    abstract public function getColumnsForTable(string $tableName): array;
    abstract public function getAllPrimaryKeys(): array;
    abstract public function getAllForeignKeys(): array;

    abstract public function getDateFormat(): string;
    abstract public function databaseTypeToPhpType(string $databaseType): string;
}
