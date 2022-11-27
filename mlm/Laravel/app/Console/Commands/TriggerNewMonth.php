<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\NewMonthStarted;


class TriggerNewMonth extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trigger:newmonth';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is for monthly Distribution';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        event (new NewMonthStarted());
        return 0;
    }
}
