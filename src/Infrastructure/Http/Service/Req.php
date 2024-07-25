<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Service;

use Carbon\CarbonImmutable;
use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearHttpMethodEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
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

    public static function header(string $key): string {
        $value = self::$r?->header(key: $key);
        if (!is_string(value: $value)) {
            throw new BadRequestHttpException(message: "Header '$key' is missing or an array");
        }
        return $value;
    }

    public static function headerOrNull(string $key): string|null {
        $value = self::$r?->header(key: $key);
        if ($value === null) {
            return null;
        }
        if (is_array(value: $value)) {
            throw new BadRequestHttpException(message: "Header '$key' is an array");
        }
        return $value;
    }


    public static function hxRequest(): bool {
        return self::hasHeader(key: 'HX-Request');
    }

    public static function hxTarget(): string|null {
        return self::headerOrNull(key: 'HX-Target');
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

    public static function method(): BearHttpMethodEnum {
        if (self::$r === null) {
            return BearHttpMethodEnum::CLI;
        }
        return match (self::$r->method()) {
            'GET' => BearHttpMethodEnum::GET,
            'POST' => BearHttpMethodEnum::POST,
            'PUT' => BearHttpMethodEnum::PUT,
            'PATCH' => BearHttpMethodEnum::PATCH,
            'DELETE' => BearHttpMethodEnum::DELETE,
            'OPTIONS' => BearHttpMethodEnum::OPTIONS,
            'HEAD' => BearHttpMethodEnum::HEAD,
            default => throw new RuntimeException(message: 'Unknown HTTP Method')
        };
    }

    public static function path(): string {
        return self::$r?->path() ?? 'CLI';
    }

    public static function routePath(): string {
        $route = self::$r?->route();
        return $route instanceof Route ? $route->uri() : 'CLI';
    }

    public static function ip(): string {
        return self::$r?->ip() ?? '0.0.0.0';
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
            BearHttpMethodEnum::GET, BearHttpMethodEnum::HEAD, BearHttpMethodEnum::OPTIONS => false,
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


    public static function has(string $key): bool {
        return self::request()->has(key: $key);
    }


    public static function getString(string $key, int $minLength = 0, int $maxLength = null): string {
        $val = self::getInput(key: $key);
        $result = ValidateAndParseValue::parseString(value: $val, errorMessage: "Input field '$key' error");
        if (strlen($result) < $minLength) {
            throw new BadRequestHttpException(message: "Input field '$key' must be at least $minLength characters long");
        }
        if ($maxLength !== null && strlen($result) > $maxLength) {
            throw new BadRequestHttpException(message: "Input field '$key' must be at most $maxLength characters long");
        }
        return $result;
    }

    public static function getStringOrNull(string $key, bool $isOptional = false): string|null {
        $val = self::getInput(key: $key, isOptional: $isOptional);
        return $val === null ? null : ValidateAndParseValue::parseString(value: $val, errorMessage: "Input field '$key' error");
    }

    public static function getStringOrDefault(string $key, string $default): string {
        $val = self::getInput(key: $key, isOptional: true);
        return $val === null ? $default : ValidateAndParseValue::parseString(value: $val, errorMessage: "Input field '$key' error");
    }


    public static function getInt(string $key, int $min = null, int $max = null): int {
        $val = self::getInput(key: $key);
        $result = ValidateAndParseValue::parseInt(value: $val, errorMessage: "Input field '$key' error");
        if ($min !== null && $result < $min) {
            throw new BadRequestHttpException(message: "Input field '$key' must be at least $min");
        }
        if ($max !== null && $result > $max) {
            throw new BadRequestHttpException(message: "Input field '$key' must be at most $max");
        }
        return $result;
    }

    public static function getIntOrNull(string $key, bool $isOptional = false): int|null {
        $val = self::getInput(key: $key, isOptional: $isOptional);
        return $val === null ? null : ValidateAndParseValue::parseInt(value: $val, errorMessage: "Input field '$key' error");
    }

    public static function getIntOrDefault(string $key, int $default): int {
        $val = self::getInput(key: $key, isOptional: true);
        return $val === null ? $default : ValidateAndParseValue::parseInt(value: $val, errorMessage: "Input field '$key' error");
    }


    public static function getFloat(string $key, float $min = null, float $max = null): float {
        $val = self::getInput(key: $key);
        $result = ValidateAndParseValue::parseFloat(value: $val, errorMessage: "Input field '$key' error");
        if ($min !== null && $result < $min) {
            throw new BadRequestHttpException(message: "Input field '$key' must be at least $min");
        }
        if ($max !== null && $result > $max) {
            throw new BadRequestHttpException(message: "Input field '$key' must be at most $max");
        }
        return $result;
    }

    public static function getFloatOrNull(string $key, bool $isOptional = false): float|null {
        $val = self::getInput(key: $key, isOptional: $isOptional);
        return $val === null ? null : ValidateAndParseValue::parseFloat(value: $val, errorMessage: "Input field '$key' error");
    }

    public static function getFloatOrDefault(string $key, float $default): float {
        $val = self::getInput(key: $key, isOptional: true);
        return $val === null ? $default : ValidateAndParseValue::parseFloat(value: $val, errorMessage: "Input field '$key' error");
    }


    public static function getBool(string $key): bool {
        $val = self::getInput(key: $key);
        return ValidateAndParseValue::parseBool(value: $val, errorMessage: "Input field '$key' error");
    }

    public static function getBoolOrNull(string $key, bool $isOptional = false): bool|null {
        $val = self::getInput(key: $key, isOptional: $isOptional);
        return $val === null ? null : ValidateAndParseValue::parseBool(value: $val, errorMessage: "Input field '$key' error");
    }

    public static function getBoolOrDefault(string $key, bool $default): bool {
        $val = self::getInput(key: $key, isOptional: true);
        return $val === null ? $default : ValidateAndParseValue::parseBool(value: $val, errorMessage: "Input field '$key' error");
    }


    public static function getDate(string $key): CarbonImmutable {
        return ValidateAndParseValue::parseDate(value: self::getString(key: $key), errorMessage: "Input field '$key' error");
    }

    public static function getDateOrNull(string $key, bool $isOptional = false): CarbonImmutable|null {
        $val = self::getStringOrNull(key: $key, isOptional: $isOptional);
        return $val === null ? null : ValidateAndParseValue::parseDate(value: $val, errorMessage: "Input field '$key' error");
    }

    public static function getDateOrDefault(string $key, CarbonImmutable $default): CarbonImmutable {
        $val = self::getStringOrNull(key: $key, isOptional: true);
        return $val === null ? $default : ValidateAndParseValue::parseDate(value: $val, errorMessage: "Input field '$key' error");
    }


    public static function getDateTime(string $key, string $defaultTimezone = null): CarbonImmutable {
        $val = self::getString(key: $key);
        $timezone = self::getStringOrNull(key: $key . "_timezone", isOptional: true) ?? $defaultTimezone;
        return ValidateAndParseValue::parseDateTime(value: $val, timezone: $timezone, errorMessage: 'You may need to include timezone as form_field_name_timezone or supply it in the Req::getDateTime() defaultTimezone parameter');
    }

    public static function getDateTimeOrNull(string $key, bool $isOptional = false, string $defaultTimezone = null): CarbonImmutable|null {
        $val = self::getStringOrNull(key: $key, isOptional: $isOptional);
        if ($val === null) {
            return null;
        }
        $timezone = self::getStringOrNull(key: $key . "_timezone", isOptional: true) ?? $defaultTimezone;
        return ValidateAndParseValue::parseDateTime(value: $val, timezone: $timezone, errorMessage: 'You may need to include timezone as form_field_name_timezone or supply it in the Req::getDateTimeOrNull() defaultTimezone parameter');
    }

    public static function getDateTimeOrDefault(string $key, CarbonImmutable $default, string $defaultTimezone = null): CarbonImmutable {
        $value = self::getStringOrNull(key: $key, isOptional: true);
        if ($value === null) {
            return $default;
        }
        $timezone = self::getStringOrNull(key: $key . "_timezone", isOptional: true) ?? $defaultTimezone;
        return ValidateAndParseValue::parseDateTime(value: $value, timezone: $timezone, errorMessage: 'You may need to include timezone as form_field_name_timezone or supply it in the Req::getDateTimeOrDefault() defaultTimezone parameter');
    }


    /**
     * @param string $key
     * @return array<mixed>
     */
    public static function getArray(string $key): array {
        if (!self::has(key: $key)) {
            throw new BadRequestHttpException(message: "No input field named: $key and no default value provided");
        }
        return ValidateAndParseValue::parseArray(value: self::request()->input(key: $key), errorMessage: "Input field '$key' error");
    }


    /**
     * @param string $key
     * @return array<mixed>
     */
    public static function getJson(string $key): array {
        if (!self::has(key: $key)) {
            throw new BadRequestHttpException(message: "No input field named: $key and no default value provided");
        }
        return ValidateAndParseValue::parseJsonToArray(value: self::request()->input(key: $key), errorMessage: "Input field '$key' error");
    }


    /**
     * @param string $key
     * @return ArrayObject<string|int, mixed>
     */
    public static function getArrayObject(string $key): ArrayObject {
        return ValidateAndParseValue::parseJsonToArrayObject(value: self::request()->input(key: $key), errorMessage: "Input field '$key' error");
    }


    public static function getFile(string $key): UploadedFile {
        foreach (self::request()->allFiles() as $name => $file) {
            if ($name === $key) {
                return $file;
            }
        }
        throw new BadRequestHttpException(message: "Input field '$key' is not a file or missing");
    }

    public static function getFileOrNull(string $key, bool $isOptional = false): UploadedFile|null {
        foreach (self::request()->allFiles() as $name => $file) {
            if ($name === $key) {
                return $file;
            }
        }
        return $isOptional ? null : throw new BadRequestHttpException(message: "Input field '$key' is not a file or missing");
    }


    private static function getInput(string $key, bool $isOptional = false): mixed {
        if (!$isOptional && !self::has(key: $key)) {
            throw new BadRequestHttpException(message: "Input field '$key' missing");
        }
        return self::request()->input(key: $key);
    }
}
