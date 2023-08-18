<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Service;

use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearTypeEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Http\Exception\LarabearParameterException;
use GuardsmanPanda\Larabear\Infrastructure\Integrity\Service\ValidateAndParseValue;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Route;
use RuntimeException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

final class Req {
    public static Request|null $r = null;

    public static function request(): Request {
        if (self::$r === null) {
            throw new RuntimeException(message: 'Not In Request Context');
        }
        return self::$r;
    }

    public static function acceptsJson(): bool {
        return self::request()->acceptsJson();
    }

    public static function hasHeader(string $key): bool {
        return self::$r?->hasHeader(key: $key) ?? false;
    }

    public static function header(string $key, bool $nullIfMissing = false): string|null {
        $value = self::$r?->header(key: $key);
        if ($value === null && $nullIfMissing) {
            return null;
        }
        if (!is_string(value: $value)) {
            throw new BadRequestHttpException(message: "Header '$key' is missing or not a string");
        }
        return $value;
    }

    /**
     * @return array<string, array<string>>
     */
    public static function allHeaders(): array {
        $value = self::$r?->header();
        if (!is_array(value: $value)) {
            throw new RuntimeException(message: 'Headers not found');
        }
        return $value;
    }

    public static function hostname(): string {
        return self::$r?->getHost() ?? 'CLI';
    }

    public static function referer(): string|null {
        return self::$r?->headers->get(key: 'referer');
    }

    public static function method(): string {
        return self::$r?->method() ?? 'CLI';
    }

    public static function path(): string|null {
        return self::$r?->path();
    }

    public static function routePath(): string|null {
        $route = self::$r?->route();
        return $route instanceof Route ? $route->uri() : null;
    }

    public static function ip(): string|null {
        return self::$r?->ip();
    }

    public static function ipCountry(): string|null {
        return self::hasHeader(key: 'CF_IPCOUNTRY') ? self::header(key: 'CF_IPCOUNTRY') : null;
    }

    public static function requestId(): string|null {
        return BearGlobalStateService::getRequestId();
    }

    public static function actionName(): string|null {
        $route = self::$r?->route();
        return $route instanceof Route ? $route->getActionName() : null;
    }

    public static function uri(): string|null {
        $route = self::$r?->route();
        return $route instanceof Route ? $route->uri() : null;
    }

    public static function isWriteRequest(): bool {
        return match (self::method()) {
            'GET', 'HEAD', 'OPTIONS' => false,
            default => true
        };
    }

    /**
     * @return array<string, mixed>
     */
    public static function allJsonData(bool $allowEmpty = false): array {
        $value = self::request()->json()?->all();
        if (count($value) === 0) {
            return $allowEmpty ? [] : throw new BadRequestHttpException(message: 'Request JSON is empty');
        }
        if (!is_array(value: $value) || !self::request()->isJson()) {
            throw new BadRequestHttpException(message: 'Request does not have application/json content type or is not valid JSON');
        }
        return $value;
    }

    /**
     * @return array<string, string>
     */
    public static function allFormData(bool $allowEmpty = false): array {
        $tmp = self::request()->all();
        return count($tmp) === 0 && !$allowEmpty ? throw new BadRequestHttpException(message: 'No Form Data') : $tmp;
    }

    /**
     * @return array<string, string>
     */
    public static function allQueryData(): array {
        $tmp = self::request()->query();
        return is_array(value: $tmp) ? $tmp : [];
    }

    public static function content(): string {
        return self::request()->getContent();
    }


    public static function has(string $key, bool $falseOnNull = false, bool $throwOnNull = false): bool {
        $req = self::request();
        if ($req->has(key: $key) !== true) {
            return false;
        }
        if ($falseOnNull && $req->get(key: $key) === null) {
            return false;
        }
        if ($throwOnNull && $req->get(key: $key) === null) {
            throw new BadRequestHttpException(message: "'$key' is null but must be set to a value.");
        }
        return true;
    }


    public static function getString(string $key, BearTypeEnum|string|null $defaultIfMissing = BearTypeEnum::UNDEFINED): string|null {
        if (!self::has(key: $key)) {
            if ($defaultIfMissing === null || is_string($defaultIfMissing)) {
                return $defaultIfMissing;
            }
            throw new BadRequestHttpException(message: "No input field named: $key and no default value provided");
        }
        $val = self::request()->input(key: $key);
        return $val === null ? null : ValidateAndParseValue::parseString(value: $val, errorMessage: "Input field '$key' error");
    }

    public static function getStringOrDefault(string $key, string $default = null): string {
        $value = self::request()->input(key: $key);
        return $value !== null ? ValidateAndParseValue::parseString(value: $value, errorMessage: "Input field '$key' error") : ($default ?? throw new BadRequestHttpException(message: "No input field named: $key and no default value provided"));
    }


