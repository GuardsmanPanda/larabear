<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Service;

use Carbon\Carbon;
use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud\BearOauth2UserUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use RuntimeException;
use Throwable;

final class BearOauth2UserService {
    private const int SAFETY_BUFFER_MINUTES = 10;

    public static function getAccessToken(BearOauth2User $user): string {
        if ($user->access_token_expires_at > Carbon::now()->addMinutes(self::SAFETY_BUFFER_MINUTES)) {
            return $user->encrypted_access_token ?? '';
        }
        return self::updateAccessToken($user);
    }

    private static function updateAccessToken(BearOauth2User $user): string {
        try {
            DB::beginTransaction();
            $updater = BearOauth2UserUpdater::fromId(id: $user->id, lockForUpdate: true);

            // In case multiple request happens at the same time we may be queued here multiple times
            // So we check again to see if we have recently refreshed the token.
            if ($updater->getAccessTokenExpiresAt() > Carbon::now()->addMinutes(self::SAFETY_BUFFER_MINUTES)) {
                DB::rollBack();
                return $updater->getEncryptedAccessToken();
            }

            $client = $user->oauth2Client;
            $resp = Http::asForm()->post($client->oauth2_client_type_enum->getTokenUri(), [
                'refresh_token' => $user->encrypted_refresh_token,
                'client_secret' => $client->encrypted_secret,
                'grant_type' => 'refresh_token',
                'client_id' => $client->id,
                'scope' => $user->scope,
            ]);

            if ($resp->ok()) {
                $json = $resp->json();
                if (array_key_exists(key: 'refresh_token', array: $json)) {
                    $updater->setEncryptedRefreshToken(encrypted_refresh_token: $json['refresh_token']);
                }
                $updater->setEncryptedAccessToken(
                    encrypted_access_token: $json['access_token'],
                    access_token_expires_at: Carbon::now()->addSeconds($json['expires_in'])
                )->update();
            } else {
                $updater->setAccessTokenErrorMessage(access_token_error_message: $resp->body())->update();
            }
            DB::commit();
            return $updater->getEncryptedAccessToken();
        } catch (Throwable $t) {
            DB::rollBack();
            BearErrorCreator::create(
                message: "Failed to update access token for user $user->id",
                slug: 'larabear::oauth2-update-user-access-token',
                severity: BearSeverityEnum::CRITICAL,
                exception: $t
            );
            throw new RuntimeException(message: 'Failed to refresh user access token');
        }
    }
}
