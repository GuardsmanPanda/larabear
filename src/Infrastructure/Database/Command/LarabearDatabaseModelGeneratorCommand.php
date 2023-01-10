<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Command;

use GuardsmanPanda\Larabear\Infrastructure\Database\Service\LarabearDatabaseModelService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use RuntimeException;

final class LarabearDatabaseModelGeneratorCommand extends Command {
    protected $signature = 'bear:db';
    protected $description = 'Generate Eloquent Models';

    public function handle(): void {
        $connections = Config::get(key: 'bear.eloquent-model-generator');
        if (count($connections) === 0) {
            throw new RuntimeException(message: 'No database connections defined in config/bear.php => [eloquent-model-generator]');
        }
        foreach ($connections as $connection_name => $table_config) {
            $this->info(string: "Generating Eloquent Models for connection: $connection_name");
            $models = LarabearDatabaseModelService::buildAll(connectionName: $connection_name, tableConfig: $table_config);
            foreach ($models as $model) {
                $this->info(string: "  Generating Eloquent Model for table: " . $model->getTableName());
                $dir = $model->getModelDirectory();
                if (!is_dir(filename: $dir)) {
                    $this->info(string: "    Creating directory: $dir");
                    if (!mkdir(directory: $dir) && !is_dir(filename: $dir)) {
                        throw new RuntimeException(message: sprintf('Directory "%s" was not created', $dir));
                    }
                }
                file_put_contents(filename: $model->getModelPath(), data: $model->getClassContent());
            }
        }
    }
}
