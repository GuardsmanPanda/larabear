<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Form;

use Illuminate\View\Component;

class Csrf extends Component {
    public function render(): string {
        return '<input type="hidden" name="_token" value="' . csrf_token() . '">';
    }
}
