<?php

namespace GuardsmanPanda\Larabear\Command;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class BearConfigMergeCommand extends Command {
    protected $signature = 'bear:config-merge';
    protected $description = 'Merge new configuration values into the existing configuration file';
    protected $hidden = true;

    public function handle(): void {
        $res = Config::get('bear');
        $res = array_merge_recursive($res, require __DIR__ . '/../../config/config.php');
        Config::set('bear', $res);
        $this->info('🎉 Merged new configuration values into the existing configuration file, please check config/bear.php');
    }
}
