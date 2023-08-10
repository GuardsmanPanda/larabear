<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Command;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearRegexService;
use GuardsmanPanda\Larabear\Infrastructure\Console\Service\ConsoleService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Data\LarabearDatabaseColumnData;
use GuardsmanPanda\Larabear\Infrastructure\Database\Data\LarabearDatabaseModelData;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\LarabearDatabaseModelService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use InvalidArgumentException;
use Ramsey\Collection\Set;

final class LarabearDatabaseCrudGeneratorCommand extends Command {
    protected $signature = 'bear:crud {table_name} {--service}';
    protected $description = 'Generate Crud Classes';

    public function handle(): void {
        if (!is_string($this->argument(key: 'table_name'))) {
            throw new InvalidArgumentException(message: 'Table name must be a string');
        }
        $table_input = $this->argument(key: 'table_name');
        ConsoleService::printH1(headline: "Generate Crud Classes For $table_input");
        ConsoleService::printH2(headline: 'Looking for table..');
        $connections = Config::get(key: 'bear.eloquent-model-generator');

        $connectionUse = null;
        $connectionUseConfig = null;
        foreach ($connections as $connection_name => $connection_config) {
            foreach ($connection_config as $table_name => $table_config) {
                if ($table_input === $table_name) {
                    $connectionUse = $connection_name;
                    $connectionUseConfig = $connection_config;
                    break;
                }
            }
        }
        ConsoleService::printTestResult(testName: "Table [$table_input] found in config for connection [$connectionUse].", errorMessage: $connectionUse === null ? "Table: [$table_input] not found in config." : null);
        if ($connectionUse === null) {
            return;
        }

        $models = LarabearDatabaseModelService::buildAll(connectionName: $connectionUse, tableConfig: $connectionUseConfig);
        $model = $models[$table_input];
        $location = BearRegexService::extractFirst(regex: '~(.*?)/[^/]+$~', subject:$model->getModelDirectory()) . '/Crud';

        if (!is_dir($location)) {
            if (!mkdir($location) && !is_dir($location)) {
                ConsoleService::printTestResult(testName: '', errorMessage: "Directory: [$location] was not created.");
                return;
            }
            ConsoleService::printTestResult(testName: "Directory $location Created");
        } else {
            ConsoleService::printTestResult(testName: "Directory $location Exists");
        }

        ConsoleService::printH2(headline: 'Generating Domain Crud..');
        $this->generateCreator(model: $model, directory: $location);
        $this->generateUpdater(model: $model, directory: $location);
        $this->generateDeleter(model: $model, directory: $location);
    }


    private function generateCreator(LarabearDatabaseModelData $model, string $directory): void {
        $filename = $model->getModelClassName() . 'Creator.php';
        $filepath = $directory . '/' . $filename;
        if (File::exists($filepath)) {
            ConsoleService::printTestResult(testName: "File $filename Exists", warningMessage: "File: [$filename] already exists. [$filepath]");
            return;
        }

        $headers = new Set(setType: 'string');
        if (!$model->hasCompositePrimaryKey() && $model->getColumns()[$model->getPrimaryKeyColumns()[0]]->nativeDataType === 'uuid') {
            $headers->add("use Illuminate\\Support\\Str;");
        }

        $content = $this->classHeader(model: $model, headers: $headers, addColumnHeaders: true);
        $content .= 'final class ' . $model->getModelClassName() . 'Creator {' . PHP_EOL;
        $content .= "    public static function create(" . PHP_EOL;

        foreach ($this->getModifiableColumnArray(model: $model, forCreator: true) as $column) {
            if ($column->isNullable) {
                $content .= "        $column->phpDataType \$$column->columnName = null," . PHP_EOL;
            } else {
                $content .= "        $column->phpDataType \$$column->columnName," . PHP_EOL;
            }
        }
        $content = substr(string: $content, offset: 0, length: -2);
        $content .= PHP_EOL;
        $content .= "    ): {$model->getModelClassName()} {" . PHP_EOL;
        $content .= "        BearDatabaseService::mustBeInTransaction();" . PHP_EOL;
        $content .= "        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST']);" . PHP_EOL . PHP_EOL;
        $content .= "        \$model = new {$model->getModelClassName()}();" . PHP_EOL;

        if (!$model->hasCompositePrimaryKey() && $model->getColumns()[$model->getPrimaryKeyColumns()[0]]->nativeDataType === 'uuid') {
            $content .= "        \$model->{$model->getPrimaryKeyColumns()[0]} = Str::uuid()->toString();" . PHP_EOL;
        }

        $content .= PHP_EOL;
        foreach ($this->getModifiableColumnArray(model: $model, forCreator: true) as $column) {
            $content .= "        \$model->$column->columnName = \$$column->columnName;" . PHP_EOL;
        }
        $content .= PHP_EOL;

        $content .= "        \$model->save();" . PHP_EOL;
        $content .= "        return \$model;" . PHP_EOL;
        $content .= '    }' . PHP_EOL;
        $content .= '}' . PHP_EOL;
        File::put($filepath, $content);
        ConsoleService::printTestResult(testName: "File [$filename] created.");
    }


