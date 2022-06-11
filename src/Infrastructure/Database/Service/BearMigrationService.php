<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Service;

use Illuminate\Database\Schema\Blueprint;

class BearMigrationService {
    public static function buildUserReferencingColumn(Blueprint $table, string $columnName, string $userTableName = 'users', string $userTableColumnName = 'id', string $columnType = 'uuid', bool $nullable = true): void {
        if ($columnType === 'uuid') {
            $column = $table->uuid(column: $columnName);
        } else if ($columnType === 'biginteger') {
            $column = $table->bigInteger(column: $columnName)->unsigned();
        } else if ($columnType === 'integer') {
            $column = $table->integer(column: $columnName)->unsigned();
        } else {
            $column = $table->text(column: $columnName);
        }
        if ($nullable) {
            $column->nullable();
        }
        $table->foreign($columnName)->references($userTableColumnName)->on($userTableName);
    }
}
