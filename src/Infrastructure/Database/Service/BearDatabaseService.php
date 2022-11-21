<?php

namespace GuardsmanPanda\Larabear\Infrastructure\Database\Service;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class BearDatabaseService {
    public static function mustBeInTransaction(): void {
        if (App::runningUnitTests() || DB::transactionLevel() > 0) {
            return;
        }
        throw new RuntimeException(message: 'DB::transaction() must be called before calling this method.');
    }

    /**
     * @param array<string> $verbs
     * @return void
     */
    public static function mustBeProperHttpMethod(array $verbs): void {
        if (App::runningUnitTests() || App::runningInConsole()) {
            return;
        }
        if (!in_array(needle: Req::method(), haystack: $verbs, strict: true)) {
            throw new RuntimeException(message: 'This method can only be called in the following HTTP methods: ' . implode(separator: ', ', array: $verbs));
        }
    }

    public static function defaultConnectionDriver(): string {
        return Config::get(key: 'database.connections.' . Config::get(key: 'database.default') . '.driver');
    }

}