    private function generateUpdater(LarabearDatabaseModelData $model, string $directory): void {
        $className = $model->getModelClassName() . 'Updater';
        $modelClass = $model->getModelClassName();
        $filename = "$className.php";
        $filepath = $directory . '/' . $filename;
        if (File::exists($filepath)) {
            ConsoleService::printTestResult(testName: "File $filename Exists", warningMessage: "File: [$filename] already exists. [$filepath]");
            return;
        }
        $headers = new Set(setType: 'string');
        $content = $this->classHeader(model: $model, headers: $headers, addColumnHeaders: true);
        $content .= "final class $className {" . PHP_EOL;
        $content .= "    public function __construct(private readonly {$model->getModelClassName()} \$model) {" . PHP_EOL;
        $content .= "        BearDatabaseService::mustBeInTransaction();" . PHP_EOL;
        $content .= "        BearDatabaseService::mustBeProperHttpMethod(verbs: ['POST', 'PATCH']);" . PHP_EOL;
        $content .= '    }' . PHP_EOL . PHP_EOL;


        if (!$model->hasCompositePrimaryKey()) {
            $key = $model->getPrimaryKeyColumns()[0];
            $keyStudly = Str::studly($key);
            $content .= "    public static function from$keyStudly(" . $model->getPrimaryKeyType() . " \$$key): self {" . PHP_EOL;
            $content .= "        return new self(model: $modelClass::findOrFail(id: \$$key));" . PHP_EOL;
            $content .= '    }' . PHP_EOL . PHP_EOL . PHP_EOL;
        }

        foreach ($this->getModifiableColumnArray($model) as $column) {
            $functionName = "set" . Str::studly($column->columnName);
            $colName = $column->columnName;
            $nullChar = $column->isNullable ? '?' : '';
            if ($column->isNullable) {
                $content .= "    public function $functionName($column->phpDataType|null \$$column->columnName): self {" . PHP_EOL;
            } else {
                $content .= "    public function $functionName($column->phpDataType \$$column->columnName): self {" . PHP_EOL;
            }

            if (str_ends_with(haystack: $column->columnName, needle: '_date')) {
                $content .= '        if ($' . $colName . $nullChar . '->toDateString() === $this->model->' . $colName . $nullChar . '->toDateString()) {' . PHP_EOL;
                $content .= "            return \$this;" . PHP_EOL;
                $content .= "        }" . PHP_EOL;
            }
            if (str_ends_with(haystack: $column->columnName, needle: '_at')) {
                $content .= '        if ($' . $colName . $nullChar . '->toIso8601String() === $this->model->' . $colName . $nullChar . '->toIso8601String()) {' . PHP_EOL;
                $content .= "            return \$this;" . PHP_EOL;
                $content .= "        }" . PHP_EOL;
            }
            $content .= "        \$this->model->$column->columnName = \$$column->columnName;" . PHP_EOL;
            $content .= '        return $this;' . PHP_EOL;
            $content .= '    }' . PHP_EOL . PHP_EOL;
        }

        $content .= "    public function update(): {$model->getModelClassName()} {" . PHP_EOL;
        $content .= "        \$this->model->save();" . PHP_EOL;
        $content .= "        return \$this->model;" . PHP_EOL;
        $content .= '    }' . PHP_EOL;
        $content .= '}' . PHP_EOL;
        File::put($filepath, $content);
        ConsoleService::printTestResult(testName: "File [$filename] created.");
    }


