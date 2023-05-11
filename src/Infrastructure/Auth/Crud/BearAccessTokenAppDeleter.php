<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearAccessTokenApp;
use Illuminate\Support\Facades\DB;

final class BearAccessTokenAppDeleter {
    public static function delete(BearAccessTokenApp $model): void {
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);
        DB::delete(query: "DELETE FROM bear_access_token_usage WHERE access_token_app_id = ?", bindings: [$model->id]);
        $model->delete();
    }

    public static function deleteFromId(string $id): void {
        self::delete(model: BearAccessTokenApp::findOrFail(id: $id));
    }
}
