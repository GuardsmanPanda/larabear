<?php

namespace GuardsmanPanda\Larabear\Web\Www\Oauth2\Controller;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class Oauth2ClientController extends Controller {

    public function index(): View {
        return view(view: 'larabear-oauth2::client.index', data: [
            'clients' => DB::select(query: "SELECT * FROM bear_oauth2_client ORDER BY oauth2_client_slug"),
        ]);
    }
}
