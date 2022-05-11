<?php

namespace GuardsmanPanda\Larabear\Service;

use Symfony\Component\Console\Output\ConsoleOutput;

class ConsoleOutputFilter extends ConsoleOutput {
    private static bool $remove_next_line = false;

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
        '  <info>down</info>',
        '  <info>env</info>',
        '  <info>help</info>',
        '  <info>list</info>',
        '  <info>serve</info>',
        '  <info>up</info>',
        '  <info>cache:table</info>',
        '  <info>db:seed</info>',
        '  <info>db:wipe</info>',
        '  <info>queue:batches-table</info>',
        '  <info>queue:failed-table</info>',
        '  <info>queue:prune-batches</info>',
        '  <info>queue:prune-failed</info>',
        '  <info>queue:retry-batch</info>',
        '  <info>queue:table</info>',
        '  <info>schedule:test</info>',
        ' <comment>auth</comment>',
        '  <info>auth:clear-resets</info>',
        ' <comment>cache</comment>',
        '  <info>cache:clear</info>',
        '  <info>cache:forget</info>',
        ' <comment>event</comment>',
        '  <info>event:cache</info>',
        '  <info>event:clear</info>',
        '  <info>event:generate</info>',
        '  <info>event:list</info>',
        ' <comment>key</comment>',
        '  <info>key:generate</info>',
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
        ' <comment>notifications</comment>',
        '  <info>notifications:table</info>',
        ' <comment>package</comment>',
        '  <info>package:discover</info>',
        ' <comment>optimize</comment>',
        '  <info>optimize:clear</info>',
        ' <comment>session</comment>',
        '  <info>session:table</info>',
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

    public function write($messages, bool $newline = false, int $options = self::OUTPUT_NORMAL): void {
        if (!is_string($messages)) {
            parent::write($messages, $newline, $options);
            return;
        }
        if (self::$remove_next_line && trim($messages) === "") {
            self::$remove_next_line = false;
            return;
        }
        foreach (self::$filtered as $filter) {
            if (str_starts_with($messages, $filter)) {
                self::$remove_next_line = true;
                return;
            }
        }
        if (str_starts_with($messages, 'Laravel Framework <info>')) {
            $messages = trim($messages);
        }
        parent::write($messages, $newline, $options);
    }
}
