<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use Carbon\Carbon;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearAccessTokenUser;
use Illuminate\Support\Str;

class BearAccessTokenUserCreator {
    public static function create(
        string          $user_id,
        string          $access_token,
        int            $expiry_time_increment_in_minutes = 3600,
    ): BearAccessTokenUser {
        $token = new BearAccessTokenUser();
        $token->id = Str::uuid()->toString();
        $token->user_id = $user_id;
        $token->hashed_access_token = hash(algo: 'xxh128', data: $access_token);
        $token->expiry_time_increment_in_minutes = $expiry_time_increment_in_minutes;
        $token->expires_at = Carbon::now()->addSeconds($expiry_time_increment_in_minutes);
        $token->invalid_at = Carbon::now()->addSeconds($expiry_time_increment_in_minutes);
        $token->save();
        return $token;
    }
}
