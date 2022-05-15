<?php

namespace GuardsmanPanda\Larabear\Dto;

use Illuminate\Support\Facades\DB;

class OidcDto {
    public function __construct(
        public readonly string $user_identifier,
        public readonly string $email,
        public readonly string $issued_to_client_id,
        public readonly int $not_before,
        public readonly int $expires_at,
        public readonly string $token_unique_id,
    ) {}

    public static function fromJwt(string $jwt): self {
        $stdClass = json_decode(base64_decode(str_replace('_', '/', str_replace('-', '+', explode('.', $jwt)[1]))), false, 512, JSON_THROW_ON_ERROR);
        $uniq = $stdClass->aud . ':' . $stdClass->jti;
        DB::insert("INSERT INTO bear_idempotency (name_space, key) VALUES('oidc', ?)", [$uniq]);
        return new self(
            user_identifier: $stdClass->sub,
            email: $stdClass->email,
            issued_to_client_id: $stdClass->aud,
            not_before: $stdClass->nbf,
            expires_at: $stdClass->exp,
            token_unique_id: $stdClass->jti,
        );
    }
}
