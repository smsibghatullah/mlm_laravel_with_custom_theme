<?php

namespace App\Listeners;

use App\Events\PaymentConfirmed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DistributeCommission
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
     * @param  \App\Events\PaymentConfirmed  $event
     * @return void
     */
    public function handle(PaymentConfirmed $event)
    {
        //
        var_dump($event->user);
    }
}
