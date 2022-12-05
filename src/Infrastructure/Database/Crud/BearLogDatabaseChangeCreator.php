<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Crud;

use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class BearLogDatabaseChangeCreator {
    /**
     * @param string $table_name
     * @param string $change_type
     * @param string|null $connection_name
     * @param int|null $record_id
     * @param string|null $record_uuid
     * @param string|null $record_identifier
     * @param string|null $column_name
     * @param string|null $old_value
     * @param string|null $new_value
     * @param bool|null $is_soft_deletion
     * @param array<string,mixed>|null $record_data
     * @return void
     * @throws \JsonException
     */
    public static function create(
        string $table_name,
        string $change_type,
        string $connection_name = null,
        int    $record_id = null,
        string $record_uuid = null,
        string $record_identifier = null,
        string $column_name = null,
        string $old_value = null,
        string $new_value = null,
        bool   $is_soft_deletion = null,
        array  $record_data = null,
    ): void {
        DB::connection($connection_name)->insert(query: "
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
            $table_name, $column_name,
            $record_id, $record_uuid, $record_identifier,
            $old_value, $new_value, $record_data === null ? null : json_encode(value: $record_data, flags: JSON_THROW_ON_ERROR),
            $change_type, $is_soft_deletion,
            BearGlobalStateService::getUserId(),
            Req::ip(), Req::ipCountry(),
            Req::method(), Req::path(), Req::actionName(), Req::hostname(),
            BearGlobalStateService::getRequestId(), BearGlobalStateService::getConsoleIdOrNull()
        ]);

         $channel = Config::get(key: "bear.log_database_change_channel");
         if ($channel !== null) {
             try {
                 if ($change_type === 'CREATE') {
                     Log::channel(channel: $channel)->info(message: "CREATE in [$table_name] ID: " . ($record_id ?? $record_uuid ?? $record_identifier) . ", Data: " . json_encode(value: $record_data, flags: JSON_THROW_ON_ERROR), context: ['user_id' => BearGlobalStateService::getUserId()]);
                 } else if ($change_type === 'DELETE') {
                     Log::channel(channel: $channel)->info(message: "*DELETE* in [$table_name] - ID: " . ($record_id ?? $record_uuid ?? $record_identifier), context: ['user_id' => BearGlobalStateService::getUserId()]);
                 } else {
                     Log::channel(channel: $channel)->info(message: "UPDATE in [$table_name -> $column_name] - ID: " . ($record_id ?? $record_uuid ?? $record_identifier) . " Change: $old_value -> $new_value", context: ['user_id' => BearGlobalStateService::getUserId()]);
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
