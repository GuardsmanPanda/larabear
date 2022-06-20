<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Service;

use Carbon\CarbonImmutable;
use GuardsmanPanda\Larabear\Infrastructure\Integrity\Service\ValidateAndParseValue;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use RuntimeException;
use stdClass;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class Req {
    public static Request|null $r = null;

    public static function hasHeader(string $name): bool {
        return self::$r?->hasHeader($name);
    }

    public static function header(string $name, bool $nullIfMissing = false): string|null {
        $value = self::$r->header($name);
        if ($value === null && $nullIfMissing) {
            return null;
        }
        if (!is_string($value)) {
            throw new BadRequestHttpException(message: "Header '$name' is missing or not a string");
        }
        return $value;
    }

    /**
     * @return array<string, array<string>>
     */
    public static function allHeaders(): array {
        $value = self::$r?->header();
        if (!is_array($value)) {
            throw new RuntimeException(message: 'Headers not found');
        }
        return $value;
    }

    public static function hostname(): string {
        return self::$r?->getHost();
    }

    public static function method(): string {
        return self::$r?->method() ?? 'CLI';
    }

    public static function path(): string|null {
        return self::$r?->path();
    }

    public static function userAgent(): string|null {
        return self::$r?->userAgent();
    }

    public static function ip(): string|null {
        return self::$r?->ip();
    }

    public static function ipCountry(): string {
        return self::hasHeader(name: 'CF_IPCOUNTRY') ? self::header(name: 'CF_IPCOUNTRY') : 'XX';
    }

    public static function actionName(): string|null {
        return self::$r?->route()?->getActionName();
    }

    public static function uri(): string|null {
        return self::$r?->route()?->uri();
    }

    public static function isWriteRequest(): bool {
        return match (self::method()) {
            'GET', 'HEAD' => false,
            default => true
        };
    }

    /**
     * @return array<string, mixed>
     */
    public static function allJsonData(bool $allowEmpty = false): array {
        if (!self::$r?->isJson()) {
            throw new BadRequestHttpException(message: 'Request does not have application/json content type');
        }
        $tmp = self::$r?->json()?->all();
        return empty($tmp) && !$allowEmpty ? throw new BadRequestHttpException(message: 'No Json Data') : $tmp;
    }

    public static function allFormData(string $key, bool $allowEmpty = false): array {
        $tmp = self::$r?->request->all();
        return empty($tmp) && !$allowEmpty ? throw new BadRequestHttpException(message: 'No Form Data') : $tmp;
    }

    public static function allQueryData(): array {
        return self::$r?->query() ?? [];
    }

    public static function content(): string {
        return self::$r?->getContent() ?? throw new BadRequestHttpException(message: 'No Content');
    }


    public static function has(string $key, bool $falseOnNull = false, bool $throwOnNull = false): bool {
        $result = self::$r?->has($key) ?? false;
        if ($result === false) {
            return false;
        }
        if ($falseOnNull && self::$r?->get($key) === null) {
            return false;
        }
        if ($throwOnNull && self::$r?->get($key) === null) {
            throw new BadRequestHttpException(message: "'$key' is null but must be set to a value.");
        }
        return true;
    }


    public static function getString(string $name): ?string {
        if (!self::has($name)) {
            throw new BadRequestHttpException(message: "No input field named: $name");
        }
        $val = self::$r->get($name);
        return $val === null ? null : ValidateAndParseValue::parseString($val);
    }

    public static function getInt(string $name): ?int {
        if (!self::has($name)) {
            throw new BadRequestHttpException(message: "No input field named: $name");
        }
        $val = self::$r->get($name);
        return $val === null ? null : ValidateAndParseValue::parseInt($val);
    }

    public static function getFloat(string $name): ?float {
        if (!self::has($name)) {
            throw new BadRequestHttpException(message: "No input field named: $name");
        }
        $val = self::$r->get($name);
        return $val === null ? null : ValidateAndParseValue::parseFloat($val);
    }

    public static function getBool(string $name): ?bool {
        if (!self::has($name)) {
            throw new BadRequestHttpException(message: "No input field named: $name");
        }
        $val = self::$r->get($name);
        return $val === null ? null : ValidateAndParseValue::parseBool($val);
    }

    /**
     * @param string $name
     * @return array<string, mixed>|null
     */
    public static function getArray(string $name): ?array {
        if (!self::has($name)) {
            throw new BadRequestHttpException(message: "No input field named: $name");
        }
        $val = self::$r->get($name);
        return $val === null ? null : ValidateAndParseValue::parseArray($val);
    }

    /**
     * @param string $name
     * @return stdClass|null
     */
    public static function getJson(string $name): stdClass|null {
        if (!self::has($name)) {
            throw new BadRequestHttpException(message: "No input field named: $name");
        }
        $val = self::$r->get($name);
        if ($val === null) {
            return null;
        }
        if (is_array($val)) {
            return (object)ValidateAndParseValue::parseJsonToArray($val);
        }
        if (is_string($val)) {
            return ValidateAndParseValue::parseJsonToStdClass($val);
        }
        throw new BadRequestHttpException(message: "Input field named: $name, is not a json string or json array");
    }

    public static function getDate(string $name): ?CarbonImmutable {
        if (!self::has($name)) {
            throw new BadRequestHttpException(message: "No input field named: $name");
        }
        $val = self::$r->get($name);
        return $val === null ? null : ValidateAndParseValue::parseDate($val);
    }

    public static function getDateTime(string $name): ?CarbonImmutable {
        if (!self::has($name)) {
            throw new BadRequestHttpException(message: "No input field named: $name");
        }
        $val = self::$r->get($name);
        return $val === null ? null : ValidateAndParseValue::parseDateTime($val);
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
