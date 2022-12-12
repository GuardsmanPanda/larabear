<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\App;

use Illuminate\Foundation\Application;

class BearApplication extends Application {

    public function path($path = ''): string {
        return $this->basePath.DIRECTORY_SEPARATOR.'Infrastructure'.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }

    public function getNamespace(): string {
        return 'Infrastructure\\';
    }
}
