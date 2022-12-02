<?php

namespace App\Listeners;

use App\Events\PaymentConfirmed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\deposit;
use App\Models\User;
use App\Models\transaction;
use App\Helpers\Helper;
use App\Enums\TransacTypes;


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
        $deposit = Deposit::where('user_id', $event->user->id)->first();
        $level = Helper::userlevel($event->user->code);

        $amount = ($deposit['amount']/100)*5;
        $parent_user = User::where('code', $event->user->parent_code)->first();
        // dd( $parent_user );

        $create = [
            'amount' => $amount,
            'deposit'=>  true,
            'withdraw'=> false,
            'status'=> TransacTypes::ReferalBouns,
            'description'=> "null",
            'title'=> "null",
            'transaction_id'=>uniqid(),
            'user_id' => $parent_user->id,
        ];
        $res = Transaction::create($create);
    }
}
