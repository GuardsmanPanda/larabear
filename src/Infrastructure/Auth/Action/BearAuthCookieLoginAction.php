<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Action;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearUserLoginHistoryCreator;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Crud\BearUserUpdater;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Enum\BearUserLoginTypeEnum;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use Illuminate\Support\Facades\Session;

final class BearAuthCookieLoginAction {
    public static function login(BearUser $user, BearUserLoginTypeEnum $login_type): void {
        BearUserLoginHistoryCreator::create(user_id: $user->id, login_type: $login_type);
        (new BearUserUpdater(model: $user))->setLastLoginNow()->update();
        Session::migrate(destroy: true);
        Session::put(key: 'bear_user_id', value: $user->id);
    }
}
