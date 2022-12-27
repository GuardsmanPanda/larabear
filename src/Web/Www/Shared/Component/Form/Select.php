<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Form;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component {
    public function __construct(public readonly string $id, public string $label = '', public readonly string|null $hxTrigger = null) {
        if ($this->label === '') {
            $this->label = ucwords(string: str_replace(search: '_', replace: ' ', subject: $this->id));
        }
    }

    public function render(): View {
        return view(view: 'bear::form.select');
    }
}
