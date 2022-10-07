<?php

namespace App\Console\Commands;

use App\Jobs\GetWindmeterDataJob;
use Illuminate\Console\Command;

class GetWindmeterData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'windmeter-data:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get the windmeter data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        GetWindmeterDataJob::dispatch();
        return 0;
    }
}
