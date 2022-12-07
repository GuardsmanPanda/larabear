<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Dto;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearRegexService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Ramsey\Collection\Set;

class LarabearDatabaseModelDto {
    /** @var array<string> $primaryKeyColumns */
    private array $primaryKeyColumns = [];
    /** @var array<array<string|bool>> $foreignKeyColumns */
    private array $foreignKeyColumns = [];
    private string $primaryKeyType;
    private bool $timestamps = false;
    /** @var Set<string> $headers */
    private Set $headers;
    /** @var array<string, LarabearDatabaseColumnDto> $columns */
    private array $columns = [];

    /**
     * @param string $connectionName
     * @param string $connectionDriver
     * @param string $tableName
     * @param string $modelClassName
     * @param string $modelLocation
     * @param string $dateFormat
     * @param array<string> $modelTraits
     * @param array<string> $logExcludeColumns
     */
    public function __construct(
        private readonly string $connectionName,
        private readonly string $connectionDriver,
        private readonly string $tableName,
        private readonly string $modelClassName,
        private readonly string $modelLocation,
        private readonly string $dateFormat,
        private readonly array  $modelTraits = [],
        private readonly array  $logExcludeColumns = [],
    ) {
        $this->headers = new Set(setType: 'string');
        $this->headers->add(element: 'use Closure;');
        $this->headers->add(element: 'use Illuminate\Database\Eloquent\Model;');
        $this->headers->add(element: 'use Illuminate\Database\Eloquent\Collection;');
    }

    public function getTableName(): string {
        return $this->tableName;
    }

    public function getModelClassName(): string {
        return $this->modelClassName;
    }

    public function getModelLocation(): string {
        return $this->modelLocation;
    }

    public function getModelDirectory(): string {
        return App::basePath(path: trim(string: $this->modelLocation, characters: '/'));
    }

    public function getModelPath(): string {
        return App::basePath(path: trim(string: $this->modelLocation, characters: '/') . '/') . $this->modelClassName . '.php';
    }

    public function getNameSpace(): string {
        return str_replace(search: '/', replace: '\\', subject: ucfirst($this->modelLocation));
    }


    public function hasCompositePrimaryKey(): bool {
        return count($this->primaryKeyColumns) > 1;
    }

    /**
     * @return array<string>
     */
    public function getPrimaryKeyColumns(): array {
        return $this->primaryKeyColumns;
    }

    public function getPrimaryKeyType(): string {
        return $this->primaryKeyType;
    }

    public function setPrimaryKeyInformation(string $primaryKeyColumnName, string $primaryKeyType): void {
        $this->primaryKeyColumns[] = $primaryKeyColumnName;
        $this->primaryKeyType = $primaryKeyType;
    }

    public function setForeignKeyInformation(string $columnName, string $foreignColumnName, string $foreignModelName, string $foreignNamespace): void {
        $methodName = Str::camel(value: preg_replace(pattern: '/_(id|uuid|slug)$/', replacement: '', subject: $columnName) ?? $columnName);
        foreach ($this->foreignKeyColumns as $foreignKeyColumn) {
            if ($foreignKeyColumn['methodName'] === $methodName) {
                $methodName = Str::camel($columnName);
            }
        }
        $this->foreignKeyColumns[$columnName] = [
            'columnName' => $columnName,
            'methodName' => $methodName,
            'foreignColumnName' => $foreignColumnName,
            'foreignModelName' => $foreignModelName,
            'foreignNamespace' => $foreignNamespace,
            'isNullable' => $this->columns[$columnName]->isNullable,
        ];
    }

    public function addColumn(LarabearDatabaseColumnDto $column): void {
        if ($column->columnName === 'delete_at') {
            $this->headers->add(element: 'use Illuminate\Database\Eloquent\SoftDeletes;');
        }
        if ($column->columnName === 'updated_at') {
            $this->timestamps = true;
        }
        if (in_array($column->columnName, ['created_at', 'updated_at', 'deleted_at'], true)) {
            $column->eloquentCast = null;
            $column->phpDataType = 'string';
            $column->requiredHeader = '';
            $column->sortOrder = 6;
        }
        if ($column->requiredHeader === 'use Illuminate\\Database\\Eloquent\\Casts\\ArrayObject;') {
            $this->headers->add(element: 'use Illuminate\\Database\\Eloquent\\Casts\\AsArrayObject;');
        }
        $this->headers->add(element: $column->requiredHeader);
        $this->columns[$column->columnName] = $column;
    }

    /**
     * @return array<string, LarabearDatabaseColumnDto>
     */
    public function getColumns(): array {
        return $this->columns;
    }

    /**
     * @return array<string, string>
     */
    public function getCasts(): array {
        $casts = [];
        foreach ($this->columns as $column) {
            if ($column->eloquentCast !== null) {
                $casts[$column->columnName] = $column->eloquentCast;
            }
        }
        ksort(array: $casts);
        return $casts;
    }


