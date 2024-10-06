<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Integration\ExternalApi\Interface;

use GuardsmanPanda\Larabear\Infrastructure\App\Interface\BearDatabaseBackedEnumInterface;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Enum\BearExternalApiAuthEnum;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Model\BearExternalApi;
use Illuminate\Database\Eloquent\Casts\ArrayObject;

interface BearExternalApiEnumInterface extends BearDatabaseBackedEnumInterface {
    public function getValue(): string;

    public function description(): string;

    public function externalApiAuth(): BearExternalApiAuthEnum;

    public function baseUrl(): string|null;

    public function oauth2ClientId(): string|null;

    /**  @return ArrayObject<string, string> */
    public function baseHeadersJson(): ArrayObject;

    /**  @return ArrayObject<string, mixed> */
    public function metadataJson(): ArrayObject;

    public function getModel(): BearExternalApi;
}
