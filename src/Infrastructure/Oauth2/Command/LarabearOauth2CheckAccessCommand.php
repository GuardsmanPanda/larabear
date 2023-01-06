<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Oauth2\Command;

use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Model\BearOauth2User;
use GuardsmanPanda\Larabear\Infrastructure\Oauth2\Service\BearOauth2UserService;
use Illuminate\Console\Command;

final class LarabearOauth2CheckAccessCommand extends Command {
    protected $signature = 'larabear:oauth2-check-access';
    protected $description = 'Clean the log tables';

    public function handle(): void {
        $this->info(string: 'Checking access for all users...');
        foreach (BearOauth2User::all() as $user) {
            $this->info(string: "Checking access for user $user->id...");
            BearOauth2UserService::getAccessToken(user: $user);
        }
        $this->info(string: "Done");
    }
}
