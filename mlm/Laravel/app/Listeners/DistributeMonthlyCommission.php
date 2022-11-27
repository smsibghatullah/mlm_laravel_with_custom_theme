<?php

namespace App\Listeners;

use App\Events\NewMonthStarted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DistributeMonthlyCommission
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
     * @param  \App\Events\NewMonthStarted  $event
     * @return void
     */
    public function handle(NewMonthStarted $event)
    {
        echo "Distributing monthly commission";
        //
    }
}
