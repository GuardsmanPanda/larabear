<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Traits;

use ArrayObject;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDBService;
use stdClass;
use Throwable;

trait BearLogDatabaseChanges {
    public static function bootBearLogDatabaseChanges(): void {
        static::created(static function ($model) {
            try {
                $keys = BearDBService::extraPrimaryKeyArray($model);
                AuditChangeCreator::create(
                    table_name: $model->getTable(),
                    change_type: 'CREATE',
                    record_id: $keys[0], record_uuid: $keys[1], record_identifier: $keys[2],
                    record_data: BearDBService::extractAuditColumns($model),
                );
            } catch (Throwable $t) {

            }
        });

        static::deleted(static function ($model) {
            try {
                // If the model is removed from the database or only soft deleted.
                $soft_deleted = method_exists($model, 'isForceDeleting') && !$model->isForceDeleting();
                $keys = BearDBService::extraPrimaryKeyArray($model);
                AuditChangeCreator::create(
                    table_name: $model->getTable(),
                    change_type: 'DELETE',
                    record_id: $keys[0], record_uuid: $keys[1], record_identifier: $keys[2],
                    is_soft_deletion: $soft_deleted,
                    record_data: BearDBService::extractAuditColumns($model),
                );
            } catch (Throwable $t) {

            }
        });

        static::updated(static function ($model) {
            try {
                $keys = BearDBService::extraPrimaryKeyArray($model);

                $ignore_columns = $model->audit_exclude_columns ?? [];
                foreach ($model->getChanges() as $column_name => $new_value) {
                    if ($column_name === 'updated_at' || in_array($column_name, $ignore_columns, true))  {
                        continue;
                    }
                    $old_value = $model->getOriginal($column_name);
                    if (str_starts_with($column_name, 'encrypted_')) {
                        $new_value = 'HIDDEN';
                        $old_value = 'HIDDEN';
                    }
                    // If old_value is array
                    if (is_array($old_value) || $old_value instanceof stdClass || $old_value instanceof ArrayObject) {
                        $old_value = json_encode($old_value, JSON_THROW_ON_ERROR);
                    }
                    // If new_value is array
                    if (is_array($new_value) || $new_value instanceof stdClass || $new_value instanceof  ArrayObject) {
                        $new_value = json_encode($new_value, JSON_THROW_ON_ERROR);
                    }

                    AuditChangeCreator::create(
                        table_name: $model->getTable(),
                        change_type: 'UPDATE',
                        record_id: $keys[0], record_uuid: $keys[1], record_identifier: $keys[2],
                        column_name: $column_name,
                        old_value: $old_value,
                        new_value: $new_value,
                    );
                }
            } catch (Throwable $t) {

            }
        });
    }
}