    public function getClassContent(): string {
        $content = $this->getTopOfClass();
        $content .= "class " . $this->getModelClassName() . " extends Model {" . PHP_EOL;

        if (count($this->modelTraits) > 0) {
            foreach ($this->modelTraits as $trait) {
                $content .= "    use " . BearRegexService::extractFirst(regex: '~.*\\\\([^\\\\]+)$~', subject: $trait) . ';' . PHP_EOL;
            }
            $content .= PHP_EOL;
        }

        $content .= "    protected \$connection = '$this->connectionName';" . PHP_EOL;
        $content .= "    protected \$table = '$this->tableName';" . PHP_EOL;

        if (count($this->primaryKeyColumns) === 1) {
            $primaryKeyColumn = $this->primaryKeyColumns[0];
            if ($primaryKeyColumn !== 'id') {
                $content .= "    protected \$primaryKey = '$primaryKeyColumn';" . PHP_EOL;
            }
            if ($this->primaryKeyType !== 'int') {
                $content .= "    protected \$keyType = '$this->primaryKeyType';" . PHP_EOL;
            }
            if ($this->connectionDriver !== 'pgsql' && ($this->primaryKeyType !== 'int' || $primaryKeyColumn !== 'id')) {
                $content .= "    public \$incrementing = false;" . PHP_EOL;
            }
        } else {
            $content .= '    /** @var array<string> primaryKeyArray */' . PHP_EOL;
            $content .= "    private array \$primaryKeyArray = ['" . implode(separator: "', '", array: $this->primaryKeyColumns) . "'];" . PHP_EOL;
            $content .= "    protected \$keyType = 'array';" . PHP_EOL;
            $content .= "    public \$incrementing = false;" . PHP_EOL;
        }

        $content .= "    protected \$dateFormat = '$this->dateFormat';" . PHP_EOL;
        if ($this->timestamps === false) {
            $content .= "    public \$timestamps = false;" . PHP_EOL;
        }
        if (count(value: $this->logExcludeColumns) > 0) {
            $content .= '    /** @var array<string> $log_exclude_columns */' . PHP_EOL;
            $content .= "    public array \$log_exclude_columns = ['" . implode(separator: "', '", array: $this->logExcludeColumns) . "'];" . PHP_EOL;
        }

        $content .= PHP_EOL;

        $casts = $this->getCasts();
        if (count(value: $casts) > 0) {
            $content .= '    /** @var array<string, string> $casts */' . PHP_EOL;
            $content .= "    protected \$casts = [" . PHP_EOL;
            foreach ($casts as $col_name => $cast_target) {
                $content .= "        '$col_name' => $cast_target," . PHP_EOL;
            }
            $content .= "    ];" . PHP_EOL . PHP_EOL;
        }

        if (count(value: $this->foreignKeyColumns) > 0) {
            foreach ($this->foreignKeyColumns as $column) {
                $content .= "    public function " . $column['methodName'] . "(): BelongsTo";
                if ($column['isNullable']) {
                    $content .= "|null";
                }
                $content .= " {" . PHP_EOL;
                $content .= "        return \$this->belongsTo(related: {$column['foreignModelName']}::class, foreignKey: '" . $column['columnName'] . "', ownerKey: '" . $column['foreignColumnName'] . "');" . PHP_EOL;
                $content .= "    }" . PHP_EOL . PHP_EOL;
            }
        }

        $content .= "    protected \$guarded = ['" . implode(separator: "', '", array: $this->primaryKeyColumns) . "', 'updated_at', 'created_at', 'deleted_at'];" . PHP_EOL;

        if ($this->hasCompositePrimaryKey()) {
            $content .= $this->getCompositeKeyMethods();
        }

        $content .= "}" . PHP_EOL;
        return $content;
    }


