<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Form;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\View;
use Illuminate\View\Component;

final class Select extends Component {
    /**
     * @param string $id
     * @param string $label
     * @param array<string|int, string> $options
     * @param string|int $selected
     */
    public function __construct(public readonly string $id, public string $label = '', public readonly array $options = [], public readonly string|int $selected = '') {
        if ($this->label === '') {
            $this->label = ucwords(string: str_replace(search: '_', replace: ' ', subject: $this->id));
        }
    }

    public function render(): View {
        return Resp::view(view: 'bear::form.select');
    }
}
