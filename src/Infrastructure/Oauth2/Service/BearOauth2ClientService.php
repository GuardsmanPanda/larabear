<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Service;

use GuardsmanPanda\Larabear\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearUserCreator;
use GuardsmanPanda\Larabear\Infrastructure\Config\Service\BearConfigService;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearLogErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud\BearOauth2ClientUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud\BearOauth2UserCreator;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud\BearOauth2UserUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Dto\OidcToken;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2User;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use RuntimeException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Throwable;

class BearOauth2ClientService {
    private const SAFETY_BUFFER_MINUTES = 10;

    public static function getAuthorizeRedirectResponse(BearOauth2Client $client, string $afterSignInRedirectPath = null, bool $loginUser = true, string $overwriteRedirectUri = null): RedirectResponse {
        $state = Str::random(length: 24);
        Session::put(key: 'oauth2_state', value: $state);
        Session::put(key: 'oauth2_redirect_path', value: $afterSignInRedirectPath);
        Session::put(key: 'oauth2_login_user', value: $loginUser);
        $overwriteRedirectUri ??= $client->oauth2_client_redirect_path;
        $overwriteRedirectUri ??= "/bear/auth/oauth2-client/$client->oauth2_client_id/callback";
        $redirect_uri = urlencode(string: config(key: 'app.url') . $overwriteRedirectUri);
        return new RedirectResponse(url: "$client->oauth2_authorize_uri?client_id=$client->oauth2_client_id&response_type=code&scope=$client->oauth2_user_scope&state=$state&redirect_uri=$redirect_uri");
    }

    public static function getUserFromCallback(BearOauth2Client $client, string $code, string $redirectUri, bool $createBearUser = false): BearOauth2User {
        $data = self::exchangeCode(code: $code, client: $client, redirect_uri: $redirectUri)->json();
        $token = OidcToken::fromJwt(jwt: $data['id_token'], client: $client);

        try {
            DB::beginTransaction();

            $bearOauth2User = BearOauth2User::where(column: 'oauth2_client_id', operator: '=', value: $token->issuedToClientId)
                ->where(column: 'oauth2_user_identifier', operator: '=', value: $token->userIdentifier)
                ->first();
            $bearUser = $bearOauth2User?->user;
            if ($bearUser === null && $createBearUser) {
                $bearUser = BearUserCreator::create(user_display_name: $token->name, user_email: $token->email, email_verified_at: Carbon::now());
            }

            if ($bearOauth2User === null) {
                return BearOauth2UserCreator::create(
                    oauth2_client_id: $token->issuedToClientId,
                    oauth2_user_identifier: $token->userIdentifier,
                    oauth2_scope: $data['scope'],
                    oauth2_user_email: $token->email,
                    oauth2_user_name: $token->name,
                    user_access_token_expires_at: Carbon::now()->addSeconds($data['expires_in']),
                    encrypted_user_access_token: $data['access_token'],
                    encrypted_user_refresh_token: $data['refresh_token'],
                    user: $bearUser
                );
            }
            $updater = new BearOauth2UserUpdater($bearOauth2User);
            $updater->setEncryptedUserRefreshToken(encrypted_user_refresh_token: $data['refresh_token'] ?? $bearOauth2User->encrypted_user_refresh_token)
                ->setEncryptedUserAccessToken(encrypted_user_access_token: $data['access_token'], user_access_token_expires_at: Carbon::now()->addSeconds($data['expires_in']))
                ->setOauth2UserName(oauth2_user_name: $token->name)
                ->setOauth2UserEmail(oauth2_user_email: $token->email);

            if ($updater->getUserId() === null) {
                $updater->setUserId(user_id: $bearUser?->id);
            }

            $result =  $updater->save();
            DB::commit();
            return $result;
        } catch (Throwable $e) {
            DB::rollBack();
            BearLogErrorCreator::create(
                message: "Error while getting user from callback",
                namespace: 'larabear', key: 'oauth2-user-from-callback',
                severity: BearSeverityEnum::CRITICAL,
                exception: $e
            );
            throw new RuntimeException(message: "Error while getting user from callback", previous: $e);
        }
    }

    public static function exchangeCode(string $code, BearOauth2Client $client, string $redirect_uri = null): Response {
        $resp = Http::asForm()->post(url: $client->oauth2_token_uri, data: [
            'code' => $code,
            'client_secret' => $client->encrypted_oauth2_client_secret,
            'grant_type' => 'authorization_code',
            'client_id' => $client->oauth2_client_id,
            'redirect_uri' => $redirect_uri ?? config(key: 'app.url') . $client->oauth2_client_redirect_path,
        ]);
        if ($resp->failed()) {
            BearLogErrorCreator::create(
                message: "Failed to exchange code for access token, client: $client->oauth2_client_id, message: {$resp->body()}",
                namespace: 'larabear-auth',
                key: 'oauth2-client-service-exchange-code',
                severity: BearSeverityEnum::CRITICAL,
            );
            throw new RuntimeException(message: $resp->body());
        }
        return $resp;
    }


    public static function getAccessToken(BearOauth2Client $client): string {
        if ($client->oauth2_client_access_token_expires_at > Carbon::now()->addMinutes(self::SAFETY_BUFFER_MINUTES)) {
            return $client->encrypted_oauth2_client_access_token ?? '';
        }
        return self::updateAccessToken($client);
    }

    private static function updateAccessToken(BearOauth2Client $client): string {
        try {
            DB::beginTransaction();
            $updater = BearOauth2ClientUpdater::fromOauth2ClientId(oauth2_client_id: $client->oauth2_client_id, lockForUpdate: true);
            // In case multiple request happens at the same time we may be queued here multiple times
            // So we check again to see if we have recently refreshed the token.
            if ($updater->getOauth2ClientAccessTokenExpiresAt() > Carbon::now()->addMinutes(self::SAFETY_BUFFER_MINUTES)) {
                DB::rollBack();
                return $updater->getEncryptedOauth2ClientAccessToken();
            }

            $resp = Http::asForm()->post($client->oauth2_token_uri, [
                'grant_type' => 'client_credentials',
                'client_id' => $client->oauth2_client_id,
                'client_secret' => $client->encrypted_oauth2_client_secret,
                'scope' => $client->oauth2_client_scope,
            ]);

            if ($resp->ok()) {
                $json = $resp->json();
                $updater->setEncryptedOauth2ClientAccessToken(
                    encrypted_oauth2_client_access_token: $json['access_token'],
                    oauth2_client_access_token_expires_at: Carbon::now()->addSeconds($json['expires_in']),
                )->save();
            } else {
                $updater->setClientAccessTokenErrorMessage(client_access_token_error_message: $resp->body())->save();
            }
            DB::commit();
            return $updater->getEncryptedOauth2ClientAccessToken();
        } catch (Throwable $t) {
            DB::rollBack();
            BearLogErrorCreator::create(
                message: "Failed to update access token for client $client->oauth2_client_id",
                namespace: 'larabear-auth',
                key: 'oauth2-client-access-token-update-failed',
                severity: BearSeverityEnum::CRITICAL,
                exception: $t
            );
            throw new RuntimeException(message: 'Failed to update client access token');
        }
    }
}
