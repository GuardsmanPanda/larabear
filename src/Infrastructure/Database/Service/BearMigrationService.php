<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Service;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class BearMigrationService {
    public static function buildUserReferencingColumn(Blueprint $table, string $columnName, bool $nullable = true): void {
        $config = Config::get(key: 'bear.user_table');
        if ($config === null) {
            throw new RuntimeException(message: 'bear.user_table is not configured, run "php artisan bear" to fix this problem.');
        }
        if ($config['primary_key_type'] === 'uuid') {
            $column = $table->uuid(column: $columnName);
        } else if ($config['primary_key_type'] === 'biginteger') {
            $column = $table->bigInteger(column: $columnName)->unsigned();
        } else if ($config['primary_key_type'] === 'integer') {
            $column = $table->integer(column: $columnName)->unsigned();
        } else {
            $column = $table->text(column: $columnName);
        }
        if ($nullable) {
            $column->nullable();
        }
        $column->index();
        $table->foreign($columnName)->references($config['primary_key_column'])->on($config['table_name']);
    }
}
