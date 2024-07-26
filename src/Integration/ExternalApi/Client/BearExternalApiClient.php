<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Client;

use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearHttpMethodEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2User;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Service\BearOauth2ClientService;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Service\BearOauth2UserService;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Enum\BearExternalApiAuthEnum;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Interface\BearExternalApiEnumInterface;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Model\BearExternalApi;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use InvalidArgumentException;
use RuntimeException;
use Symfony\Component\HttpFoundation\JsonResponse;

final class BearExternalApiClient {
    private static int $API_REQUEST_TIMEOUT = 90;

    /**
     * @param string $baseUrl
     * @param array<string, string> $baseHeaders
     * @param array<string, string> $baseQuery
     */
    public function __construct(
        private readonly string $baseUrl,
        private readonly array $baseHeaders = [],
        private readonly array $baseQuery = []
    ) {}


    /**
     * @param BearOauth2Client $client
     * @param string|null $baseUrl
     * @param array<string, string> $baseHeaders
     * @return BearExternalApiClient
     */
    public static function fromOauth2Client(BearOauth2Client $client, string $baseUrl = null, array $baseHeaders = []): self {
        return new self(
            baseUrl: $baseUrl ?? $client->client_base_url ?? throw new InvalidArgumentException(message: 'No base URL provided'),
            baseHeaders: ['Authorization' => 'Bearer ' . BearOauth2ClientService::getAccessToken(client: $client)] + $baseHeaders
        );
    }


    /**
     * @param string $clientId
     * @param string|null $baseUrl
     * @param array<string, string> $baseHeaders
     * @return self
     */
    public static function fromOauth2ClientId(string $clientId, string $baseUrl = null, array $baseHeaders = []): self {
        return self::fromOauth2Client(client: BearOauth2Client::findOrFail(id: $clientId), baseUrl: $baseUrl, baseHeaders: $baseHeaders);
    }


    /**
     * @param BearOauth2User $user
     * @param string|null $baseUrl
     * @param array<string, string> $baseHeaders
     * @return self
     */
    public static function fromOauth2User(BearOauth2User $user, string $baseUrl = null, array $baseHeaders = []): self {
        return new self(
            baseUrl: $baseUrl ?? $user->oauth2Client->client_base_url ?? throw new InvalidArgumentException(message: 'No base URL provided'),
            baseHeaders: ['Authorization' => 'Bearer ' . BearOauth2UserService::getAccessToken(user: $user)] + $baseHeaders
        );
    }


    public static function fromExternalApi(BearExternalApi $api, string $baseUrl = null): self {
        $headers = $api->base_headers_json?->getArrayCopy() ?? [];
        if ($api->external_api_auth_enum === BearExternalApiAuthEnum::OAUTH2_CLIENT) {
            return self::fromOauth2ClientId(clientId: $api->oauth2_client_id ?? throw new RuntimeException(message: 'OAUTH2_CLIENT API type must reference bear_oauth2_client'), baseUrl: $baseUrl ?? $api->base_url, baseHeaders: $headers);
        }
        if ($api->external_api_auth_enum === BearExternalApiAuthEnum::OAUTH2) {
            return self::fromOauth2User(user: $api->oauth2User ?? throw new RuntimeException(message: 'OAUTH2 API type must reference bear_oauth2_user'), baseUrl: $baseUrl ?? $api->base_url, baseHeaders: $headers);
        }

        $token = $api->encrypted_token ??  throw new InvalidArgumentException(message: "No access token for external API [$api->enum] provided");
        $query = [];
        if ($api->external_api_auth_enum->headerName() !== null) {
            $headers[$api->external_api_auth_enum->headerName()] = $api->external_api_auth_enum->tokenPrefix() . $token;
        }
        if ($api->external_api_auth_enum->queryName() !== null) {
            $query[$api->external_api_auth_enum->queryName()] = $api->external_api_auth_enum->tokenPrefix() . $token;
        }

        return new self(
            baseUrl: $baseUrl ?? $api->base_url ?? throw new InvalidArgumentException(message: 'No base URL provided'),
            baseHeaders: $headers,
            baseQuery: $query
        );
    }


    public static function fromEnum(BearExternalApiEnumInterface $enum, string $baseUrl = null): self {
        return self::fromExternalApi(api: $enum->getModel(), baseUrl: $baseUrl);
    }


    public static function fromGlobal(string $baseUrl = null): self {
        return self::fromExternalApi(api: BearExternalApi::findOrFail(id: BearGlobalStateService::getApiPrimaryKey()), baseUrl: $baseUrl);
    }


