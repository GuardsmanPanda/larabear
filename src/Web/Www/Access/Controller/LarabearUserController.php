<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Access\Controller;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LarabearUserController extends Controller {
    public function index(): View {
        return view(view: 'larabear-access::user.index', data: [
            'users' => DB::select(query: "
                SELECT u.* FROM bear_user u ORDER BY u.user_display_name
            "),
        ]);
    }
}