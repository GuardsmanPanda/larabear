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
        string $phone_number,
        string $message,
        bool $is_sandboxed,
        string $tag = null,
    ): BearSms {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearSms();
        $model->id = Str::uuid()->toString();

        $model->phone_number = $phone_number;
        $model->message = $message;
        $model->is_sandboxed = $is_sandboxed;
        $model->tag = $tag;

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
