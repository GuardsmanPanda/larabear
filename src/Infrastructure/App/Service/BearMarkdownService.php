<?php

namespace GuardsmanPanda\Larabear\Infrastructure\App\Service;

class BearMarkdownService {
    public static function markdownToHtml(string $markdown): string {
        return (new \Parsedown())->text($markdown);
    }
}
