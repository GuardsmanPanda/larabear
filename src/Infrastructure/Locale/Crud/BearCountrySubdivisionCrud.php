<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Crud;

use Carbon\CarbonImmutable;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Enum\BearCountrySubdivisionEnum;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Model\BearCountrySubdivision;
use RuntimeException;

final class BearCountrySubdivisionCrud {
    public static function syncToDatabase(BearCountrySubdivisionEnum $enum): void {
        BearDatabaseService::mustBeInTransaction();

        $data = $enum->getCountrySubdivisionData();
        $model = BearCountrySubdivision::find($enum->value) ?? new BearCountrySubdivision();

        $model->country_cca2 = $data->cca2;
        $model->iso_3166 = $enum->value;
        $model->country_subdivision_type_enum = $data->type;
        $model->osm_relation_id = $data->osm;
        $model->name = $data->name;
        $model->capital = $data->capital;

        $model->save();
    }

    public static function setOsmSyncAt(BearCountrySubdivisionEnum $enum, CarbonImmutable $syncAt): void {
        BearDatabaseService::mustBeInTransaction();
        $model = BearCountrySubdivision::find($enum->value);
        if ($model === null) {
            throw new RuntimeException("Country {$enum->getCountrySubdivisionData()->name} not found");
        }
        $model->osm_sync_at = $syncAt;
        $model->save();
    }
}
