<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App\Command;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Enum\LarabearPermissionEnum;
use GuardsmanPanda\Larabear\Infrastructure\Config\Enum\LarabearConfigEnum;
use GuardsmanPanda\Larabear\Infrastructure\Console\Service\BearTransactionCommand;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Enum\LarabearOauth2ClientTypeEnum;

final class LarabearInitCommand extends BearTransactionCommand {
    protected $signature = 'bear:init';
    protected $description = 'Initialize the larabear package';

    protected function handleInTransaction(): void {
        LarabearOauth2ClientTypeEnum::syncToDatabase();
        LarabearPermissionEnum::syncToDatabase();
        LarabearConfigEnum::syncToDatabase();
    }
}
