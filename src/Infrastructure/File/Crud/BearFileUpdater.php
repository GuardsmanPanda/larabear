<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\File\Crud;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\BearDatabaseService;
use GuardsmanPanda\Larabear\Infrastructure\File\Model\BearFile;
use Illuminate\Database\Eloquent\Casts\ArrayObject;

final class BearFileUpdater {
    public function __construct(private readonly BearFile $model) {
        BearDatabaseService::mustBeInTransaction();
        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PUT', 'PATCH', 'DELETE']);
    }

    public static function fromId(string $id): self {
        return new self(model: BearFile::findOrFail(id: $id));
    }


    public function setOriginalFileName(string $original_file_name): self {
        $this->model->original_file_name = $original_file_name;
        return $this;
    }

    public function setMimeType(string $mime_type): self {
        $this->model->mime_type = $mime_type;
        return $this;
    }

    public function setFileDataJson(ArrayObject $file_data_json): self {
        $this->model->file_data_json = $file_data_json;
        return $this;
    }

    public function setCreatedByUserId(string|null $created_by_user_id): self {
        $this->model->created_by_user_id = $created_by_user_id;
        return $this;
    }

    public function update(): BearFile {
        $this->model->save();
        return $this->model;
    }
}
