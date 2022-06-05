<?php

namespace GuardsmanPanda\Larabear\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ViewErrorBag;
use Symfony\Component\HttpFoundation\Cookie;

class SessionAuthMiddleware {
    public string|int|null $userId = null;
    private array $config;

    public function __construct(private readonly SessionManager $manager, private readonly ViewFactory $view) {
        $this->config = Config::get(key: 'session');
    }

    public function handle(Request $request, Closure $next) {
        $session = $this->manager->driver();
        $session->setId($request->cookies->get(key: $this->config['cookie']));
        $this->startSession(request: $request, session: $session);
        $this->userId = $session->get(key: 'logged_in_user_id');

        $response = $next($request);

        $response->headers->setCookie(new Cookie(
            name: $this->config['cookie'],
            value: $session->getId(),
            expire: $this->config['expire_on_close'] ? 0 : (new Carbon())->addMinutes($this->config['lifetime']),
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
