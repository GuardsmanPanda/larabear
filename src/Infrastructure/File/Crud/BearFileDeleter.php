<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\File\Crud;

use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\File\Model\BearFile;
use Illuminate\Support\Facades\Storage;

final class BearFileDeleter {
    public static function delete(BearFile $model): void {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        if ($model->local_file_path !== null) {
            $result = Storage::disk(name: 'local')->delete(paths: $model->local_file_path);
            if ($result === false) {
                BearErrorCreator::create(
                    message: 'Failed to delete local file',
                    key: 'larabear::file-local-delete-failed',
                    severity: BearSeverityEnum::HIGH,
                    remedy: "Check if the file exists, and perhaps delete it manually."
                );
            }
        }

        if ($model->cloud_file_path !== null) {
            $result = Storage::cloud()->delete(paths: $model->cloud_file_path);
            if ($result === false) {
                BearErrorCreator::create(
                    message: 'Failed to delete cloud file',
                    key: 'larabear::file-cloud-delete-failed',
                    severity: BearSeverityEnum::HIGH,
                    remedy: "Check if the file exists, and perhaps delete it manually."
                );
            }
        }

        $model->delete();
    }

    public static function deleteFromId(string $id): void {
        self::delete(model: BearFile::findOrFail(id: $id));
    }
}
