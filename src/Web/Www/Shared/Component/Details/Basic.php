<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Details;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;
use RuntimeException;

final class Basic  extends Component {
    public string $classes = "rounded-b shadow";
    public string$summaryClasses = "select-none  text-lg font-semibold cursor-pointer py-2 px-4 rounded-t shadow";

    public function __construct(public readonly string $summary, public readonly  string $color = 'gray') {
        $this->classes .= match ($this->color) {
            'gray' => ' bg-gray-50 shadow-gray-200',
            'emerald' => ' bg-emerald-50 shadow-emerald-200',
            default => throw new RuntimeException(message: 'Unknown color: ' . $this->color),
        };
        $this->summaryClasses .= match ($this->color) {
            'gray' => ' bg-gray-100 text-gray-900 shadow-gray-200',
            'emerald' => ' bg-emerald-100 text-emerald-900 shadow-emerald-200',
            default => throw new RuntimeException(message: 'Unknown color: ' . $this->color),
        };
    }

    public function render(): View {
        return Resp::view(view: 'bear::details.basic');
    }
}
