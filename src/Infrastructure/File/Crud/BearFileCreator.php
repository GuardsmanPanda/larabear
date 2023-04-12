<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\File\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\File\Model\BearFile;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RuntimeException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

final class BearFileCreator {
    public static function create(
        UploadedFile $uploaded_file,
        string $local_file_location = null,
        string $cloud_file_location = null,
        string $created_by_user_id = null,
        bool $prefix_with_timestamp = true,
        ArrayObject $file_data_json = new ArrayObject()
    ): BearFile {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearFile();
        $model->id = Str::uuid()->toString();

        $model->original_file_name = $uploaded_file->getClientOriginalName();
        $model->mime_type = $uploaded_file->getMimeType();
        $model->file_data_json = $file_data_json;

        if ($local_file_location === null && $cloud_file_location === null) {
            throw new RuntimeException(message: 'You must specify at least one file location');
        }

        if ($local_file_location !== null) {
            $local_file_path = $local_file_location . '/' . ($prefix_with_timestamp ? date('Y-m-d-H-i-s') . '-' : '') . $uploaded_file->getClientOriginalName();
            Storage::disk('local')->put($local_file_path, $uploaded_file->getContent());
            $model->local_file_path = $local_file_path;
        }

        if ($cloud_file_location !== null) {
            $cloud_file_path = $cloud_file_location . '/' . ($prefix_with_timestamp ? date('Y-m-d-H-i-s') . '-' : '') . $uploaded_file->getClientOriginalName();
            Storage::cloud()->put($cloud_file_path, $uploaded_file->getContent());
            $model->cloud_file_path = $cloud_file_path;
        }

        $model->created_by_user_id = $created_by_user_id;

        $model->save();
        return $model;
    }
}
