<?php

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RuntimeException;

class BearGlobalStateService {
    private static bool $logUnhandledException = true;
    private static string|null $accessTokenId = null;
    private static string|null $apiPrimaryKey = null;
    private static bool $logResponseError = true;
    private static Request|null $request = null;
    private static string|null $requestId = null;
    private static string|null $consoleId = null;
    private static string|null $userId = null;


    public static function clearState(): void {
        self::$logUnhandledException = true;
        self::$logResponseError = true;
        self::$accessTokenId = null;
        self::$apiPrimaryKey = null;
        self::$requestId = null;
        self::$consoleId = null;
        self::$request = null;
        self::$userId = null;
        Req::$r = null;
    }


    public static function setUserId(string|null $userId): void {
        self::$userId = $userId;
    }

    public static function getUserId(): string|null {
        return self::$userId;
    }

    public static function setAccessTokenId(string|null $accessTokenId): void {
        self::$accessTokenId = $accessTokenId;
    }

    public static function getAccessTokenId(): string|null {
        return self::$accessTokenId;
    }


    public static function setApiPrimaryKey(string|null $apiPrimaryKey): void {
        self::$apiPrimaryKey = $apiPrimaryKey;
    }

    public static function getApiPrimaryKey(): string {
        if (self::$apiPrimaryKey === null) {
            throw new RuntimeException('Api Primary Key is not set');
        }
        return self::$apiPrimaryKey;
    }


    public static function setLogResponseError(bool $value): void {
        self::$logResponseError = $value;
    }

    public static function getLogResponseError(): bool {
        return self::$logResponseError;
    }


    public static function setLogUnhandledException(bool $value): void {
        self::$logUnhandledException = $value;
    }

    public static function getLogUnhandledException(): bool {
        return self::$logUnhandledException;
    }


    public static function setRequest(Request $request): void {
        self::$request = $request;
        Req::$r = $request;
        if (Req::hasHeader(key: 'x-request-id')) {
            self::$requestId = Req::header(key: 'x-request-id');
        } else if (Req::hasHeader(key: 'cf-ray')) {
            self::$requestId = Req::header(key: 'cf-ray');
        } else {
            self::$requestId = Str::uuid()->toString();
        }
    }

    public static function getRequest(): Request|null {
        return self::$request;
    }


    public static function getRequestId(): string|null {
        return self::$requestId;
    }


    public static function setConsoleId(string $consoleId): void {
        self::$consoleId = $consoleId;
    }

    public static function getConsoleId(): string|null {
        return self::$consoleId;
    }
}
