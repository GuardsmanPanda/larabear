<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Command;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Enum\LarabearPermissionEnum;
use GuardsmanPanda\Larabear\Infrastructure\Config\Enum\LarabearConfigEnum;
use GuardsmanPanda\Larabear\Infrastructure\Console\Service\BearTransactionCommand;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Enum\BearCountryEnum;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Enum\BearCountrySubdivisionEnum;
use GuardsmanPanda\Larabear\Infrastructure\Locale\Enum\BearCountrySubdivisionTypeEnum;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Enum\LarabearOauth2ClientTypeEnum;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Enum\BearExternalApiAuthEnum;

final class LarabearInitCommand extends BearTransactionCommand {
    protected $signature = 'bear:init';
    protected $description = 'Initialize the larabear package';

    protected function handleInTransaction(): void {
        $this->info(string: "Initializing larabear package");
        BearCountrySubdivisionTypeEnum::syncToDatabase();
        BearCountryEnum::syncToDatabase();
        BearExternalApiAuthEnum::syncToDatabase();
        LarabearOauth2ClientTypeEnum::syncToDatabase();
        LarabearPermissionEnum::syncToDatabase();
        LarabearConfigEnum::syncToDatabase();

        BearCountrySubdivisionEnum::syncToDatabase(); // Must be after BearCountryEnum and BearCountrySubdivisionTypeEnum

        $this->info(string: "larabear package initialized");
    }
}
