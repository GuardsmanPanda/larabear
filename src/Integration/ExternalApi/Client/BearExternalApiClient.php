<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\Api\Client;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2User;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Service\BearOauth2ClientService;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Service\BearOauth2UserService;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use InvalidArgumentException;
use RuntimeException;
use Symfony\Component\HttpFoundation\JsonResponse;

class BearExternalApiClient {
    private static int $API_REQUEST_TIMEOUT = 90;

    /**
     * @param string $baseUrl
     * @param array<string, string> $baseHeaders
     */
    public function __construct(private readonly string $baseUrl, private readonly array $baseHeaders = []) {}

    public static function fromOauth2Client(BearOauth2Client $client, string $baseUrl = null): self {
        return new self(
            baseUrl: $baseUrl ?? $client->oauth2_client_base_url ?? throw new InvalidArgumentException(message: 'No base URL provided'),
            baseHeaders: ['Authorization' => 'Bearer ' . BearOauth2ClientService::getAccessToken(client: $client)]
        );
    }

    /**
     * @param BearOauth2User $user
     * @param string|null $baseUrl
     * @param array<string, string> $baseHeaders
     * @return self
     */
    public static function fromOauth2User(BearOauth2User $user, string $baseUrl = null, array $baseHeaders = []): self {
        return new self(
            baseUrl: $baseUrl ?? $user->oauth2Client->oauth2_client_base_url ?? throw new InvalidArgumentException(message: 'No base URL provided'),
            baseHeaders: ['Authorization' => 'Bearer ' . BearOauth2UserService::getAccessToken(user: $user)] + $baseHeaders
        );
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
     * @param string $method
     * @param array<string, string> $headers
     * @param array<string, mixed> $body
     * @param array<string, string> $query
     * @return array<string, mixed>
     */
    public function toArray(string $path, string $method = 'GET', array $headers = [], array $body = [], array $query = []): array {
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
        $value = $json[$dataKey] ?? [];
        while (array_key_exists('@odata.nextLink', $json)) {
            $json =Http::timeout(self::$API_REQUEST_TIMEOUT)->withHeaders($headers + $this->baseHeaders)->get($json['@odata.nextLink'])->json();
            foreach ($json[$dataKey] as $val) {
                $value[] = $val;
            }
        }
        while (array_key_exists('nextPageToken', $json) && $json['nextPageToken'] !== null && $json['nextPageToken'] !== '') {
            $query['pageToken'] = $json['nextPageToken'];
            $json = $this->request(path: $path, headers: $headers, query: $query)->json();
            foreach ($json[$dataKey] as $val) {
                $value[] = $val;
            }
        }
        return $value;
    }

    /**
     * @param string $path
     * @param string $method
     * @param array<string, string> $headers
     * @param array<string, string> $body
     * @param array<string, string> $query
     * @return Response
     */
    private function request(string $path, string $method = 'GET', array $headers = [], array $body = [], array $query = []): Response {
        $final_url = str_starts_with(haystack: $path, needle: 'https://') ? $path : $this->baseUrl . $path;
        $pending = Http::withOptions(['query' => $query, 'headers' => $headers + $this->baseHeaders, 'timeout' => self::$API_REQUEST_TIMEOUT]);
        return match ($method) {
            'GET' => $pending->get($final_url),
            'POST' => $pending->post($final_url, $body),
            'PUT' => $pending->put($final_url, $body),
            'PATCH' => $pending->patch($final_url, $body),
            'DELETE' => $pending->delete($final_url, $body),
            default => throw new RuntimeException('Invalid HTTP method')
        };
    }
}
