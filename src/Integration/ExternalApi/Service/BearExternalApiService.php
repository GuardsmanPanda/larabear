<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Service;

use GuardsmanPanda\Larabear\Integration\ExternalApi\Model\BearExternalApi;

final class BearExternalApiService {
    public static function externalApiExists(string $externalApiSlug): bool {
        return BearExternalApi::find(id: $externalApiSlug, columns: ['external_api_slug']) !== null;
    }
}
