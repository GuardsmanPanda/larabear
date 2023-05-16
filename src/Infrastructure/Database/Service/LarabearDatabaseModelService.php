<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Service;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearRegexService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Data\LarabearDatabaseModelData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use RuntimeException;

final class LarabearDatabaseModelService {
    /**
     * @param string $connectionName
     * @param array<string, array<string, mixed>> $tableConfig
     * @return array<string, LarabearDatabaseModelData>
     */
    public static function buildAll(string $connectionName, array $tableConfig): array {
        $dbInfo = LarabearDatabaseBaseInformation::getInstance(connectionName: $connectionName);
        $table_names = $dbInfo->getAllTableNames();
        self::checkNoDefinedTablesMissingFromDB(tableConfig: $tableConfig, dbTables: $table_names);

        $models = [];
        foreach ($table_names as $table_name) {
            if (!array_key_exists(key: $table_name, array: $tableConfig)) {
                continue; //skip tables not in the config
            }
            $info = $tableConfig[$table_name];
            $traits = $info['traits'] ?? [];
            if (array_key_exists(key: 'log_change', array: $info) && is_bool($info['log_change']) && $info['log_change']) {
                $traits[] = 'GuardsmanPanda\Larabear\Infrastructure\Database\Traits\BearLogDatabaseChanges';
            }
            $dto = new LarabearDatabaseModelData(
                connectionName: $connectionName,
                connectionDriver: Config::get(key: "database.connections.$connectionName.driver"),
                tableName: $table_name,
                modelClassName: $info['class'] ?? Str::studly($table_name),
                modelLocation: $info['location'],
                dateFormat: $dbInfo->getDateFormat(),
                modelTraits: $traits,
                logExcludeColumns: $info['log_exclude_columns'] ?? [],
            );

            $columns = $dbInfo->getColumnsForTable(tableName: $table_name);
            foreach ($columns as $column) {
                if (array_key_exists(key: 'data_type_cast', array: $info) && array_key_exists(key: $column->nativeDataType, array: $info['data_type_cast'])) {
                    $cast = $info['data_type_cast'][$column->nativeDataType];
                    $column->requiredHeader = "use $cast;";
                    $column->eloquentCast = BearRegexService::extractFirst(regex: '~.*\\\\([^\\\\]+)$~', subject: $cast) . '::class';
                }
                $dto->addColumn($column);
            }
            $models[$table_name] = $dto;
        }

        foreach ($dbInfo->getAllPrimaryKeys() as $constraint) {
            if (!array_key_exists($constraint->table_name, $models)) {
                continue;
            }
            $dto = $models[$constraint->table_name];
            $dto->setPrimaryKeyInformation(primaryKeyColumnName: $constraint->column_name, primaryKeyType: $dto->getColumns()[$constraint->column_name]->phpDataType);
        }

        foreach ($dbInfo->getAllForeignKeys() as $constraint) {
            if (!array_key_exists(key: $constraint->table_name, array: $models)) {
                continue;
            }
            $dto = $models[$constraint->table_name];
            if (str_starts_with(haystack: $constraint->foreign_table, needle: 'bear_')) {
                $dto->setForeignKeyInformation(
                    columnName: $constraint->column_name,
                    foreignColumnName: $constraint->foreign_key,
                    foreignModelName: Str::studly(value: $constraint->foreign_table),
                    foreignNamespace: self::getBearTableNameSpace($constraint->foreign_table)
                );
                continue;
            }
            if (!array_key_exists(key: $constraint->foreign_table, array: $models)) {
                continue;
            }
            $other = $models[$constraint->foreign_table];
            $dto->setForeignKeyInformation(columnName: $constraint->column_name, foreignColumnName: $constraint->foreign_key, foreignModelName: $other->getModelClassName(), foreignNamespace: $other->getNameSpace());
        }

        return $models;
    }

    /**
     * @param array<string, array<string, mixed>> $tableConfig
     * @param array<string> $dbTables
     */
    private static function checkNoDefinedTablesMissingFromDB(array $tableConfig, array $dbTables): void {
        foreach ($tableConfig as $table_name => $table_config) {
            if (!in_array(needle: $table_name, haystack: $dbTables, strict: true)) {
                throw new RuntimeException(message: "Table [$table_name]not found in database, but is defined in config/bear.php => [eloquent-model-generator]");
            }
        }
    }


    public static function extractAuditColumns(Model $model): string {
        $ignore_columns = property_exists(object_or_class: $model, property: 'log_exclude_columns') ? $model->log_exclude_columns : [];
        $arr = $model->toArray();
        foreach ($arr as $key => $value) {
            if (str_starts_with($key, 'encrypted_')) {
                $arr[$key] = 'HIDDEN';
            }
            if (in_array($key, $ignore_columns, true)) {
                unset($arr[$key]);
            }
        }
        return json_encode($arr, JSON_THROW_ON_ERROR);
    }

    /**
     * @param Model $model
     * @return array{int|null, string|null, mixed}
     */
    public static function extractPrimaryKeyArray(Model $model): array {
        $primary_key_value = $model->getKey();
        $res = [null, null, null];
        // Test the key to find out what type it is.
        if (is_int($primary_key_value)) {
            $res[0] = $primary_key_value;
        } else if (is_string($primary_key_value) && BearRegexService::isMatch(regex: '/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/i', string: $primary_key_value)) {
            $res[1] = $primary_key_value;
        } else if (is_array($primary_key_value)) {
            $res[2] = json_encode(value: $primary_key_value, flags: JSON_THROW_ON_ERROR);
        } else {
            $res[2] = $primary_key_value;
        }
        return $res;
    }

    private static function getBearTableNameSpace(string $tableName): string {
        return match ($tableName) {
            'bear_user', 'bear_access_token_app', 'bear_access_token_user', 'bear_permission', 'bear_permission_user', 'bear_role', 'bear_role_permission', 'bear_role_user' => "GuardsmanPanda\\Larabear\\Infrastructure\\Auth\\Model",
            'bear_country', 'bear_language' => "GuardsmanPanda\\Larabear\\Infrastructure\\Locale\\Model",
            'bear_config' => 'GuardsmanPanda\\Larabear\\Infrastructure\\Config\\Model',
            'bear_console_event' => 'GuardsmanPanda\\Larabear\\Infrastructure\\Console\\Model',
            'bear_error', 'bear_error_response' => 'GuardsmanPanda\\Larabear\\Infrastructure\\Error\\Model',
            'bear_email' => 'GuardsmanPanda\\Larabear\\Infrastructure\\Email\\Model',
            'bear_file' => 'GuardsmanPanda\\Larabear\\Infrastructure\\File\\Model',
            'bear_idempotency' => 'GuardsmanPanda\\Larabear\\Infrastructure\\Integrity\\Model',
            'bear_oauth2_client', 'bear_oauth2_user' => "GuardsmanPanda\\Larabear\\Infrastructure\\Oauth2\\Model",
            'bear_log_database_change' => 'GuardsmanPanda\\Larabear\\Infrastructure\\Database\\Model',
            default => throw new RuntimeException(message: "No namespace defined for table [$tableName]"),
        };
    }
}
