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
        $model = BearCountrySubdivision::find(ids: ['country_cca2' => $data->country_cca2->value, 'iso_3166' => $data->iso_3166]) ?? new BearCountrySubdivision();

        $ranks = DB::selectOne(query: "
            SELECT
                (SELECT COUNT(*) FROM bear_country WHERE area_km2 > ?) + 1 as global_area_rank,
                (SELECT COUNT(*) FROM bear_country WHERE population > ?) + 1 as global_population_rank
        ", bindings: [$data->area_km2, $data->population]);

        $model->country_cca2 = $data->country_cca2;
        $model->iso_3166 = $data->iso_3166;
        $model->name = $data->name;
        $model->capital = $data->capital;
        $model->area_km2 = $data->area_km2;
        $model->local_area_rank = $data->local_area_rank;
        $model->global_area_rank = $ranks->global_area_rank;
        $model->population = $data->population;
        $model->local_population_rank = $data->local_population_rank;
        $model->global_population_rank = $ranks->global_population_rank;

        $model->save();
    }
}
