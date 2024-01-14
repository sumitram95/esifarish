<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearQueueAndCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ccqw';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cache/Config clear and Queue Work run';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('cache:clear');
        $this->call('config:clear');
        $this->call('queue:work');
    }
}
