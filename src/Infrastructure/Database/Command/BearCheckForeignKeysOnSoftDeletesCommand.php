<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Command;

use GuardsmanPanda\Larabear\Infrastructure\Console\Service\ConsoleService;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\DatabaseBaseInformation;
use GuardsmanPanda\Larabear\Infrastructure\Database\Service\DatabaseForeignKeyService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class BearCheckForeignKeysOnSoftDeletesCommand extends Command {
    protected $signature = 'bear:cfk';
    protected $description = 'Check Foreign Keys Against Soft Deletes.';

    public function handle(): void {
        $defaultConnection = config(key: 'database.default');
        ConsoleService::printH1(headline: "Checking [$defaultConnection] Foreign Keys Against Soft Deletes");
        $res = DatabaseForeignKeyService::getSoftDeletedForeignKeyConstraints(connection: $defaultConnection);
        dd($res);
        //$this->info(count($res) . " rows found in $foreign_key->table_name with a foreign key to $foreign_key->foreign_table that has been soft deleted");
    }
}
