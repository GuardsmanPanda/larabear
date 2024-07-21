<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Dto;

use Carbon\Carbon;
use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;
use RuntimeException;
use Throwable;

final readonly class OidcToken {
    public function __construct(
        public string      $userIdentifier,
        public string|null $name,
        public string      $email,
        public string      $issuedToClientId,
        public int|null    $notBefore,
        public int         $expiresAt,
    ) {}

    public static function fromJwt(string $jwt, BearOauth2Client $client): self {
        try {
            $jwt = base64_decode(str_replace(search: '_', replace: '/', subject: str_replace(search: '-', replace: '+', subject: explode(separator: '.', string: $jwt)[1])), strict: true);
            if ($jwt === false) {
                BearErrorCreator::create(
                    message: "Failed to decode JWT",
                    slug: 'larabear::oidc',
                    severity: BearSeverityEnum::CRITICAL,
                );
                throw new RuntimeException(message: 'JWT could not be decoded');
            }
            $token = json_decode($jwt, false, 512, JSON_THROW_ON_ERROR);
            if ($client->id !== $token->aud) {
                BearErrorCreator::create(
                    message: "The application id in the JWT is not the same as the application id on the server. JWT: $token->aud, Server: $client->id",
                    slug: 'larabear::oidc',
                    severity: BearSeverityEnum::CRITICAL,
                );
                throw new RuntimeException(message: "Incorrect Application ID.");
            }
        } catch (Throwable $t) { //TODO Better error log.
            BearErrorCreator::create(
                message: "Error message: {$t->getMessage()}",
                slug: 'larabear::oidc-error',
                severity: BearSeverityEnum::CRITICAL,
            );
            throw new RuntimeException(message: "Token incorrectly formatted or already used.", previous: $t);
        }

        if ((property_exists($token, property: 'email_verified') && $token->email_verified === false)) {
            BearErrorCreator::create(
                message: "The email address in the JWT is not verified.",
                slug: 'larabear::oidc',
                severity: BearSeverityEnum::CRITICAL,
            );
            throw new RuntimeException(message: "Email address not verified.");
        }

        $ts = Carbon::now()->timestamp;
        if ((property_exists($token, property: 'nbf') && $token->nbf) > $ts || $token->exp < $ts) {
            BearErrorCreator::create(
                message: "The timestamp in the JWT is not valid. JWT: nbf: $token->nbf, exp: $token->exp, ts: $ts",
                slug: 'larabear::oidc',
                severity: BearSeverityEnum::CRITICAL,
            );
            throw new RuntimeException(message: "Incorrect Timestamp.");
        }

        return new self(
            userIdentifier: $token->sub ?? $token->oid,
            name: $token->name ?? $token->preferred_username ?? null,
            email: $token->email,
            issuedToClientId: $token->aud,
            notBefore: $token->nbf ?? null,
            expiresAt: $token->exp
        );
    }
}
