<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\UserApi\User\Controller;

use GuardsmanPanda\Larabear\Infrastructure\Auth\Service\BearAuthService;
use GuardsmanPanda\Larabear\Web\UserApi\User\Service\LarabearUserApiUserService;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

final class LarabearUserApiUserController extends Controller {
    public function current(): JsonResponse {
        return LarabearUserApiUserService::getUserResponse(user: BearAuthService::getUser());
    }
}
