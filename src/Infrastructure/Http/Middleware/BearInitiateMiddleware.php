<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Middleware;

use Closure;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Encryption\Encrypter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;
use JsonException;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class BearInitiateMiddleware {
    public static array $headers = ['X-Clacks-Overhead' => 'GNU Terry Pratchett'];
    private Encrypter|null $encrypt = null;

    public function __construct(private readonly Application $app) {
        $key = Config::get('bear.cookie.session_key');
        if ($key !== null) {
            $this->encrypt = new Encrypter(key: base64_decode($key), cipher: Config::get('app.cipher'));
        }
    }

    public function handle(Request $request, Closure $next) {
        //----------------------------------------------------------------------------------------------------------
        //  First Handle maintenance mode
        //----------------------------------------------------------------------------------------------------------
        if ($this->app->isDownForMaintenance()) {
            try {
                $data = json_decode(file_get_contents($this->app->storagePath() . '/framework/down'), true, 512, JSON_THROW_ON_ERROR);
            } catch (JsonException $e) {
                throw new HttpException(statusCode: 500, message: 'The down file is not valid JSON.', previous: $e);
            }
            if (isset($data['redirect'])) {
                $path = $data['redirect'] === '/' ? $data['redirect'] : trim($data['redirect'], '/');
                if ($request->path() !== $path) {
                    return new RedirectResponse($path, 307);
                }
                $hh = isset($data['retry']) ? ['Retry-After' => $data['retry']] : [];
                if (isset($data['refresh'])) {
                    $hh['Refresh'] = $data['refresh'];
                }
                return new Response(content: $data['template'] ?? 'Service Unavailable', status: $data['status'] ?? 503, headers: $hh);
            }
        }

        //----------------------------------------------------------------------------------------------------------
        //  Init the Req class and set headers to ensure browser does not store data if endpoint is auth secured.
        //----------------------------------------------------------------------------------------------------------
        Req::$r = $request;
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
        if (method_exists($resp, 'header')) {
            foreach (self::$headers as $key => $value) {
                $resp->header($key, $value);
            }
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
                throw new InvalidArgumentException('Cookie value must be a string.. name: ' . $cookie->getName());
            }
            $name = $cookie->getName();
            if (!str_starts_with(haystack: $name, needle: '__host-')) {
                throw new InvalidArgumentException('Cookie name must start with "__host-".. name: ' . $name);
            }
            $session_name = Config::get('session.cookie');
            if ($name !== $session_name) {
                throw new InvalidArgumentException('Cookie name must be the same as the session cookie.. name: ' . $name . ', session cookie: ' . $session_name);
            }
            if ($this->encrypt === null) {
                throw new InvalidArgumentException('Session cookie encryption key is not set, please read the documentation.');
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
                throw new InvalidArgumentException('Cookie value does not pass integrity check.. name: ' . $key);
            }
            $request->cookies->set($key, substr($value, strlen($expected_prefix)));
        }
    }


    public function terminate(Request $request, Response $response): void {
        if (Config::get('bear.log_request_errors') !== true) {
            return;
        }
        $status_code = $response->getStatusCode();

        $time = -1;
        if (defined(constant_name: 'LARAVEL_START')) {
            $time = (int)((microtime(as_float: true) - get_defined_constants()['LARAVEL_START']) * 1000);
        }

        $query_json = null;
        if ($status_code >= 400) {
            try {
                $query = Req::allQueryData();
                $query_json = empty($query) ? null : json_encode(value: $query, flags: JSON_THROW_ON_ERROR);
            } catch (JsonException $e) {
                Log::error(message: 'Failed to encode query parameters: ' . $e->getMessage());
            }
        }

        DB::insert("
            INSERT INTO bear_access_token_log (request_ip, request_country_code, request_http_method, request_http_path, request_http_query, request_http_hostname, response_status_code, response_body, response_time_in_milliseconds, application_access_token_id)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
            [Req::ip(), Req::ipCountry(), Req::method(), Req::path(), $query_json, Req::hostname(), $status_code, $status_code >= 400 ? $response->getContent() : null, $time, self::$access_token_id]
        );
    }
}
