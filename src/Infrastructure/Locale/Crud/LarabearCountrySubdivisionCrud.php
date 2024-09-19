<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Enum\BearCountrySubdivisionEnum;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Model\BearCountrySubdivision;
use Illuminate\Support\Facades\DB;

final class LarabearCountrySubdivisionCrud {
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
}