    /**
     * @param string $path
     * @param array<string, string> $headers
     * @param array<string, mixed> $additionalBodyContent
     * @param array<string, string> $additionalQuery
     * @return JsonResponse
     */
    public function requestToJsonResponse(string $path,  array $headers = [], array $additionalBodyContent = [], array $additionalQuery = []): JsonResponse {
        $resp = $this->request(path: $path, method: Req::method(), headers: $headers, body: Req::allJsonData(allowEmpty: true) + $additionalBodyContent, query: Req::allQueryData() + $additionalQuery);
        return new JsonResponse(data: $resp->body(), status: $resp->status(), json: true);
    }


    /**
     * @param string $path
     * @param BearHttpMethodEnum $method
     * @param array<string, string> $headers
     * @param array<string, mixed> $body
     * @param array<string, string> $query
     * @return array<string, mixed>
     */
    public function toArray(string $path, BearHttpMethodEnum $method = BearHttpMethodEnum::GET, array $headers = [], array $body = [], array $query = []): array {
        return $this->request(path: $path, method: $method, headers: $headers, body: $body, query: $query)->json();
    }


    /**
     * @param string $path
     * @param array<string, string> $headers
     * @param array<string, string> $query
     * @return array<string, mixed>
     */
    public function pagedGetToArray(string $path, array $headers = [], array $query = [], string $dataKey = 'value'): array {
        $json = $this->request(path: $path, headers: $headers, query: $query)->json();
        if (!array_key_exists($dataKey, $json)) {
            BearErrorCreator::create(
                message: 'Invalid response from API, data [' . $dataKey . '] not found in data [' . json_encode(value: $json) . ']',
                slug: 'larabear::invalid_api_response', severity: BearSeverityEnum::WARNING
            );
        }
        $value = $json[$dataKey] ?? [];
        while (array_key_exists('@odata.nextLink', $json)) {
            $json = Http::timeout(self::$API_REQUEST_TIMEOUT)->withHeaders($headers + $this->baseHeaders)->get($json['@odata.nextLink'])->json();
            if (!array_key_exists($dataKey, $json)) {
                BearErrorCreator::create(
                    message: 'Invalid response from API, data [' . $dataKey . '] not found in data [' . json_encode(value: $json) . ']',
                    slug: 'larabear::invalid_api_response', severity: BearSeverityEnum::WARNING
                );
            }
            foreach ($json[$dataKey] as $val) {
                $value[] = $val;
            }
        }
        while (array_key_exists('nextPageToken', $json) && $json['nextPageToken'] !== null && $json['nextPageToken'] !== '') {
            $query['pageToken'] = $json['nextPageToken'];
            $json = $this->request(path: $path, headers: $headers, query: $query)->json();
            if (!array_key_exists($dataKey, $json)) {
                BearErrorCreator::create(
                    message: 'Invalid response from API, data [' . $dataKey . '] not found in data [' . json_encode(value: $json) . ']',
                    slug: 'larabear::invalid_api_response', severity: BearSeverityEnum::WARNING
                );
            }
            foreach ($json[$dataKey] as $val) {
                $value[] = $val;
            }
        }
        return $value;
    }


    /**
     * @param string $path
     * @param array<string, string> $headers
     * @param array<string, string> $body
     * @return Response
     */
    public function formRequest(String $path, array $headers = [], array $body = []): Response {
        return $this->request(path: $path, method: BearHttpMethodEnum::POST, headers: $headers, body: $body, asForm: true);
    }


    /**
     * @param string $path
     * @param BearHttpMethodEnum $method
     * @param array<string, string> $headers
     * @param array<string, string> $body
     * @param array<string, string> $query
     * @return Response
     */
    public function request(
        string $path, BearHttpMethodEnum $method = BearHttpMethodEnum::GET,
        array $headers = [], array $body = [], array $query = [], bool $asForm = false
    ): Response {
        $final_url = str_starts_with(haystack: $path, needle: 'https://') ? $path : $this->baseUrl . $path;
        $pending = Http::withOptions(['query' => $query + $this->baseQuery, 'headers' => $headers + $this->baseHeaders])->timeout(seconds: self::$API_REQUEST_TIMEOUT);
        if ($asForm) {
            $pending = $pending->asForm();
        }
        return match ($method) {
            BearHttpMethodEnum::GET => $pending->get($final_url),
            BearHttpMethodEnum::POST => $pending->post($final_url, $body),
            BearHttpMethodEnum::PUT => $pending->put($final_url, $body),
            BearHttpMethodEnum::PATCH => $pending->patch($final_url, $body),
            BearHttpMethodEnum::DELETE => $pending->delete($final_url, $body),
            default => throw new RuntimeException(message: "Method [$method->value] not supported")
        };
    }
}
