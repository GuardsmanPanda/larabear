<?php

namespace GuardsmanPanda\Larabear\Infrastructure\App;

class BearApplication extends \Illuminate\Foundation\Application {

    public function path($path = ''): string {
        return $this->basePath.DIRECTORY_SEPARATOR.'infrastructure'.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}
