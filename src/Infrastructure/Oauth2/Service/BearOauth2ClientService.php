<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Service;

use GuardsmanPanda\Larabear\Infrastructure\App\Enum\BearSeverityEnum;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearUserCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use GuardsmanPanda\Larabear\Infrastructure\Error\Crud\BearErrorCreator;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud\BearOauth2ClientUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud\BearOauth2UserCreator;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Crud\BearOauth2UserUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Dto\OidcToken;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Enum\BearOauth2ClientTypeEnum;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2Client;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2User;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Ramsey\Collection\Set;
use RuntimeException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Throwable;

final class BearOauth2ClientService {
    private const SAFETY_BUFFER_MINUTES = 10;

    public static function oauth2ClientExists(string $clientId): bool {
        return BearOauth2Client::find(id: $clientId, columns: ['oauth2_client_id']) !== null;
    }

    public static function getAuthorizeRedirectResponse(BearOauth2Client $client, string $afterSignInRedirectPath = null, bool $loginUser = true, string $specialScope = null, bool $accountPrompt = false, bool $internalRedirect = false): RedirectResponse {
        if ($afterSignInRedirectPath !== null && !str_starts_with(haystack: $afterSignInRedirectPath, needle: '/')) {
            throw new RuntimeException(message: 'The redirect path must start with a slash.');
        }
        $state = Str::random(length: 24);
        Session::put(key: 'oauth2_state', value: $state);
        Session::put(key: 'oauth2_redirect_path', value: $afterSignInRedirectPath);
        Session::put(key: 'oauth2_login_user', value: $loginUser);

        $query_data = "client_id=$client->oauth2_client_id&response_type=code&state=$state";
        $query_data .= '&scope=' . self::buildScopeString(client: $client, scopeString: $specialScope ?? $client->oauth2_user_scope) . '&redirect_uri=';

        if ($internalRedirect === false && $client->oauth2_client_redirect_path !== null) {
            $query_data .= urlencode(string: config(key: 'app.url') . $client->oauth2_client_redirect_path);
        } else {
            $query_data .= urlencode(string: config(key: 'app.url') . "/bear/auth/oauth2-client/$client->oauth2_client_id/callback");
        }

        if ($client->oauth2_client_type === BearOauth2ClientTypeEnum::TWITCH) {
            $query_data .= '&claims=' . urlencode(string: json_encode(['id_token' => ['email' => null, 'email_verified' => null, 'preferred_username' => null]], JSON_THROW_ON_ERROR));
        }

        if ($client->oauth2_client_type === BearOauth2ClientTypeEnum::GOOGLE) {
            $query_data .= '&include_granted_scopes=true';
        }

        if ($accountPrompt) {
            $query_data .= match ($client->oauth2_client_type) {
                BearOauth2ClientTypeEnum::MICROSOFT, BearOauth2ClientTypeEnum::GOOGLE => '&prompt=select_account',
                BearOauth2ClientTypeEnum::HELP_SCOUT => '',
                default => throw new RuntimeException(message: "User prompt not supported for client type" . $client->oauth2_client_type->value),
            };
        }

        return new RedirectResponse(url: "$client->oauth2_authorize_uri?$query_data");
    }