    public static function getInt(string $key, BearTypeEnum|int|null $defaultIfMissing = BearTypeEnum::UNDEFINED): int|null {
        if (!self::has(key: $key)) {
            if ($defaultIfMissing === null || is_int($defaultIfMissing)) {
                return $defaultIfMissing;
            }
            throw new BadRequestHttpException(message: "No input field named: $key and no default value provided");
        }
        $val = self::request()->input(key: $key);
        return $val === null ? null : ValidateAndParseValue::parseInt(value: $val, errorMessage: "Input field '$key' error");
    }

    public static function getIntOrDefault(string $key, int $default = null): int {
        $value = self::request()->input(key: $key);
        return $value !== null ? ValidateAndParseValue::parseInt(value: $value, errorMessage: "Input field '$key' error") : ($default ?? throw new BadRequestHttpException(message: "No input field named: $key and no default value provided"));
    }


    public static function getFloat(string $key, BearTypeEnum|float|null $defaultIfMissing = BearTypeEnum::UNDEFINED): float|null {
        if (!self::has(key: $key)) {
            if ($defaultIfMissing === null || is_float($defaultIfMissing)) {
                return $defaultIfMissing;
            }
            throw new BadRequestHttpException(message: "No input field named: $key and no default value provided");
        }
        $val = self::request()->input(key: $key);
        return $val === null ? null : ValidateAndParseValue::parseFloat(value: $val, errorMessage: "Input field '$key' error");
    }

    public static function getFloatOrDefault(string $key, float $default = null): float {
        $value = self::request()->input(key: $key);
        return $value !== null ? ValidateAndParseValue::parseFloat(value: $value, errorMessage: "Input field '$key' error") : ($default ?? throw new BadRequestHttpException(message: "No input field named: $key and no default value provided"));
    }


    public static function getBool(string $key, BearTypeEnum|bool|null $defaultIfMissing = BearTypeEnum::UNDEFINED): bool|null {
        if (!self::has(key: $key)) {
            if ($defaultIfMissing === null || is_bool($defaultIfMissing)) {
                return $defaultIfMissing;
            }
            throw new BadRequestHttpException(message: "No input field named: $key and no default value provided");
        }
        $val = self::request()->input(key: $key);
        return $val === null ? null : ValidateAndParseValue::parseBool(value: $val, errorMessage: "Input field '$key' error");
    }

    public static function getBoolOrDefault(string $key, bool $default = null): bool {
        $value = self::request()->input(key: $key);
        return $value !== null ? ValidateAndParseValue::parseBool(value: $value, errorMessage: "Input field '$key' error") : ($default ?? throw new BadRequestHttpException(message: "No input field named: $key and no default value provided"));
    }


    public static function getDate(string $key, BearTypeEnum|CarbonInterface|string|null $defaultIfMissing = BearTypeEnum::UNDEFINED): CarbonImmutable|null {
        if (!self::has(key: $key)) {
            if ($defaultIfMissing === null) {
                return null;
            }
            if ($defaultIfMissing instanceof CarbonInterface) {
                return $defaultIfMissing instanceof CarbonImmutable ? $defaultIfMissing : $defaultIfMissing->toImmutable();
            }
            if (is_string($defaultIfMissing)) {
                return ValidateAndParseValue::parseDate(value: $defaultIfMissing, errorMessage: "Input field '$key' error");
            }
            throw new BadRequestHttpException(message: "No input field named: $key and no default value provided");
        }
        $val = self::request()->input(key: $key);
        return $val === null ? null : ValidateAndParseValue::parseDate(value: $val, errorMessage: "Input field '$key' error");
    }


    public static function getDateOrDefault(string $key, CarbonImmutable $default = null): CarbonImmutable {
        $value = self::request()->input(key: $key);
        return $value !== null ? ValidateAndParseValue::parseDate(value: $value, errorMessage: "Input field '$key' error") : ($default ?? throw new BadRequestHttpException(message: "No input field named: $key and no default value provided"));
    }


    public static function getDateTime(string $key, BearTypeEnum|CarbonInterface|null $defaultIfMissing = BearTypeEnum::UNDEFINED, string $defaultTimezone = null): CarbonImmutable|null {
        if (!self::has(key: $key)) {
            if ($defaultIfMissing === null) {
                return null;
            }
            if ($defaultIfMissing instanceof CarbonInterface) {
                return $defaultIfMissing instanceof CarbonImmutable ? $defaultIfMissing : $defaultIfMissing->toImmutable();
            }
            throw new BadRequestHttpException(message: "No input field named: $key and no default value provided");
        }
        $val = self::request()->input(key: $key);
        $timezone = self::getString(key: $key . "_timezone", defaultIfMissing: null) ?? $defaultTimezone;
        return $val === null ? null : ValidateAndParseValue::parseDateTime(value: $val, timezone: $timezone, errorMessage: 'You may need to include timezone as form_field_name_timezone or supply it in the Req::getDateTime() defaultTimezone parameter');
    }


