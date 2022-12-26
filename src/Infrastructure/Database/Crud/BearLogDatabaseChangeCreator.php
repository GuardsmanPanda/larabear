<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Crud;

use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\LarabearDatabaseModelService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class BearLogDatabaseChangeCreator {
    public static function create(
        Model $model,
        string $changeType,
        string $columnName = null,
        string $oldValue = null,
        string $newValue = null,
    ): void {
        $keys = LarabearDatabaseModelService::extractPrimaryKeyArray($model);
        $table = $model->getTable();
        $softDeletion = $changeType === 'DELETE' && method_exists($model, 'isForceDeleting') && !$model->isForceDeleting();
        $recordData = $changeType !== 'UPDATE' ? LarabearDatabaseModelService::extractAuditColumns($model) : null;

        try {
            DB::connection($model->getConnectionName())->insert(query: "
            INSERT INTO bear_log_database_change (
                table_name, column_name,
                record_id, record_uuid, record_identifier,
                old_value, new_value, record_json,
                change_type, is_soft_deletion, user_id,
                request_ip, request_country_code, 
                request_http_method, request_http_path, app_action_name,
                request_http_hostname, request_id, console_id                                                  
            )
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,?, ?, ?, ?, ?, ?, ?, ?, ?)
        ", bindings: [
                $table, $columnName,
                $keys[0], $keys[1], $keys[2],
                $oldValue, $newValue, $recordData,
                $changeType, $softDeletion,
                BearGlobalStateService::getUserId(),
                Req::ip(), Req::ipCountry(),
                Req::method(), Req::path(), Req::actionName(), Req::hostname(),
                BearGlobalStateService::getRequestId(), BearGlobalStateService::getConsoleIdOrNull()
            ]);
        } catch (Throwable $t) {
            BearLogErrorCreator::create(
                message: "Failed to log database change, table: $table, change_type: $changeType, column_name: $columnName, old_value: $oldValue, new_value: $newValue",
                namespace: 'larabear', key: 'database_log_change_error',
                severity: BearSeverityEnum::CRITICAL,
                remedy: 'Contact Bjørn', exception: $t,
            );
        }

         $channel = Config::get(key: "bear.log_database_change_channel");
         if ($channel !== null) {
             try {
                 if ($changeType === 'CREATE') {
                     Log::channel(channel: $channel)->info(message: "CREATE in [$table] ID: " . implode(separator: ',', array: $keys) . ", Data: $recordData", context: ['user_id' => BearGlobalStateService::getUserId()]);
                 } else if ($changeType === 'DELETE') {
                     Log::channel(channel: $channel)->info(message: "*DELETE* in [$table] - ID: " . implode(separator: ',', array: $keys), context: ['user_id' => BearGlobalStateService::getUserId()]);
                 } else {
                     Log::channel(channel: $channel)->info(message: "UPDATE in [$table -> $columnName] - ID: " . implode(separator: ',', array: $keys) . " Change: $oldValue -> $newValue", context: ['user_id' => BearGlobalStateService::getUserId()]);
                 }
             } catch (Throwable $throwable) {
                 BearLogErrorCreator::create(
                     message: "Failed to log database change to channel [$channel]",
                     namespace: 'larabear',
                     key: 'database_change_log_channel_failed',
                     severity: BearSeverityEnum::MEDIUM,
                     remedy: 'Check the database change log channel is configured correctly',
                     exception: $throwable
                 );
             }
         }
    }
}
