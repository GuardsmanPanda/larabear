<?php

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Http\Request;

class BearGlobalStateService {
    private static string|null $accessTokenId = null;
    private static string|null $apiPrimaryKey = null;
    private static string|int|null $userId = null;
    private static Request|null $request = null;


    public static function clearState(): void {
        self::$accessTokenId = null;
        self::$apiPrimaryKey = null;
        self::$request = null;
        self::$userId = null;
        Req::$r = null;
    }


    public static function setUserId(string|int|null $userId): void {
        self::$userId = $userId;
    }

    public static function getUserId(): string|int|null {
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

    public static function getApiPrimaryKey(): string|null {
        return self::$apiPrimaryKey;
    }


    public static function setRequest(Request $request): void {
        self::$request = $request;
        Req::$r = $request;
    }

    public static function getRequest(): Request|null {
        return self::$request;
    }
}