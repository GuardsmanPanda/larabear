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
    /**
     * @param UploadedFile $uploaded_file
     * @param string|null $local_location
     * @param string|null $cloud_location
     * @param string|null $created_by_user_id
     * @param bool $prefix_with_timestamp
     * @param ArrayObject<string, string|int|bool> $data_json
     * @return BearFile
     */
    public static function create(
        UploadedFile $uploaded_file,
        string $local_location = null,
        string $cloud_location = null,
        string $created_by_user_id = null,
        bool $prefix_with_timestamp = true,
        ArrayObject $data_json = new ArrayObject()
    ): BearFile {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);

        $model = new BearFile();
        $model->id = Str::uuid()->toString();

        $model->original_name = $uploaded_file->getClientOriginalName();
        $model->mime_type = $uploaded_file->getMimeType() ?? 'application/octet-stream';
        $model->data_json = $data_json;

        if ($local_location === null && $cloud_location === null) {
            throw new RuntimeException(message: 'You must specify at least one file location');
        }

        if ($local_location !== null) {
            $local_path = $local_location . '/' . ($prefix_with_timestamp ? date('Y-m-d-H-i-s') . '-' : '') . $uploaded_file->getClientOriginalName();
            Storage::disk('local')->put($local_path, $uploaded_file->getContent());
            $model->local_path = $local_path;
        }

        if ($cloud_location !== null) {
            $cloud_path = $cloud_location . '/' . ($prefix_with_timestamp ? date('Y-m-d-H-i-s') . '-' : '') . $uploaded_file->getClientOriginalName();
            Storage::cloud()->put($cloud_path, $uploaded_file->getContent());
            $model->cloud_path = $cloud_path;
        }

        $model->created_by_user_id = $created_by_user_id;

        $model->save();
        return $model;
    }
}
