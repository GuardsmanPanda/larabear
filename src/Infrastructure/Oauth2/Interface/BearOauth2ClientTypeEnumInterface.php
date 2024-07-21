<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Interface;

use GuardsmanPanda\Larabear\Infrastructure\App\Interface\BearDatabaseBackedEnumInterface;

interface BearOauth2ClientTypeEnumInterface extends BearDatabaseBackedEnumInterface {
    public function getValue(): string;
    public function getAuthorizeUri(): string;
    public function getTokenUri(): string;
    public function getDefaultScope(): string;

}