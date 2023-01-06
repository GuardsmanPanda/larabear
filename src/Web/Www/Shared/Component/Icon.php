<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use GuardsmanPanda\Larabear\Web\Www\Shared\Service\HeroIconService;
use Illuminate\View\Component;
use Illuminate\View\View;
use RuntimeException;

final class Icon extends Component {
    public string $classes = '';

    public function __construct(public readonly string $name, public readonly string $size = '6') {
        $this->classes .= match ($this->size) {
            '8' => ' h-8 w-8',
            '7' => ' h-7 w-7',
            '6' => ' h-6 w-6',
            '5' => ' h-5 w-5',
            '4' => ' h-4 w-4',
            '3.5' => ' h-3.5 w-3.5',
            default => throw new RuntimeException(message: 'Unknown size: ' . $this->size),
        };
    }

    public function render(): View {
        return Resp::view(view: 'bear::icon', data: [
            'path' => HeroIconService::getIconPath(icon: $this->name),
        ]);
    }
}