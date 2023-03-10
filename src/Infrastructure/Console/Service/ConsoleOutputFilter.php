<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Console\Service;

use Symfony\Component\Console\Output\ConsoleOutput;

final class ConsoleOutputFilter extends ConsoleOutput {
    private static bool $remove_next_line = false;

    /** @var array<string> $filtered */
    private static array $filtered = [
        '<comment>Usage:</comment>',
        '  command [options] [arguments]',
        '<comment>Options:</comment>',
        '  <info>-q, --quiet</info>',
        '  <info>-V, --version</info>',
        '  <info>    --ansi|--no-ansi</info>',
        '  <info>-n, --no-interaction</info>',
        '  <info>    --env[=ENV]</info>',
        '  <info>-v|vv|vvv, --verbose</info>',
        '  <info>-h, --help</info>',
        '  <info>clear-compiled</info>',
        '  <info>completion</info>',
        '  <info>db</info>',
        '  <info>docs</info>',
        '  <info>down</info>',
        '  <info>env</info>',
        '  <info>help</info>',
        '  <info>list</info>',
        '  <info>serve</info>',
        '  <info>up</info>',
        ' <comment>auth</comment>',
        '  <info>auth:clear-resets</info>',
        ' <comment>cache</comment>',
        '  <info>cache:clear</info>',
        '  <info>cache:table</info>',
        '  <info>cache:forget</info>',
        '  <info>cache:prune-stale-tags</info>',
        ' <comment>config</comment>',
        '  <info>config:cache</info>',
        '  <info>config:clear</info>',
        ' <comment>channel</comment>',
        '  <info>channel:list</info>',
        ' <comment>db</comment>',
        '  <info>db:monitor</info>',
        '  <info>db:seed</info>',
        '  <info>db:show</info>',
        '  <info>db:table</info>',
        '  <info>db:wipe</info>',
        ' <comment>event</comment>',
        '  <info>event:cache</info>',
        '  <info>event:clear</info>',
        '  <info>event:generate</info>',
        '  <info>event:list</info>',
        ' <comment>env</comment>',
        '  <info>env:decrypt</info>',
        '  <info>env:encrypt</info>',
        ' <comment>key</comment>',
        '  <info>key:generate</info>',
        ' <comment>lang</comment>',
        '  <info>lang:publish</info>',
        ' <comment>larabear</comment>',
        '  <info>larabear:',
        ' <comment>make</comment>',
        '  <info>make:',
        ' <comment>migrate</comment>',
        '  <info>migrate:fresh</info>',
        '  <info>migrate:install</info>',
        '  <info>migrate:refresh</info>',
        '  <info>migrate:reset</info>',
        '  <info>migrate:rollback</info>',
        '  <info>migrate:status</info>',
        ' <comment>model</comment>',
        '  <info>model:prune</info>',
        '  <info>model:show</info>',
        ' <comment>notifications</comment>',
        '  <info>notifications:table</info>',
        ' <comment>package</comment>',
        '  <info>package:discover</info>',
        ' <comment>optimize</comment>',
        '  <info>optimize:clear</info>',
        '  <info>queue:monitor</info>',
        '  <info>queue:batches-table</info>',
        '  <info>queue:failed-table</info>',
        '  <info>queue:prune-batches</info>',
        '  <info>queue:prune-failed</info>',
        '  <info>queue:retry-batch</info>',
        '  <info>queue:table</info>',
        '  <info>queue:work</info>',
        '  <info>route:cache</info>',
        '  <info>route:clear</info>',
        ' <comment>session</comment>',
        '  <info>session:table</info>',
        '  <info>schedule:test</info>',
        '  <info>schedule:work</info>',
        ' <comment>schema</comment>',
        '  <info>schema:dump</info>',
        ' <comment>storage</comment>',
        '  <info>storage:link</info>',
        ' <comment>stub</comment>',
        '  <info>stub:publish</info>',
        ' <comment>vendor</comment>',
        '  <info>vendor:publish</info>',
        ' <comment>view</comment>',
        '  <info>view:cache</info>',
        '  <info>view:clear</info>',
    ];

    public function write(mixed $messages, bool $newline = false, int $options = self::OUTPUT_NORMAL): void {
        if (!is_string(value: $messages)) {
            parent::write(messages: $messages, newline: $newline, options: $options);
            return;
        }
        if (self::$remove_next_line && trim(string: $messages) === "") {
            self::$remove_next_line = false;
            return;
        }
        foreach (self::$filtered as $filter) {
            if (str_starts_with(haystack: $messages, needle: $filter)) {
                self::$remove_next_line = true;
                return;
            }
        }
        if (str_starts_with(haystack: $messages, needle: 'Laravel Framework <info>')) {
            $messages = trim(string: $messages);
        }
        parent::write(messages: $messages, newline: $newline, options: $options);
    }
}
