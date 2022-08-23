<?php

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

use Illuminate\Support\Str;

class BearMarkdownService {
    public static function markdownToHtml(string $markdown): string {
        return Str::markdown($markdown);
    }
}
