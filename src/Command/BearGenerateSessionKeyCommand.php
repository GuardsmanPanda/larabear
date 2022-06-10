<?php

namespace GuardsmanPanda\Larabear\Command;

use Illuminate\Console\Command;
use Illuminate\Encryption\Encrypter;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class BearGenerateSessionKeyCommand extends Command {
    protected $signature = 'bear:generate-session-key';
    protected $description = 'Generate a new session key';
    protected $hidden = true;

    public function handle(): void {
        $this->info(string: 'Generating a new session key...');
        $key = base64_encode(Encrypter::generateKey(cipher: Config::get(key: 'app.cipher')));
        $old_env = file_get_contents(App::environmentFilePath());
        $new_env = preg_replace(pattern: "/^LARABEAR_SESSION_KEY=.*$/m", replacement: 'LARABEAR_SESSION_KEY=' . $key, subject: $old_env);
        if ($old_env === $new_env) {
            $new_env .= PHP_EOL . 'LARABEAR_SESSION_KEY=' . $key . PHP_EOL;
        }
        file_put_contents(filename: App::environmentFilePath(), data: $new_env);
        $this->info(string: "Session key generated successfully.");
    }
}
