<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Crud;

use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\LarabearDatabaseModelService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Throwable;

final class BearDatabaseChangeCreator {
    public static function create(
        Model   $model,
        string  $changeType,
        ?string $columnName = null,
        ?string $oldValue = null,
        ?string $newValue = null,
    ): void {
        $keys = LarabearDatabaseModelService::extractPrimaryKeyArray($model);
        $table = $model->getTable();
        $softDeletion = $changeType === 'DELETE' && method_exists($model, 'isForceDeleting') && !$model->isForceDeleting();
        $recordData = $changeType !== 'UPDATE' ? LarabearDatabaseModelService::extractAuditColumns($model) : null;

        try {
            DB::connection($model->getConnectionName())->insert(query: "
            INSERT INTO bear_database_change (
                table_name, column_name,
                record_id, record_uuid, record_identifier,
                old_value, new_value, record_json,
                change_type, is_soft_deletion, user_id,
                ip, country_code, 
                http_method, http_path, hostname,
                action_name, request_id, console_id                                                  
            )
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?, ?, ?, ?, ?, ?, ?, ?, ?)
        ", bindings: [
                $table, $columnName,
                $keys[0], $keys[1], $keys[2],
                $oldValue, $newValue, $recordData,
                $changeType, $softDeletion,
                BearGlobalStateService::getUserId(),
                Req::ip(), Req::ipCountry(),
                Req::method()->value, Req::path(), Req::actionName(), Req::hostname(),
                BearGlobalStateService::getRequestId(), BearGlobalStateService::getConsoleIdOrNull()
            ]);
        } catch (Throwable $t) {
            BearErrorCreator::create(
                message: "Failed to log database change, table: $table, change_type: $changeType, column_name: $columnName, old_value: $oldValue, new_value: $newValue",
                slug: 'larabear::database-log-change-error',
                severity: BearSeverityEnum::CRITICAL,
                exception: $t
            );
        }
    }
}