    private function getTopOfClass(): string {
        $content = "<?php declare(strict_types=1);" . PHP_EOL . PHP_EOL . 'namespace ' . $this->getNameSpace() . ';' . PHP_EOL . PHP_EOL;
        if ($this->hasCompositePrimaryKey()) {
            $this->headers->add(element: 'use Illuminate\Database\Eloquent\Builder as EloquentBuilder;');
            $this->headers->add(element: 'use RuntimeException;');
        }

        if (count($this->foreignKeyColumns) > 0) {
            $this->headers->add(element: 'use Illuminate\Database\Eloquent\Relations\BelongsTo;');
            foreach ($this->foreignKeyColumns as $column) {
                $namespace = $column['foreignNamespace'];
                if ($namespace !== $this->getNameSpace()) {
                    $this->headers->add(element: 'use ' . $namespace . '\\' . $column['foreignModelName'] . ';');
                }
            }
        }

        if (count($this->modelTraits) > 0) {
            foreach ($this->modelTraits as $trait) {
                $this->headers->add(element: 'use ' . $trait . ';');
            }
        }

        $hh = $this->headers->toArray();
        sort(array: $hh);
        $hh = array_unique(array: array_map(callback: static function ($ele) {
            return trim(string: $ele);
        }, array: $hh));
        foreach ($hh as $header) {
            if ($header === '') {
                continue;
            }
            $content .= $header . PHP_EOL;
        }

        $content .= PHP_EOL . "/**" . PHP_EOL;
        $content .= " * AUTO GENERATED FILE DO NOT MODIFY" . PHP_EOL;
        $content .= " *" . PHP_EOL;
        if (!$this->hasCompositePrimaryKey()) {
            $content .= " * @method static $this->modelClassName|null find($this->primaryKeyType \$id, array \$columns = ['*'])" . PHP_EOL;
            $content .= " * @method static $this->modelClassName findOrFail($this->primaryKeyType \$id, array \$columns = ['*'])" . PHP_EOL;
        }
        $content .= " * @method static $this->modelClassName sole(array \$columns = ['*'])" . PHP_EOL;
        $content .= " * @method static $this->modelClassName|null first(array \$columns = ['*'])" . PHP_EOL;
        $content .= " * @method static $this->modelClassName firstOrFail(array \$columns = ['*'])" . PHP_EOL;
        $content .= " * @method static $this->modelClassName firstOrCreate(array \$filter, array \$values)" . PHP_EOL;
        $content .= " * @method static $this->modelClassName firstOrNew(array \$filter, array \$values)" . PHP_EOL;
        $content .= " * @method static $this->modelClassName|null firstWhere(string \$column, string \$operator = null, string|float|int|bool \$value = null, string \$boolean = 'and')" . PHP_EOL;
        $content .= " * @method static Collection|$this->modelClassName all(array \$columns = ['*'])" . PHP_EOL;
        $content .= " * @method static Collection|$this->modelClassName get(array \$columns = ['*'])" . PHP_EOL;
        $content .= " * @method static Collection|$this->modelClassName fromQuery(string \$query, array \$bindings = [])" . PHP_EOL;
        $content .= " * @method static $this->modelClassName lockForUpdate()" . PHP_EOL;
        $content .= " * @method static $this->modelClassName select(array \$columns = ['*'])" . PHP_EOL;
        $content .= " * @method static $this->modelClassName with(array \$relations)" . PHP_EOL;
        $content .= " * @method static $this->modelClassName leftJoin(string \$table, string \$first, string \$operator = null, string \$second = null)" . PHP_EOL;
        $content .= " * @method static $this->modelClassName where(string \$column, string \$operator = null, string|float|int|bool \$value = null, string \$boolean = 'and')" . PHP_EOL;
        $content .= " * @method static $this->modelClassName whereExists(Closure \$callback, string \$boolean = 'and', bool \$not = false)" . PHP_EOL;
        $content .= " * @method static $this->modelClassName whereNotExists(Closure \$callback, string \$boolean = 'and')" . PHP_EOL;
        $content .= " * @method static $this->modelClassName whereHas(string \$relation, Closure \$callback = null, string \$operator = '>=', int \$count = 1)" . PHP_EOL;
        $content .= " * @method static $this->modelClassName whereDoesntHave(string \$relation, Closure \$callback = null)" . PHP_EOL;
        $content .= " * @method static $this->modelClassName withWhereHas(string \$relation, Closure \$callback = null, string \$operator = '>=', int \$count = 1)" . PHP_EOL;
        $content .= " * @method static $this->modelClassName whereIn(string \$column, array \$values, string \$boolean = 'and', bool \$not = false)" . PHP_EOL;
        $content .= " * @method static $this->modelClassName whereNull(string|array \$columns, string \$boolean = 'and')" . PHP_EOL;
        $content .= " * @method static $this->modelClassName whereNotNull(string|array \$columns, string \$boolean = 'and')" . PHP_EOL;
        $content .= " * @method static $this->modelClassName whereRaw(string \$sql, array \$bindings = [], string \$boolean = 'and')" . PHP_EOL;
        $content .= " * @method static $this->modelClassName orderBy(string \$column, string \$direction = 'asc')" . PHP_EOL;
        $content .= " * @method static int count(array \$columns = ['*'])" . PHP_EOL;
        $content .= " *" . PHP_EOL;

        usort(array: $this->columns, callback: static function ($a, $b) {
            if ($a->sortOrder === $b->sortOrder) {
                return strlen(string: $a->columnName) - strlen(string: $b->columnName) === 0 ? strcmp(string1: $a->columnName, string2: $b->columnName) : strlen(string: $a->columnName) - strlen(string: $b->columnName);
            }
            return $a->sortOrder - $b->sortOrder;
        });
        foreach ($this->columns as $column) {
            $content .= " * @property " . $column->phpDataType;
            if ($column->isNullable) {
                $content .= "|null";
            }
            $content .= " $" . $column->columnName . PHP_EOL;
        }

        if (count(value: $this->foreignKeyColumns) > 0) {
            $content .= " *" . PHP_EOL;
            foreach ($this->foreignKeyColumns as $column) {
                $content .= " * @property " . $column['foreignModelName'];
                if ($column['isNullable']) {
                    $content .= "|null";
                }
                $content .= " $" . $column['methodName'] . PHP_EOL;
            }
        }

        $content .= " *" . PHP_EOL;
        $content .= " * AUTO GENERATED FILE DO NOT MODIFY" . PHP_EOL;
        $content .= " */" . PHP_EOL;
        return $content;
    }


