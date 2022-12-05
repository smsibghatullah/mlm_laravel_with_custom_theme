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

class MatchingBouns
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
        $parent_user = User::where('code', $event->user->parent_code)->first();
        if($parent_user['is_admin'] == false){
            $deposit = Deposit::where('user_id', $event->user->id)->first();
            $parent_deposit = Deposit::where('user_id',  $parent_user->id)->first();

            if($parent_deposit != null && ($deposit['amount'] >= $parent_deposit['amount'] ?? 1000) ){

                $amount = ($deposit['amount']/100)*5;
                $create = [
                    'amount' => $amount,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'status'=> TransacTypes::MatchindBonus,
                    'description'=> "Matching Bonus ".$event->user->full_name,
                    'title'=> "Matching Bonus",
                    'transaction_id'=>uniqid(),
                    'user_id' => $parent_user->id,
                ];
                $res = Transaction::create($create);
            }

        }

    }
}
