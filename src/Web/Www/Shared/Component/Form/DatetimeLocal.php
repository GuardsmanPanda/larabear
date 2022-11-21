<?php

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Form;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DatetimeLocal extends Component {
    public function __construct(
        public readonly string $id,
        public string $label = '',
        public readonly string $placeholder = '',
    ) {
        if ($this->label === '') {
            $this->label = ucwords(str_replace('_', ' ', $this->id));
        }
    }

    public function render(): View {
        return view(view: 'bear::form.datetime-local');
    }
}
