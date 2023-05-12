<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Sms\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Sms\Model\BearSms;
use GuardsmanPanda\Larabear\Infrastructure\Sms\Service\BearSmsService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Throwable;

final class BearSmsCreator {
    public static function create(
        string $to_phone_number,
        string $sms_message,
        bool $is_sandboxed,
        string $sms_tag = null,
    ): BearSms {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearSms();
        $model->id = Str::uuid()->toString();

        $model->to_phone_number = $to_phone_number;
        $model->sms_message = $sms_message;
        $model->is_sandboxed = $is_sandboxed;
        $model->sms_tag = $sms_tag;

        $model->save();

        try {
            DB::beginTransaction();
            $model = BearSmsService::sendSms(sms: $model);
            DB::commit();
        } catch (Throwable $t) {
            DB::rollBack();
            BearErrorCreator::create(
                message: "Failure to send sms [{$t->getMessage()}]",
                key: 'larabear::sms-creator',
                exception: $t
            );
        }

        return $model;
    }
}