    private function getCompositeKeyMethods(): string {
        $content = PHP_EOL . PHP_EOL;

        $content .= '    /** @return Mixed[] */' . PHP_EOL;
        $content .= "    public function getKey(): array {" . PHP_EOL;
        $content .= "        \$attributes = [];" . PHP_EOL;
        $content .= "        foreach (\$this->primaryKeyArray as \$key) {" . PHP_EOL;
        $content .= "            \$attributes[\$key] = \$this->getAttribute(\$key);" . PHP_EOL;
        $content .= "        }" . PHP_EOL;
        $content .= "        return \$attributes;" . PHP_EOL;
        $content .= "    }" . PHP_EOL . PHP_EOL;


        $content .= "    /**" . PHP_EOL;
        $content .= "     * @param array<string, string> \$ids # Ids in the form ['key1' => 'value1', 'key2' => 'value2']" . PHP_EOL;
        $content .= "     * @param array<string> \$columns" . PHP_EOL;
        $content .= "     * @return $this->modelClassName|null" . PHP_EOL;
        $content .= "     */" . PHP_EOL;
        $content .= "    public static function find(array \$ids, array \$columns = ['*']): $this->modelClassName|null {" . PHP_EOL;
        $content .= "        \$me = new self;" . PHP_EOL;
        $content .= "        \$query = \$me->newQuery();" . PHP_EOL;
        $content .= "        foreach (\$me->primaryKeyArray as \$key) {" . PHP_EOL;
        $content .= "            \$query->where(column: \$key, operator: '=', value: \$ids[\$key]);" . PHP_EOL;
        $content .= "        }" . PHP_EOL;
        $content .= "        \$result = \$query->first(\$columns);" . PHP_EOL;
        $content .= "        return \$result instanceof self ? \$result : null;" . PHP_EOL;
        $content .= "    }" . PHP_EOL . PHP_EOL;


        $content .= "    /**" . PHP_EOL;
        $content .= "     * @param array<string, string> \$ids # Ids in the form ['key1' => 'value1', 'key2' => 'value2']" . PHP_EOL;
        $content .= "     * @param array<string> \$columns" . PHP_EOL;
        $content .= "     * @return $this->modelClassName" . PHP_EOL;
        $content .= "     */" . PHP_EOL;
        $content .= "    public static function findOrFail(array \$ids, array \$columns = ['*']): $this->modelClassName {" . PHP_EOL;
        $content .= "        \$result = self::find(ids: \$ids, columns: \$columns);" . PHP_EOL;
        $content .= "        return \$result ?? throw new RuntimeException(message: \"No result found for \" . self::class . \" with ids \" . json_encode(\$ids, JSON_THROW_ON_ERROR));" . PHP_EOL;
        $content .= "    }" . PHP_EOL . PHP_EOL;


        $content .= "    protected function setKeysForSaveQuery(\$query): EloquentBuilder { " . PHP_EOL;
        $content = $this->setPrimaryKeyQuery($content);

        $content .= "    protected function setKeysForSelectQuery(\$query): EloquentBuilder { " . PHP_EOL;
        return $this->setPrimaryKeyQuery($content);
    }

    private function setPrimaryKeyQuery(string $content): string {
        $content .= "        foreach (\$this->primaryKeyArray as \$key) {" . PHP_EOL;
        $content .= "            if (isset(\$this->\$key)) {" . PHP_EOL;
        $content .= "                \$query->where(column: \$key, operator: '=', value: \$this->\$key);" . PHP_EOL;
        $content .= "            } else {" . PHP_EOL;
        $content .= "                throw new RuntimeException(message: \"Missing primary key value for \$key\");" . PHP_EOL;
        $content .= "            }" . PHP_EOL;
        $content .= "        }" . PHP_EOL;
        $content .= "        return \$query;" . PHP_EOL;
        $content .= "    }" . PHP_EOL;
        return $content;
    }
}
