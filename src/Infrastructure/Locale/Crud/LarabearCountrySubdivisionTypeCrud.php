<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Enum\BearCountrySubdivisionTypeEnum;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Model\BearCountrySubdivisionType;

final class LarabearCountrySubdivisionTypeCrud {
    public static function syncToDatabase(BearCountrySubdivisionTypeEnum $enum): void {
        BearDatabaseService::mustBeInTransaction();

        $model = BearCountrySubdivisionType::find($enum->value) ?? new BearCountrySubdivisionType();

        $model->enum = $enum->value;
        $model->name = $enum->getName();

        $model->save();
    }
}
