<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogResponseErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Http\Crud\BearLogRouteUsageCrud;
use GuardsmanPanda\Larabear\Infrastructure\Integrity\Service\ValidateAndParseValue;
use Illuminate\Encryption\Encrypter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class BearInitiateMiddleware {
    /** @var array<string> $headers */
    public static array $headers = ['X-Clacks-Overhead' => 'GNU Terry Pratchett'];
    private Encrypter $encrypt;

    public function __construct() {
        $key = ValidateAndParseValue::parseString(value: Config::get(key: 'bear.cookie.session_key'), errorMessage: 'bear.cookie.session_key must be set to  a string');
        $this->encrypt = new Encrypter(key: base64_decode($key), cipher: Config::get(key: 'app.cipher'));
    }

    public function handle(Request $request, Closure $next): Response {
        BearGlobalStateService::clearState();
        //----------------------------------------------------------------------------------------------------------
        //  Init the Req class and set headers to ensure browser does not store data if endpoint is auth secured.
        //----------------------------------------------------------------------------------------------------------
        BearGlobalStateService::setRequest($request);
        if ($request->bearerToken() !== null || $request->cookie(Config::get('session.cookie')) !== null) {
            self::$headers['Cache-Control'] = 'must-revalidate, no-store, private';
        }

        //  Trim strings and convert empty strings to null, potential todo: config value to ignore params (such as password).
        $this->trimAndConvertEmptyInputToNull($request);

        //  Decrypt the request cookies.
        $this->decryptCookies($request);

        //  Execute the request
        $resp = $next($request);

        //  Encrypt the response cookies.
        $this->encryptCookies($resp);

        //----------------------------------------------------------------------------------------------------------
        //  Apply headers to response
        //----------------------------------------------------------------------------------------------------------
        if ($resp instanceof Response) {
            foreach (self::$headers as $key => $value) {
                $resp->headers->set($key, $value);
            }
        } else {
            BearLogErrorCreator::create(
                message: 'Response is not an instance of Response, instead is ' . get_class($resp),
                namespace: 'larabear', key: 'initiate_middleware', severity: BearSeverityEnum::BASELINE
            );
        }
        return $resp;
    }


    private function trimAndConvertEmptyInputToNull(Request $request): void {
        $bags = [$request->query];
        if ($request->isJson()) {
            $bags[] = $request->json();
        } else if ($request->request !== $request->query) {
            $bags[] = $request->request;
        }
        foreach ($bags as $bag) {
            foreach ($bag->getIterator() as $key => $value) {
                if (!is_string($value)) {
                    continue;
                }
                $value = trim($value);
                $bag->set($key, $value === '' ? null : $value);
            }
        }
    }


    private function encryptCookies(Response $response): void {
        foreach ($response->headers->getCookies() as $cookie) {
            if (!is_string($cookie->getValue())) {
                throw new InvalidArgumentException(message: 'Cookie value must be a string.. name: ' . $cookie->getName());
            }
            $name = $cookie->getName();
            if (!str_starts_with(haystack: $name, needle: '__host-')) {
                throw new InvalidArgumentException(message: 'Cookie name must start with "__host-".. name: ' . $name);
            }
            $session_name = Config::get('session.cookie');
            if ($name !== $session_name) {
                throw new InvalidArgumentException(message: 'Cookie name must be the same as the session cookie.. name: ' . $name . ', session cookie: ' . $session_name);
            }
            $response->headers->removeCookie(name: $name, path: $cookie->getPath(), domain: $cookie->getDomain()); //TODO: Consider throwing error on insecure cookie parameters, instead of silently fixing.
            $response->headers->setCookie(new Cookie(
                name: $name,
                value: $this->encrypt->encrypt(hash_hmac('sha256', $name, $this->encrypt->getKey()) . '|' . $cookie->getValue()),
                expire: $cookie->getExpiresTime(),
                path: '/',
                secure: true,
                httpOnly: true,
                raw: $cookie->isRaw(),
                sameSite: $cookie->getSameSite()
            ));
        }
    }


    private function decryptCookies(Request $request): void {
        $session_name = Config::get('session.cookie');
        foreach ($request->cookies as $key => $cookie) {
            if ($key !== $session_name || !is_string($cookie)) {
                $request->cookies->remove($key);
                continue;
            }
            $value = $this->encrypt->decrypt($cookie);
            $expected_prefix = hash_hmac('sha256', $key, $this->encrypt->getKey()) . '|';
            if (!str_starts_with(haystack: $value, needle: $expected_prefix)) {
                throw new InvalidArgumentException(message: 'Cookie value does not pass integrity check.. name: ' . $key);
            }
            $request->cookies->set($key, substr($value, strlen($expected_prefix)));
        }
    }


    public function terminate(Request $request, Response $response): void {
        try {
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 400 && Config::get(key: 'bear.response_error_log.enabled') === true && BearGlobalStateService::getLogResponseError() && !in_array(needle: $statusCode, haystack: Config::get(key: 'bear.response_error_log.ignore_response_codes', default: []), strict: true)) {
                BearLogResponseErrorCreator::create(statusCode: $response->getStatusCode(), responseBody: is_string($response->getContent()) ? $response->getContent() : '');
            }
            if ($response->getStatusCode() < 400 && Config::get(key: 'bear.route_usage_log.enabled') === true) {
                $multiply = Config::get(key: 'bear.route_usage_log.log_one_in_every', default: 1);
                if (random_int(min: 1, max: $multiply) === 1) {
                    BearLogRouteUsageCrud::createOrUpdate(multiply: $multiply);
                }
            }
        } catch (Throwable $e) {
            BearLogErrorCreator::create(
                message: 'Bear middleware terminate error: ' . $e->getMessage(),
                namespace: "larabear",
                key: "initiate-middleware-terminate",
                severity: BearSeverityEnum::HIGH,
                exception: $e
            );
            Log::error(message: 'Bear middleware terminate error: ' . $e->getMessage(), context: ['exception' => $e]);
        }
    }
}
