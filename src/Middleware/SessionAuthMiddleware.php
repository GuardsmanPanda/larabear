<?php

namespace GuardsmanPanda\Larabear\Middleware;

use Closure;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class SessionAuthMiddleware {
    public function __construct(private readonly ViewFactory $view) { }

    public function handle(Request $request, Closure $next) {
        // Share errors from previous requests. TODO, needs to run after start session.
        $this->view->share('errors', $request->session()->get('errors') ?? new ViewErrorBag);
        return $next($request);
    }
}