    private function generateDeleter(LarabearDatabaseModelData $model, string $directory): void {
        $modelClass = $model->getModelClassName();
        $filename = $model->getModelClassName() . 'Deleter.php';
        $filepath = $directory . '/' . $filename;
        if (File::exists($filepath)) {
            ConsoleService::printTestResult(testName: '', warningMessage: "File: [$filename] already exists.  [$filepath]");
            return;
        }
        $headers = new Set(setType: 'string');
        $content = $this->classHeader(model: $model, headers: $headers);
        $content .= 'final class ' . $model->getModelClassName() . 'Deleter {' . PHP_EOL;
        $content .= "    public static function delete({$model->getModelClassName()} \$model): void {" . PHP_EOL;
        $content .= "        BearDatabaseService::mustBeInTransaction();" . PHP_EOL;
        $content .= "        BearDatabaseService::mustBeProperHttpMethod(verbs: ['DELETE']);" . PHP_EOL;
        $content .= "        \$model->delete();" . PHP_EOL;
        $content .= '    }' . PHP_EOL;

        if (!$model->hasCompositePrimaryKey()) {
            $key = $model->getPrimaryKeyColumns()[0];
            $keyStudly = Str::studly($key);
            $content .= PHP_EOL . "    public static function deleteFrom$keyStudly(" . $model->getPrimaryKeyType() . " \$$key): void {" . PHP_EOL;
            $content .= "        self::delete(model: $modelClass::findOrFail(id: \$$key));" . PHP_EOL;
            $content .= '    }' . PHP_EOL;
        }

        $content .= '}' . PHP_EOL;
        File::put($filepath, $content);
        ConsoleService::printTestResult(testName: "File [$filename] created.");
    }


    /**
     * @param LarabearDatabaseModelData $model
     * @param Set<string> $headers
     * @param bool $addColumnHeaders
     * @return string
     */
    private function classHeader(LarabearDatabaseModelData $model, Set $headers, bool $addColumnHeaders = false): string {
        $headers->add("use GuardsmanPanda\\Larabear\\Infrastructure\\Database\\Service\\BearDatabaseService;");
        $headers->add("use {$model->getNameSpace()}\\{$model->getModelClassName()};");

        if ($addColumnHeaders) {
            foreach ($this->getModifiableColumnArray($model) as $column) {
                if ($column->phpDataType === 'stdClass') {
                    $headers->add("use stdClass;");
                    continue;
                }
                $headers->add($column->requiredHeader);
            }
        }

        $namespace = BearRegexService::extractFirst(regex: '~(.*)\\\\[^\\\\]+$~', subject: $model->getNameSpace()) . '\\Crud';
        $content = '<?php declare(strict_types=1);' . PHP_EOL . PHP_EOL;
        $content .= 'namespace ' . $namespace . ';' . PHP_EOL . PHP_EOL;
        $hh = $headers->toArray();
        sort(array: $hh);
        $hh = array_unique(array_map(static function ($ele) {
            return trim(string: $ele);
        }, $hh));
        foreach ($hh as $header) {
            if ($header === '') {
                continue;
            }
            $content .= $header . PHP_EOL;
        }
        return $content . PHP_EOL;
    }


    /**
     * @param LarabearDatabaseModelData $model
     * @param bool $forCreator
     * @return array<LarabearDatabaseColumnData>
     */
    private function getModifiableColumnArray(LarabearDatabaseModelData $model, bool $forCreator = false): array {
        $skipColumns = ['id', 'created_at', 'updated_at', 'deleted_at'];
        if (!$forCreator) {
            foreach ($model->getPrimaryKeyColumns() as $col) {
                $skipColumns[] = $col;
            }
        }
        $columns = [];
        foreach ($model->getColumns() as $column) {
            if ($column->isNullable === false && !in_array(needle: $column->columnName, haystack: $skipColumns, strict: true)) {
                $columns[] = $column;
            }
        }
        foreach ($model->getColumns() as $column) {
            if ($column->isNullable === true && !in_array(needle: $column->columnName, haystack: $skipColumns, strict: true)) {
                $columns[] = $column;
            }
        }
        return $columns;
    }
}
