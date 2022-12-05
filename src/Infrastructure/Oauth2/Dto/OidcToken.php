<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Dto;

use Carbon\Carbon;
use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Integrity\Crud\BearIdempotencyCreator;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;
use RuntimeException;
use Throwable;

class OidcToken {
    public function __construct(
        public readonly string $userIdentifier,
        public readonly string|null $name,
        public readonly string $email,
        public readonly string $issuedToClientId,
        public readonly int|null    $notBefore,
        public readonly int    $expiresAt,
    ) {}

    public static function fromJwt(string $jwt, BearOauth2Client $client): self {
        try {
            $token = json_decode(base64_decode(str_replace('_', '/', str_replace('-', '+', explode('.', $jwt)[1]))), false, 512, JSON_THROW_ON_ERROR);
            if ($client->oauth2_client_id !== $token->aud) {
                BearLogErrorCreator::create(
                    message: "The application id in the JWT is not the same as the application id on the server. JWT: $token->aud, Server: $client->oauth2_client_id",
                    namespace: 'larabear-auth',
                    key: 'oidc',
                    severity: BearSeverityEnum::CRITICAL,
                );
                throw new RuntimeException(message: "Incorrect Application ID.");
            }
            $uniq = $token->jti ?? $token->uti ?? null;
            if ($uniq !== null) {
                    BearIdempotencyCreator::create(idempotency_key: $token->aud . ':' . $uniq);
            }
        } catch (Throwable $t) { //TODO Better error log.
            BearLogErrorCreator::create(
                message: "Error message: {$t->getMessage()}",
                namespace: 'larabear-auth',
                key: 'oidc-error',
                severity: BearSeverityEnum::CRITICAL,
            );
            throw new RuntimeException(message: "Token incorrectly formatted or already used.");
        }

        if ((property_exists($token, property: 'email_verified') && $token->email_verified === false)) {
            BearLogErrorCreator::create(
                message: "The email address in the JWT is not verified.",
                namespace: 'larabear-auth',
                key: 'oidc',
                severity: BearSeverityEnum::CRITICAL,
            );
            throw new RuntimeException(message: "Email address not verified.");
        }

        $ts = Carbon::now()->timestamp;
        if ((property_exists($token, property: 'nbf') && $token->nbf) > $ts || $token->exp < $ts) {
            BearLogErrorCreator::create(
                message: "The timestamp in the JWT is not valid. JWT: nbf: $token->nbf, exp: $token->exp, ts: $ts",
                namespace: 'larabear-auth',
                key: 'oidc',
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
