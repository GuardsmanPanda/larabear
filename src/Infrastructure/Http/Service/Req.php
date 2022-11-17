<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Service;

use Carbon\CarbonImmutable;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Integrity\Service\ValidateAndParseValue;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Route;
use JsonException;
use RuntimeException;
use stdClass;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class Req {
    public static Request|null $r = null;

    public static function hasHeader(string $key): bool {
        return self::$r?->hasHeader(key: $key) ?? false;
    }

    public static function header(string $key, bool $nullIfMissing = false): string|null {
        $value = self::$r->header(key: $key);
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

    public static function userAgent(): string|null {
        return self::$r?->userAgent();
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
        return self::$r?->route()?->getActionName();
    }

    public static function uri(): string|null {
        return self::$r?->route()?->uri();
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
        $tmp = self::$r?->json()?->all();
        if (empty($tmp) && $allowEmpty) {
            return $tmp;
        }
        if (!self::$r?->isJson()) {
            throw new BadRequestHttpException(message: 'Request does not have application/json content type');
        }
        return empty($tmp) ? throw new BadRequestHttpException(message: 'No Json Data') : $tmp;
    }

    public static function allObjectData(bool $allowEmpty = false): stdClass {
        if (!self::$r?->isJson()) {
            throw new BadRequestHttpException(message: 'Request does not have application/json content type');
        }
        try {
            $res = json_decode(self::$r->getContent(), false, 512, JSON_THROW_ON_ERROR);
            return !$allowEmpty && empty($res) ? throw new BadRequestHttpException(message: 'No request data in body') : $res;
        } catch (JsonException) {
            throw new BadRequestHttpException(message: 'Invalid Json Data');
        }
    }

    public static function allFormData(bool $allowEmpty = false): array {
        $tmp = self::$r?->request?->all();
        return empty($tmp) && !$allowEmpty ? throw new BadRequestHttpException(message: 'No Form Data') : $tmp;
    }

    public static function allQueryData(): array {
        return self::$r?->query() ?? [];
    }

    public static function content(): string {
        return self::$r?->getContent() ?? throw new BadRequestHttpException(message: 'No Content');
    }


    public static function has(string $key, bool $falseOnNull = false, bool $throwOnNull = false): bool {
        $result = self::$r?->has(key: $key) ?? false;
        if ($result === false) {
            return false;
        }
        if ($falseOnNull && self::$r?->get(key: $key) === null) {
            return false;
        }
        if ($throwOnNull && self::$r?->get(key: $key) === null) {
            throw new BadRequestHttpException(message: "'$key' is null but must be set to a value.");
        }
        return true;
    }


    public static function getString(string $key, bool $nullIfMissing = false): string|null {
        if (!self::has(key: $key)) {
            return $nullIfMissing ? null : throw new BadRequestHttpException(message: "No input field named: $key");
        }
        $val = self::$r?->input(key: $key);
        return $val === null ? null : ValidateAndParseValue::parseString(value: $val);
    }

    public static function getStringOrDefault(string $key, string $default): string {
        if (!self::has(key: $key, falseOnNull: true)) {
            return $default;
        }
        return ValidateAndParseValue::parseString(value: self::$r->input(key: $key) ?? $default);
    }


    public static function getInt(string $key, bool $nullIfMissing = false): int|null {
        if (!self::has(key: $key)) {
            return $nullIfMissing ? null : throw new BadRequestHttpException(message: "No input field named: $key");
        }
        $val = self::$r?->input(key: $key);
        return $val === null ? null : ValidateAndParseValue::parseInt(value: $val);
    }

    public static function getIntOrDefault(string $key, int $default): int {
        if (!self::has(key: $key, falseOnNull: true)) {
            return $default;
        }
        return ValidateAndParseValue::parseInt(value: self::$r->input(key: $key) ?? $default);
    }


    public static function getFloat(string $key, bool $nullIfMissing = false): float|null {
        if (!self::has(key: $key)) {
            return $nullIfMissing ? null : throw new BadRequestHttpException(message: "No input field named: $key");
        }
        $val = self::$r?->input(key: $key);
        return $val === null ? null : ValidateAndParseValue::parseFloat(value: $val);
    }

    public static function getFloatOrDefault(string $key, float $default): float {
        if (!self::has(key: $key, falseOnNull: true)) {
            return $default;
        }
        return ValidateAndParseValue::parseFloat(value: self::$r->input(key: $key) ?? $default);
    }


    public static function getBool(string $key, bool $nullIfMissing = false): bool|null {
        if (!self::has(key: $key)) {
            return $nullIfMissing ? null : throw new BadRequestHttpException(message: "No input field named: $key");
        }
        $val = self::$r?->input(key: $key);
        return $val === null ? null : ValidateAndParseValue::parseBool(value: $val);
    }

    public static function getBoolOrDefault(string $key, bool $default): bool {
        if (!self::has(key: $key, falseOnNull: true)) {
            return $default;
        }
        return ValidateAndParseValue::parseBool(value: self::$r->input(key: $key) ?? $default);
    }


    public static function getDate(string $key, bool $nullIfMissing = false): CarbonImmutable|null {
        if (!self::has(key: $key)) {
            return $nullIfMissing ? null : throw new BadRequestHttpException(message: "No input field named: $key");
        }
        $val = self::$r?->input(key: $key);
        return $val === null ? null : ValidateAndParseValue::parseDate(value: $val);
    }

    public static function getDateOrDefault(string $key, CarbonImmutable $default): CarbonImmutable {
        if (!self::has(key: $key, falseOnNull: true)) {
            return $default;
        }
        return ValidateAndParseValue::parseDate(value: self::$r->input(key: $key) ?? $default);
    }


    public static function getDateTime(string $key, bool $nullIfMissing = false): CarbonImmutable|null {
        if (!self::has(key: $key)) {
            return $nullIfMissing ? null : throw new BadRequestHttpException(message: "No input field named: $key");
        }
        $val = self::$r?->input(key: $key);
        $timezone = self::$r->input(key: $key . "_timezone");
        return $val === null ? null : ValidateAndParseValue::parseDateTime(value: $val, timezone: $timezone, errorMessage: 'You may need to include timezone as form_field_name_timezone');
    }

    public static function getDateTimeOrDefault(string $key, CarbonImmutable $default): CarbonImmutable {
        if (!self::has(key: $key, falseOnNull: true)) {
            return $default;
        }
        $val = self::$r?->input(key: $key);
        if ($val === null) {
            return $default;
        }
        $timezone = self::$r->input(key: $key . "_timezone");
        return ValidateAndParseValue::parseDateTime(value: $val, timezone: $timezone, errorMessage: 'You may need to include timezone as form_field_name_timezone');
    }


    /**
     * @param string $key
     * @param bool $nullIfMissing
     * @return array<string, mixed>|null
     */
    public static function getArray(string $key, bool $nullIfMissing = false): array|null {
        if (!self::has(key: $key)) {
            return $nullIfMissing ? null : throw new BadRequestHttpException(message: "No input field named: $key");
        }
        $val = self::$r?->input(key: $key);
        return $val === null ? null : ValidateAndParseValue::parseArray(value: $val);
    }


    /**
     * @param string $key
     * @param bool $nullIfMissing
     * @return stdClass|null
     */
    public static function getJson(string $key, bool $nullIfMissing = false): stdClass|null {
        if (!self::has(key: $key)) {
            return $nullIfMissing ? null : throw new BadRequestHttpException(message: "No input field named: $key");
        }
        $val = self::$r?->input(key: $key);
        if ($val === null) {
            return null;
        }
        if (is_array($val)) {
            return (object)ValidateAndParseValue::parseJsonToArray(value: $val);
        }
        if (is_string($val)) {
            return ValidateAndParseValue::parseJsonToStdClass(value: $val);
        }
        throw new BadRequestHttpException(message: "Input field named: $key, is not a json string or json array");
    }


    public static function getFile(string $key, bool $nullIfMissing = false): UploadedFile|null {
        foreach (self::$r->allFiles() as $name => $file) {
            if ($name === $key) {
                return $file;
            }
        }
        return $nullIfMissing ? null : throw new BadRequestHttpException(message: "No input field named: $key");
    }
}
