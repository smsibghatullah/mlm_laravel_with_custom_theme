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
        $member_count = User::where('parent_code', $event->user->parent_code)->where('status', 'approved')->count();
        $member_data = User::where('parent_code', $event->user->parent_code)->where('status', 'approved')->get();
        $status = '';


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

            $level = Helper::userlevel($event->user->parent_code);
            

            $level_bonus = false;
            $level_1_sum = 0;
            if($member_count==5)
            {
                $level_bonus = true;
                // print_r("as");
                
                foreach($member_data as $member)
                {
                    $deposit = Deposit::where('user_id', $member->id)->first();
                    
                    $level_1_sum  +=$deposit->amount;
                }
                    $amount = $level_1_sum*5/100;
                    $status = TransacTypes::HalfLevel;
                   $create = [
                    'amount' => $amount,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'status'=> $status,
                    'description'=> "Half Level",
                    'title'=> "Half Level",
                    'transaction_id'=>uniqid(),
                    'user_id' => $parent_user->id,
                        ];
                        $res = Transaction::create($create);

            }
            if($member_count==10)
            {
                $level_bonus = true;
                $member_ids = [];

                foreach($member_data as $member)
                {
                    array_push($member_ids,$member->id);
                }
                $deposit = Deposit::whereIn('id', $member_ids)->orderBy('id', 'DESC')->take(5)->get();
                foreach($deposit as $deposit_item)
                {
                    $level_1_sum  +=$deposit_item->amount;
                 
                }
                $amount = $level_1_sum*10/100;

                $status = TransacTypes::FulLevel;
                $create = [
                    'amount' => $amount,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'status'=> $status,
                    'description'=> "Complete Full 1-Level",
                    'title'=> "Full Level",
                    'transaction_id'=>uniqid(),
                    'user_id' => $parent_user->id,
                ];
                $res = Transaction::create($create);

            }
            if($member_count==15)
            {
                $level_bonus = true;
                $member_ids = [];

                foreach($member_data as $member)
                {
                    array_push($member_ids,$member->id);
                }
                $deposit = Deposit::whereIn('id', $member_ids)->orderBy('id', 'DESC')->take(5)->get();
                foreach($deposit as $deposit_item)
                {
                    $level_1_sum  +=$deposit_item->amount;
                 
                }
                $amount = $level_1_sum*5/100;

                $status = TransacTypes::FulLevel;
                $create = [
                    'amount' => $amount,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'status'=> $status,
                    'description'=> "Complete Half 2-Level",
                    'title'=> "Half Level",
                    'transaction_id'=>uniqid(),
                    'user_id' => $parent_user->id,
                ];
                $res = Transaction::create($create);

            }

            if($member_count==20)
            {
                $level_bonus = true;
                $member_ids = [];

                foreach($member_data as $member)
                {
                    array_push($member_ids,$member->id);
                }
                $deposit = Deposit::whereIn('id', $member_ids)->orderBy('id', 'DESC')->take(5)->get();
                foreach($deposit as $deposit_item)
                {
                    $level_1_sum  +=$deposit_item->amount;
                 
                }
                $amount = $level_1_sum*13/100;

                $status = TransacTypes::FulLevel;
                $create = [
                    'amount' => $amount,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'status'=> $status,
                    'description'=> "Complete Full 2-Level",
                    'title'=> "Full Level",
                    'transaction_id'=>uniqid(),
                    'user_id' => $parent_user->id,
                ];
                $res = Transaction::create($create);

            }

            if($member_count==25)
            {
                $level_bonus = true;
                $member_ids = [];

                foreach($member_data as $member)
                {
                    array_push($member_ids,$member->id);
                }
                $deposit = Deposit::whereIn('id', $member_ids)->orderBy('id', 'DESC')->take(5)->get();
                foreach($deposit as $deposit_item)
                {
                    $level_1_sum  +=$deposit_item->amount;
                 
                }
                $amount = $level_1_sum*7/100;

                $status = TransacTypes::FulLevel;
                $create = [
                    'amount' => $amount,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'status'=> $status,
                    'description'=> "Complete Half 3-Level",
                    'title'=> "Half Level",
                    'transaction_id'=>uniqid(),
                    'user_id' => $parent_user->id,
                ];
                $res = Transaction::create($create);

            }
            if($member_count==30)
            {
                $level_bonus = true;
                $member_ids = [];

                foreach($member_data as $member)
                {
                    array_push($member_ids,$member->id);
                }
                $deposit = Deposit::whereIn('id', $member_ids)->orderBy('id', 'DESC')->take(5)->get();
                foreach($deposit as $deposit_item)
                {
                    $level_1_sum  +=$deposit_item->amount;
                 
                }
                $amount = $level_1_sum*15/100;

                $status = TransacTypes::FulLevel;
                $create = [
                    'amount' => $amount,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'status'=> $status,
                    'description'=> "Complete Ful 3-Level",
                    'title'=> "Ful Level",
                    'transaction_id'=>uniqid(),
                    'user_id' => $parent_user->id,
                ];
                $res = Transaction::create($create);

            }

            if($member_count==35)
            {
                $level_bonus = true;
                $member_ids = [];

                foreach($member_data as $member)
                {
                    array_push($member_ids,$member->id);
                }
                $deposit = Deposit::whereIn('id', $member_ids)->orderBy('id', 'DESC')->take(5)->get();
                foreach($deposit as $deposit_item)
                {
                    $level_1_sum  +=$deposit_item->amount;
                 
                }
                $amount = $level_1_sum*7/100;

                $status = TransacTypes::FulLevel;
                $create = [
                    'amount' => $amount,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'status'=> $status,
                    'description'=> "Complete Half 4-Level",
                    'title'=> "Half Level",
                    'transaction_id'=>uniqid(),
                    'user_id' => $parent_user->id,
                ];
                $res = Transaction::create($create);

            }
            if($member_count==40)
            {
                $level_bonus = true;
                $member_ids = [];

                foreach($member_data as $member)
                {
                    array_push($member_ids,$member->id);
                }
                $deposit = Deposit::whereIn('id', $member_ids)->orderBy('id', 'DESC')->take(5)->get();
                foreach($deposit as $deposit_item)
                {
                    $level_1_sum  +=$deposit_item->amount;
                 
                }
                $amount = $level_1_sum*18/100;

                $status = TransacTypes::FulLevel;
                $create = [
                    'amount' => $amount,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'status'=> $status,
                    'description'=> "Complete Ful 4-Level",
                    'title'=> "Ful Level",
                    'transaction_id'=>uniqid(),
                    'user_id' => $parent_user->id,
                ];
                $res = Transaction::create($create);

            }

        }
    }
}
