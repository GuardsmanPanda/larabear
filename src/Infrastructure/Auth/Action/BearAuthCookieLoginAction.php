<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Action;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearUserUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use Illuminate\Support\Facades\Session;

final class BearAuthCookieLoginAction {
    public static function login(BearUser $user): void {
        (new BearUserUpdater(model: $user))->setLastLoginNow()->update();
        Session::migrate(destroy: true);
        Session::put(key: 'bear_user_id', value: $user->id);
    }
}
