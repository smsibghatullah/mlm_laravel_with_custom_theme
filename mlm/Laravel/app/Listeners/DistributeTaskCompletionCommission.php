<?php

namespace App\Listeners;

use App\Events\DailyTaskCompleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DistributeTaskCompletionCommission
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\DailyTaskCompleted  $event
     * @return void
     */
    public function handle(DailyTaskCompleted $event)
    {
        //
    }
}
