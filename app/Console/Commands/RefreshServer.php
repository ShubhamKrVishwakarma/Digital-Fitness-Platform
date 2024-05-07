<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RefreshServer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'First refreshes the Migration and Seed the Database and start the server';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("Refreshing Migration...");
        $this->call('migrate:refresh');
        $this->info("Seeding the Database...");
        $this->call('db:seed');
        $this->info("Server is starting...");
        $this->call('serve');
    }
}
