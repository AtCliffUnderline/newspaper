<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PDO;

class CreateLocalDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:localdb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creating local database';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $dbName = config('database.connections.local.database');
        $dbh = new PDO(
            "mysql:host=" . config('database.connections.local.host'),
            config('database.connections.local.username'),
            config('database.connections.local.password')
        );
        $dbh->exec("DROP DATABASE IF EXISTS " . $dbName);
        $dbh->exec("CREATE DATABASE IF NOT EXISTS " . $dbName . " CHARACTER SET " . config('database.connections.local.charset') . " COLLATE " . config('database.connections.local.collation') . ";");
        $dbh->exec("CREATE schema IF NOT EXISTS localdb_statistic COLLATE utf8_general_ci;");

    }
}
