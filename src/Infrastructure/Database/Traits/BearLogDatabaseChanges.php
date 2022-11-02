<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Traits;

use ArrayObject;
use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Database\Crud\BearLogDatabaseChangeCreator;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use stdClass;
use Throwable;

trait BearLogDatabaseChanges {
    public static function bootBearLogDatabaseChanges(): void {
        static::created(static function ($model) {
            try {
                $keys = BearDBService::extractPrimaryKeyArray($model);
                BearLogDatabaseChangeCreator::create(
                    table_name: $model->getTable(),
                    change_type: 'CREATE',
                    connection_name: $model->getConnectionName() ?? 'default',
                    record_id: $keys[0], record_uuid: $keys[1], record_identifier: $keys[2],
                    record_data: BearDBService::extractAuditColumns($model)
                );
            } catch (Throwable $t) {
                BearLogErrorCreator::create(
                    message: 'Error logging database Create change',
                    namespace: 'larabear', key: 'database_log_change_error',
                    severity: BearSeverityEnum::CRITICAL,
                    remedy: 'Contact Bjørn', exception: $t,
                );
            }
        });

        static::deleted(static function ($model) {
            try {
                $soft_deleted = method_exists($model, 'isForceDeleting') && !$model->isForceDeleting();
                $keys = BearDBService::extractPrimaryKeyArray($model);
                BearLogDatabaseChangeCreator::create(
                    table_name: $model->getTable(),
                    change_type: 'DELETE',
                    connection_name: $model->getConnectionName() ?? 'default',
                    record_id: $keys[0], record_uuid: $keys[1], record_identifier: $keys[2],
                    is_soft_deletion: $soft_deleted,
                    record_data: BearDBService::extractAuditColumns($model)
                );
            } catch (Throwable $t) {
                BearLogErrorCreator::create(
                    message: 'Error logging database Delete change',
                    namespace: 'larabear', key: 'database_log_change_error',
                    severity: BearSeverityEnum::CRITICAL,
                    remedy: 'Contact Bjørn', exception: $t,
                );
            }
        });

        static::updated(static function ($model) {
            try {
                $keys = BearDBService::extractPrimaryKeyArray($model);
                $ignore_columns = property_exists(object_or_class: $model, property: 'log_exclude_columns') ? $model->log_exclude_columns : [];
                foreach ($model->getChanges() as $column_name => $new_value) {
                    if ($column_name === 'updated_at' || in_array($column_name, $ignore_columns, true)) {
                        continue;
                    }
                    $old_value = $model->getOriginal($column_name);
                    if (str_starts_with($column_name, 'encrypted_')) {
                        $new_value = 'HIDDEN';
                        $old_value = 'HIDDEN';
                    }
                    // If old_value is array
                    if (is_array($old_value) || $old_value instanceof stdClass || $old_value instanceof ArrayObject) {
                        $old_value = json_encode(value: $old_value, flags: JSON_THROW_ON_ERROR);
                    }
                    // If new_value is array
                    if (is_array($new_value) || $new_value instanceof stdClass || $new_value instanceof ArrayObject) {
                        $new_value = json_encode(value: $new_value, flags: JSON_THROW_ON_ERROR);
                    }

                    // Fix bool to string conversion in PHP
                    if (is_bool($old_value)) {
                        $old_value = $old_value ? 'true' : 'false';
                    }
                    if (is_bool($new_value)) {
                        $new_value = $new_value ? 'true' : 'false';
                    }

                    BearLogDatabaseChangeCreator::create(
                        table_name: $model->getTable(),
                        change_type: 'UPDATE',
                        connection_name: $model->getConnectionName() ?? 'default',
                        record_id: $keys[0], record_uuid: $keys[1], record_identifier: $keys[2],
                        column_name: $column_name,
                        old_value: $old_value,
                        new_value: $new_value
                    );
                }
            } catch (Throwable $t) {
                BearLogErrorCreator::create(
                    message: 'Error logging database Update change',
                    namespace: 'larabear', key: 'database_log_change_error',
                    severity: BearSeverityEnum::CRITICAL,
                    remedy: 'Contact Bjørn', exception: $t,
                );
            }
        });
    }
}
