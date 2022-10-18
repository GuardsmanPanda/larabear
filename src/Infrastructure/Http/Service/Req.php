<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Service;

use Carbon\CarbonImmutable;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Integrity\Service\ValidateAndParseValue;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use RuntimeException;
use stdClass;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class Req {
    public static Request|null $r = null;

    public static function hasHeader(string $name): bool {
        return self::$r?->hasHeader(key: $name) ?? false;
    }

    public static function header(string $name, bool $nullIfMissing = false): string|null {
        $value = self::$r->header(key: $name);
        if ($value === null && $nullIfMissing) {
            return null;
        }
        if (!is_string(value: $value)) {
            throw new BadRequestHttpException(message: "Header '$name' is missing or not a string");
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
        return self::$r?->route()?->uri();
    }

    public static function userAgent(): string|null {
        return self::$r?->userAgent();
    }

    public static function ip(): string|null {
        return self::$r?->ip();
    }

    public static function ipCountry(): string|null {
        return self::hasHeader(name: 'CF_IPCOUNTRY') ? self::header(name: 'CF_IPCOUNTRY') : null;
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


    public static function getString(string $name): string|null {
        if (!self::has(key: $name)) {
            throw new BadRequestHttpException(message: "No input field named: $name");
        }
        $val = self::$r->input(key: $name);
        return $val === null ? null : ValidateAndParseValue::parseString(value: $val);
    }
    public static function getStringOrDefault(string $name, string $default = null): string|null {
        if (!self::has(key: $name, falseOnNull: true)) {
            return $default;
        }
        $val = self::$r->input(key: $name);
        return $val === null ? null : ValidateAndParseValue::parseString(value: $val);
    }


    public static function getInt(string $name): int|null {
        if (!self::has(key: $name)) {
            throw new BadRequestHttpException(message: "No input field named: $name");
        }
        $val = self::$r->input(key: $name);
        return $val === null ? null : ValidateAndParseValue::parseInt(value: $val);
    }
    public static function getIntOrDefault(string $name, int $default = null): int|null {
        if (!self::has(key: $name, falseOnNull: true)) {
            return $default;
        }
        $val = self::$r->input(key: $name);
        return $val === null ? null : ValidateAndParseValue::parseInt(value: $val);
    }


    public static function getFloat(string $name): float|null {
        if (!self::has(key: $name)) {
            throw new BadRequestHttpException(message: "No input field named: $name");
        }
        $val = self::$r->input(key: $name);
        return $val === null ? null : ValidateAndParseValue::parseFloat(value: $val);
    }
    public static function getFloatOrDefault(string $name, float $default = null): float|null {
        if (!self::has(key: $name, falseOnNull: true)) {
            return $default;
        }
        $val = self::$r->input(key: $name);
        return $val === null ? null : ValidateAndParseValue::parseFloat(value: $val);
    }


    public static function getBool(string $name): bool|null {
        if (!self::has(key: $name)) {
            throw new BadRequestHttpException(message: "No input field named: $name");
        }
        $val = self::$r->input(key: $name);
        return $val === null ? null : ValidateAndParseValue::parseBool(value: $val);
    }
    public static function getBoolOrDefault(string $name, bool $default = null): bool|null {
        if (!self::has(key: $name, falseOnNull: true)) {
            return $default;
        }
        $val = self::$r->input(key: $name);
        return $val === null ? null : ValidateAndParseValue::parseBool(value: $val);
    }


    public static function getDate(string $name): CarbonImmutable|null {
        if (!self::has(key: $name)) {
            throw new BadRequestHttpException(message: "No input field named: $name");
        }
        $val = self::$r->input(key: $name);
        return $val === null ? null : ValidateAndParseValue::parseDate(value: $val);
    }
    public static function getDateOrDefault(string $name, CarbonImmutable $default = null): CarbonImmutable|null {
        if (!self::has(key: $name, falseOnNull: true)) {
            return $default;
        }
        $val = self::$r->input(key: $name);
        return $val === null ? null : ValidateAndParseValue::parseDate(value: $val);
    }


    public static function getDateTime(string $name): CarbonImmutable|null {
        if (!self::has(key: $name)) {
            throw new BadRequestHttpException(message: "No input field named: $name");
        }
        $val = self::$r->input(key: $name);
        $timezone =  self::$r->input(key: $name . "_timezone");
        return $val === null ? null : ValidateAndParseValue::parseDateTime(value: $val, timezone: $timezone, errorMessage: 'You may need to include timezone as form_field_name_timezone');
    }
    public static function getDateTimeOrDefault(string $name, CarbonImmutable $default = null): CarbonImmutable|null {
        if (!self::has(key: $name, falseOnNull: true)) {
            return $default;
        }
        $val = self::$r->input(key: $name);
        $timezone =  self::$r->input(key: $name . "_timezone");
        return $val === null ? null : ValidateAndParseValue::parseDateTime(value: $val, timezone: $timezone, errorMessage: 'You may need to include timezone as form_field_name_timezone');
    }


    /**
     * @param string $name
     * @return array<string, mixed>|null
     */
    public static function getArray(string $name): array|null {
        if (!self::has(key: $name)) {
            throw new BadRequestHttpException(message: "No input field named: $name");
        }
        $val = self::$r->input(key: $name);
        return $val === null ? null : ValidateAndParseValue::parseArray(value: $val);
    }


    /**
     * @param string $name
     * @return stdClass|null
     */
    public static function getJson(string $name): stdClass|null {
        if (!self::has(key: $name)) {
            throw new BadRequestHttpException(message: "No input field named: $name");
        }
        $val = self::$r->input(key: $name);
        if ($val === null) {
            return null;
        }
        if (is_array($val)) {
            return (object)ValidateAndParseValue::parseJsonToArray(value: $val);
        }
        if (is_string($val)) {
            return ValidateAndParseValue::parseJsonToStdClass(value: $val);
        }
        throw new BadRequestHttpException(message: "Input field named: $name, is not a json string or json array");
    }


    public static function getFile(string $name): UploadedFile {
        foreach (self::$r->allFiles() as $key => $file) {
            if ($key === $name) {
                return $file;
            }
        }
        throw new BadRequestHttpException(message: "No input field named: $name");
    }
}
