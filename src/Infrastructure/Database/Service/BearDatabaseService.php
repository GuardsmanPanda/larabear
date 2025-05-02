<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Service;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use RuntimeException;

final class BearDatabaseService {
    public static function mustBeInTransaction(): void {
        if (App::runningUnitTests() || DB::transactionLevel() > 0) {
            return;
        }
        throw new RuntimeException(message: 'DB::transaction() must be called before calling this method.');
    }

    /**
     * @param array<string> $verbs
     * @return void
     */
    public static function mustBeProperHttpMethod(array $verbs): void {
        if (App::runningUnitTests() || App::runningInConsole()) {
            return;
        }
        if (!in_array(needle: Req::method()->value, haystack: $verbs, strict: true)) {
            throw new RuntimeException(message: 'This method can only be called in the following HTTP methods: ' . implode(separator: ', ', array: $verbs));
        }
    }

    public static function defaultConnectionDriver(): string {
        return Config::get(key: 'database.connections.' . Config::get(key: 'database.default') . '.driver');
    }


    /**
     * @param string $text
     * @return ArrayObject<int, string>
     */
    public static function postgresTextArrayToArrayObject(string $text): ArrayObject {
        $value = substr(string: $text, offset: 1, length: -1);
        $result = new ArrayObject();
        if ($value === '') {
            return $result;
        }
        foreach (explode(separator: ',', string: $value) as $element) {
            $result->append(str_starts_with($element, '"') ? substr(string: $element, offset: 1, length: -1) : $element);
        }
        return $result;
    }

    /**
     * @param array<array-key, string>|ArrayObject<array-key, string> $values
     */
    public static function iterableToPostgres(array|ArrayObject $values, bool $sort = true, bool $noDuplicates = true): string {
        if ($values instanceof ArrayObject) {
            $values = $values->getArrayCopy();
        }
        if (count($values) === 0) {
            return '{}';
        }
        if ($sort) {
            sort(array: $values);
        }
        $processed = [];
        foreach ($values as $element) {
            $element = str_contains(haystack: $element, needle: ' ') ? "\"$element\"" : $element;
            if (str_contains(haystack: $element, needle: ',')) {
                throw new RuntimeException(message: 'Array elements cannot contain a comma.');
            }
            if ($noDuplicates && in_array(needle: $element, haystack: $processed, strict: true)) {
                throw new RuntimeException(message: 'Array elements cannot be duplicated.');
            }
            $processed[] = $element;
        }
        return '{' . implode(separator: ',', array: $processed) . '}';
    }
}
