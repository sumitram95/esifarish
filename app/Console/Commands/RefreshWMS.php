<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RefreshWMS extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh DB Wipe/Migrate/Seeder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('db:wipe');
        $this->call('migrate');
        $this->call('db:seed');
    }
}
