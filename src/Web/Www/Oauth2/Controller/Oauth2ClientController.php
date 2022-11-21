<?php

namespace GuardsmanPanda\Larabear\Web\Www\Oauth2\Controller;

use Illuminate\Routing\Controller;
use Illuminate\View\View;

class Oauth2ClientController extends Controller {

    public function index(): View {
        return view(view: 'larabear-oauth2::client.index');
    }
}
