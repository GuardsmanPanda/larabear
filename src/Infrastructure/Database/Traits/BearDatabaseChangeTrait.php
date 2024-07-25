<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Traits;

use GuardsmanPanda\Larabear\Infrastructure\Database\Crud\BearDatabaseChangeCreator;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Model;
use stdClass;

trait BearDatabaseChangeTrait {
    public static function bootBearDatabaseChangeTrait(): void {
        static::created(static function (Model $model) {
            BearDatabaseChangeCreator::create(model: $model, changeType: 'CREATE');
        });

        static::deleted(static function (Model $model) {
            BearDatabaseChangeCreator::create(model: $model, changeType: 'DELETE');
        });

        static::updated(static function (Model $model) {
            $ignore_columns = property_exists(object_or_class: $model, property: 'log_exclude_columns') ? $model->log_exclude_columns : [];
            foreach ($model->getChanges() as $column_name => $new_value) {
                if ($column_name === 'updated_at' || in_array($column_name, $ignore_columns, true)) {
                    continue;
                }

                $old_value = $model->getOriginal($column_name);

                if ($old_value === null && $new_value === null) {
                    continue;
                }

                if (str_starts_with($column_name, 'encrypted_')) {
                    $new_value = 'HIDDEN';
                    $old_value = 'HIDDEN';
                }

                // if arrays are equal but key positions are different, then we do not need to log this change
                if (is_array($old_value) && is_array($new_value) && $old_value == $new_value) {
                    continue;
                }
                // Same for array objects
                if ($old_value instanceof ArrayObject && $new_value instanceof ArrayObject && $old_value->toArray() == $new_value->toArray()) {
                    continue;
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

                // Fix enums
                if ($old_value instanceof \UnitEnum) {
                    $old_value = $old_value->value;
                }
                if ($new_value instanceof \UnitEnum) {
                    $new_value = $new_value->value;
                }
                BearDatabaseChangeCreator::create(model: $model, changeType: 'UPDATE', columnName: $column_name, oldValue: is_null($old_value) ? null : (string)$old_value, newValue: is_null($new_value) ? null : (string)$new_value);
            }
        });
    }
}
