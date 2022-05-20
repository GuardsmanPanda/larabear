<?php

namespace GuardsmanPanda\Larabear\Middleware;

use Closure;
use DateTime;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ViewErrorBag;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;

class SessionAuthMiddleware {
    private Session $session;
    private array $config;
    public function __construct(private readonly SessionManager $manager, private readonly ViewFactory $view) {
        $this->config = Config::get('session');
    }

    public function handle(Request $request, Closure $next) {
        $this->session = $this->manager->driver()->setId($request->cookies->get(Config::get('session.cookie')));
        $this->startSession($request, $this->session);

        $response = $next($request);

        $response->headers->setCookie(new Cookie(
            name: $this->config['cookie'],
            value: $this->session->getId(),
            expire: $this->config['expire_on_close'] ? 0 : new DateTime('+' . $this->config['lifetime'] . ' minutes'),
            path: $this->config['path'],
            domain: $this->config['domain'],
            secure: $this->config['secure'],
            httpOnly: $this->config['http_only'],
            sameSite: $this->config['same_site']
        ));

        $this->session->save();
        return $next($request);
    }


    public function terminate(Request $request, Response $response): void {
        if (random_int(1, $this->config['lottery'][1]) <= $this->config['lottery'][0]) {
            $this->session->getHandler()->gc($this->config['lifetime'] * 60);
        }
    }


    private function startSession(Request $request, Session $session): void {
        $session->setRequestOnHandler($request);
        $session->start();
        if ($request->isMethod('GET') && !$request->ajax()) {
            $session->setPreviousUrl($request->fullUrl());
        }
        $this->view->share('errors', $request->session()->get('errors') ?? new ViewErrorBag);
    }
}