    public static function getUserFromCallback(BearOauth2Client $client, string $code, string $redirectUri = null, bool $createBearUser = false): BearOauth2User {
        $redirectUri ??= trim(string: config(key: 'app.url'), characters: '/ ') . '/' . Req::path();
        $data = self::exchangeCode(code: $code, client: $client, redirect_uri: $redirectUri)->json();
        $token = OidcToken::fromJwt(jwt: $data['id_token'], client: $client);

        $bearOauth2User = BearOauth2User::where(column: 'oauth2_client_id', operator: '=', value: $token->issuedToClientId)
            ->where(column: 'oauth2_user_identifier', operator: '=', value: $token->userIdentifier)
            ->first();
        $bearUser = $bearOauth2User?->user;
        $bearUser ??= BearUser::where(column: 'user_email', operator: '=', value: $token->email)->first();
        if ($bearUser === null && $createBearUser) {
            $bearUser = BearUserCreator::create(
                user_display_name: $token->name ?? 'Unknown',
                user_email: $token->email,
                user_country_iso2_code: Req::ipCountry(),
                email_verified_at: Carbon::now(),
            );
        }

        if ($bearOauth2User === null) {
            return BearOauth2UserCreator::create(
                oauth2_client_id: $token->issuedToClientId,
                oauth2_user_identifier: $token->userIdentifier,
                oauth2_scope: is_array($data['scope']) ? implode(separator: ' ', array: $data['scope']) : $data['scope'],
                oauth2_user_email: $token->email,
                oauth2_user_name: $token->name,
                user_access_token_expires_at: Carbon::now()->addSeconds($data['expires_in']),
                encrypted_user_access_token: $data['access_token'],
                encrypted_user_refresh_token: $data['refresh_token'],
                user: $bearUser
            );
        }
        return (new BearOauth2UserUpdater($bearOauth2User))->setEncryptedUserRefreshToken(encrypted_user_refresh_token: $data['refresh_token'] ?? $bearOauth2User->encrypted_user_refresh_token)
            ->setEncryptedUserAccessToken(encrypted_user_access_token: $data['access_token'], user_access_token_expires_at: Carbon::now()->addSeconds($data['expires_in']))
            ->setOauth2UserName(oauth2_user_name: $token->name)
            ->setOauth2UserEmail(oauth2_user_email: $token->email)
            ->setOauth2Scope(oauth2_scope: is_array($data['scope']) ? implode(separator: ' ', array: $data['scope']) : $data['scope'])
            ->setUserId(user_id: $bearUser?->id)->update();
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
            BearErrorCreator::create(
                message: "Failed to exchange code for access token, client: $client->oauth2_client_id, message: {$resp->body()}",
                slug: 'larabear::oauth2-client-service-exchange-code',
                severity: BearSeverityEnum::CRITICAL,
            );
            try {
                $data = $resp->json();
                throw new RuntimeException(message: $data['message'] ?? $data['error'] ?? $resp->body());
            } catch (Throwable $e) {
                throw new RuntimeException(message: $resp->body(), previous: $e);
            }
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
                )->update();
            } else {
                $updater->setClientAccessTokenErrorMessage(client_access_token_error_message: $resp->body())->update();
            }
            DB::commit();
            return $updater->getEncryptedOauth2ClientAccessToken();
        } catch (Throwable $t) {
            DB::rollBack();
            BearErrorCreator::create(
                message: "Failed to update access token for client $client->oauth2_client_id",
                slug: 'larabear::oauth2-client-access-token-update-failed',
                severity: BearSeverityEnum::CRITICAL,
                exception: $t
            );
            throw new RuntimeException(message: 'Failed to update client access token');
        }
    }

    private static function buildScopeString(BearOauth2Client $client, string $scopeString = null): string {
        $scopes = new Set(setType: 'string');
        if ($scopeString !== null) {
            $separator = str_contains(haystack: $scopeString, needle: ' ') ? ' ' : '+';
            foreach (explode(separator: $separator, string: $scopeString) as $scope) {
                if (trim(string: $scope) !== '') {
                    $scopes->add(element: $scope);
                }
            }
        }
        if ($client->oauth2_client_type === BearOauth2ClientTypeEnum::MICROSOFT) {
            $scopes->add(element: 'offline_access');
            $scopes->add(element: 'openid');
            $scopes->add(element: 'profile');
            $scopes->add(element: 'email');
        }
        if ($client->oauth2_client_type === BearOauth2ClientTypeEnum::GOOGLE) {
            $scopes->add(element: 'https://www.googleapis.com/auth/userinfo.profile');
            $scopes->add(element: 'https://www.googleapis.com/auth/userinfo.email');
            $scopes->add(element: 'openid');
        }
        if ($client->oauth2_client_type === BearOauth2ClientTypeEnum::TWITCH) {
            $scopes->add(element: 'user:read:email');
            $scopes->add(element: 'openid');
        }
        return urlencode(implode(separator: ' ', array: $scopes->toArray()));
    }
}
