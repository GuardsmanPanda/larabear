<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Locale\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Enum\BearCountryEnum;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Model\BearCountry;
use Illuminate\Database\Eloquent\Casts\ArrayObject;

final class LarabearCountryCrud {
    public static function syncToDatabase(BearCountryEnum $enum): void {
        BearDatabaseService::mustBeInTransaction();

        $data = $enum->getCountryData();
        $model = BearCountry::find($data->cca2) ?? new BearCountry();

        $model->cca2 = $data->cca2;
        $model->cca3 = $data->cca3;
        $model->name = $data->name;
        $model->capital = $data->capital;
        $model->tld = $data->tld;
        $model->area_km2 = $data->area_km2;
        $model->area_rank = $data->area_rank;
        $model->population = $data->population;
        $model->population_rank = $data->population_rank;
        $model->currency_code = $data->currency_code;
        $model->currency_name = $data->currency_name;
        $model->currency_symbol = $data->currency_symbol;
        $model->calling_code = $data->calling_code;
        $model->dependency_status = $data->dependency_status;
        $model->osm_relation_id = $data->osm_relation_id;
        $model->is_driving_side_right = $data->is_driving_side_right;
        $model->cca2_borders_json = new ArrayObject($data->borders);

        $model->save();
    }
}
