<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Middleware;

use Carbon\Carbon;
use Closure;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearGlobalStateService;
use GuardsmanPanda\Larabear\Infrastructure\Config\Service\BearConfigService;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ViewErrorBag;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

final class BearSessionAuthMiddleware {
    /** @var array<string, mixed> $config */
    private array $config;

    public function __construct(private readonly SessionManager $manager, private readonly ViewFactory $view) {
        $this->config = Config::get(key: 'session');
    }

    public function handle(Request $request, Closure $next, string $extra = null): Response {
        $session = $this->manager->driver();
        $session->setId($request->cookies->get(key: $this->config['cookie']));
        $this->startSession(request: $request, session: $session);
        $bearUserId = $session->get(key: 'bear_user_id');

        //----------------------------------------------------------------------------------------------------------
        //  If we cannot find a userId in the session then only progress if explicitly allowed.
        //----------------------------------------------------------------------------------------------------------
        if ($bearUserId === null && $extra !== 'allow-guest') {
            $target = BearConfigService::getString(config_key: 'larabear::path-to-redirect-if-not-logged-in');
            if ($request->acceptsHtml()) {
                return new RedirectResponse(url: $target, headers: ['HX-Redirect' => $target]);
            }
            return new Response(content: 'Not logged in.', status: 401, headers: ['HX-Redirect' => $target]);
        }

        BearGlobalStateService::setUserId(userId: $bearUserId);
        $response = $next($request);

        $response->headers->setCookie(new Cookie(
            name: $this->config['cookie'],
            value: $session->getId(),
            expire: (new Carbon())->addMinutes($this->config['lifetime']),
            path: $this->config['path'],
            domain: $this->config['domain'],
            secure: $this->config['secure'],
            httpOnly: $this->config['http_only'],
            sameSite: $this->config['same_site']
        ));

        $session->save();
        return $response;
    }


    private function startSession(Request $request, Session $session): void {
        $session->setRequestOnHandler(request: $request);
        $session->start();
        $request->setLaravelSession(session: $session);
        if ($request->isMethod(method: 'GET') && !$request->ajax()) {
            $session->setPreviousUrl(url: $request->fullUrl());
        }
        $this->view->share(key: 'errors', value: $request->session()->get(key: 'errors') ?? new ViewErrorBag);
    }
}