    public static function getDateTimeOrDefault(string $key, CarbonImmutable $default = null, string $defaultTimezone = null): CarbonImmutable {
        $value = self::request()->input(key: $key);
        if ($value === null) {
            return $default ?? throw new BadRequestHttpException(message: "No input field named: $key and no default value provided");
        }
        $timezone = self::getString(key: $key . "_timezone", defaultIfMissing: null) ?? $defaultTimezone;
        return ValidateAndParseValue::parseDateTime(value: $value, timezone: $timezone, errorMessage: 'You may need to include timezone as form_field_name_timezone or supply it in the Req::getDateTimeOrDefault() defaultTimezone parameter');
    }


    /**
     * @param string $key
     * @param BearTypeEnum|array<mixed>|null $defaultIfMissing
     * @return array<string, mixed>|null
     */
    public static function getArray(string $key, BearTypeEnum|array|null $defaultIfMissing = BearTypeEnum::UNDEFINED): array|null {
        if (!self::has(key: $key)) {
            if ($defaultIfMissing === null || is_array($defaultIfMissing)) {
                return $defaultIfMissing;
            }
            throw new BadRequestHttpException(message: "No input field named: $key and no default value provided");
        }
        $val = self::request()->input(key: $key);
        return $val === null ? null : ValidateAndParseValue::parseArray(value: $val, errorMessage: "Input field '$key' error");
    }


    /**
     * @param string $key
     * @param BearTypeEnum|array<mixed>|null $defaultIfMissing
     * @return array<mixed>|null
     */
    public static function getJson(string $key, BearTypeEnum|array|null $defaultIfMissing = BearTypeEnum::UNDEFINED): array|null {
        if (!self::has(key: $key)) {
            if ($defaultIfMissing === null || is_array($defaultIfMissing)) {
                return $defaultIfMissing;
            }
            throw new BadRequestHttpException(message: "No input field named: $key and no default value provided");
        }
        $val = self::request()->input(key: $key);
        if ($val === null) {
            return null;
        }
        return ValidateAndParseValue::parseJsonToArray(value: $val, errorMessage: "Input field '$key' error");
    }

    /**
     * @param string $key
     * @param array<mixed>|null $default
     * @return array<mixed>
     */
    public static function getJsonOrDefault(string $key, array $default = null): array {
        $value = self::request()->input(key: $key);
        if ($value === null) {
            return $default ?? throw new BadRequestHttpException(message: "No input field named: $key and no default value provided");
        }
        return ValidateAndParseValue::parseJsonToArray(value: $value, errorMessage: "Input field '$key' error");
    }


    /**
     * @param string $key
     * @param BearTypeEnum|ArrayObject<string|int, mixed>|null $defaultIfMissing
     * @return ArrayObject<string|int, mixed>|null
     */
    public static function getArrayObject(string $key, BearTypeEnum|ArrayObject|null $defaultIfMissing = BearTypeEnum::UNDEFINED): ArrayObject|null {
        if (!self::has(key: $key)) {
            if ($defaultIfMissing === null || $defaultIfMissing instanceof ArrayObject) {
                return $defaultIfMissing;
            }
            throw new LarabearParameterException(parameter: $key, detail: "No input field named: $key and no default value provided");
        }
        $val = self::request()->input(key: $key);
        if ($val === null) {
            return null;
        }
        return ValidateAndParseValue::parseJsonToArrayObject(value: $val, errorMessage: "Input field '$key' error");
    }

    /**
     * @param string $key
     * @param ArrayObject<string|int, mixed>|null $default
     * @return ArrayObject<string|int, mixed>
     */
    public static function getArrayObjectOrDefault(string $key, ArrayObject $default = null): ArrayObject {
        $value = self::request()->input(key: $key);
        if ($value === null) {
            return $default ?? throw new LarabearParameterException(parameter: $key, detail: "No input field named: $key and no default value provided");
        }
        return ValidateAndParseValue::parseJsonToArrayObject(value: $value, errorMessage: "Input field '$key' error");
    }


    public static function getFile(string $key, BearTypeEnum|null $defaultIfMissing = BearTypeEnum::UNDEFINED): UploadedFile|null {
        foreach (self::request()->allFiles() as $name => $file) {
            if ($name === $key) {
                return $file;
            }
        }
        return $defaultIfMissing === null ? null : throw new LarabearParameterException(parameter: $key, detail: "No file field named: $key present in the request.");
    }
}
