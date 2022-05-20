<?php

namespace GuardsmanPanda\Larabear\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ViewErrorBag;

class SessionAuthMiddleware {
    public function __construct(private readonly SessionManager $manager, private readonly ViewFactory $view) { }

    public function handle(Request $request, Closure $next) {
        $session = $this->manager->driver()->setId($request->cookies->get(Config::get('session.cookie')));
        $this->startSession($request, $session);
        return $next($request);
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