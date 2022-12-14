<?php

namespace App\Observers;

use App\Models\Tasks;
use App\Helpers\Helper;
use App\Models\dailytask;
use App\Models\deposit;
use App\Models\User;
use App\Models\transaction;
use App\Enums\TaskStatus;
use App\Enums\TransacTypes;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class TaskObserver
{
    /**
     * Handle the Tasks "created" event.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return void
     */
    public function created(Tasks $tasks)
    {
                 Log::info(print_r(TaskStatus::Completed, true));
                 Log::info(print_r("lllllllllllllll", true));

        if($tasks->status == TaskStatus::Completed){
           $completed_count = Tasks::where('user_id', $tasks->user_id)
                                    ->whereDate('created_at', Carbon::today())
                                    ->count();

         Log::info(print_r($completed_count, true));
            if($completed_count >= 30){


                // echo "Task completion profit";
                // dd( Deposit::where('user_id',Auth::user()->id)->firstOrFail());
                $user_deposit = Deposit::where('user_id',Auth::user()->id)->first();
                $user_childs = User::where('parent_code', Auth::user()->code)->count();
                $parent_user = User::where('code', Auth::user()->parent_code)->first();
                if($user_childs<=10) //level 1
                {
                    $amount = ($user_deposit['amount']/100)*0.5;
                }
                elseif($user_childs>10 && $user_childs<=20) //level 2
                {
                    $amount = ($user_deposit['amount']/100)*0.6;
                }
                elseif($user_childs>20 && $user_childs<=30) //level 3
                {
                    $amount = ($user_deposit['amount']/100)*0.73;
                }
                elseif($user_childs>30) //level 4
                {
                    $amount = ($user_deposit['amount']/100)*0.83;
                }

                $create = [
                    'amount' => $amount,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'description'=> 'Daily Earning',
                    'title'=> 'Daily Earning',
                    'status'=> TransacTypes::DailyEarning,
                    'transaction_id'=> uniqid(),
                    'user_id' => Auth::user()->id,
                ];
                Transaction::create($create);

            $parent_level = Helper::userlevel(Auth::user()->parent_code);
            $user_level = Helper::userlevel(Auth::user()->code);
            if($parent_level==$user_level)
            {
                $parent_create = [
                    'amount' => $amount/100*7,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'description'=> 'Daily Earning of '.Auth::user()->full_name,
                    'title'=> 'Daily Earning',
                    'status'=> TransacTypes::TeamCommission,
                    'transaction_id'=> uniqid(),
                    'user_id' => $parent_user->id,
                ];
                // dd([$create, $parent_create]);
                 
                 Transaction::create($parent_create);
            }

            if($parent_level==2 && $user_level=1)
            {
                $parent_create = [
                    'amount' => $amount/100*4,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'description'=> 'Daily Earning of '.Auth::user()->full_name,
                    'title'=> 'Daily Earning',
                    'status'=> TransacTypes::TeamCommission,
                    'transaction_id'=> uniqid(),
                    'user_id' => $parent_user->id,
                ];
                // dd([$create, $parent_create]);
                 // Transaction::create($create);
                 Transaction::create($parent_create);
            }
            if($parent_level==3 && $user_level=2)
            {
                $parent_create = [
                    'amount' => $amount/100*4,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'description'=> 'Daily Earning of '.Auth::user()->full_name,
                    'title'=> 'Daily Earning',
                    'status'=> TransacTypes::TeamCommission,
                    'transaction_id'=> uniqid(),
                    'user_id' => $parent_user->id,
                ];
                // dd([$create, $parent_create]);
                 // Transaction::create($create);
                 Transaction::create($parent_create);
            }

            if($parent_level==3 && $user_level=1)
            {
                $parent_create = [
                    'amount' => $amount/100*2,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'description'=> 'Daily Earning of '.Auth::user()->full_name,
                    'title'=> 'Daily Earning',
                    'status'=> TransacTypes::TeamCommission,
                    'transaction_id'=> uniqid(),
                    'user_id' => $parent_user->id,
                ];
                // dd([$create, $parent_create]);
                 // Transaction::create($create);
                 Transaction::create($parent_create);
            }

            if($parent_level==4 && $user_level=1)
            {
                $parent_create = [
                    'amount' => $amount/100*1,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'description'=> 'Daily Earning of '.Auth::user()->full_name,
                    'title'=> 'Daily Earning',
                    'status'=> TransacTypes::TeamCommission,
                    'transaction_id'=> uniqid(),
                    'user_id' => $parent_user->id,
                ];
                // dd([$create, $parent_create]);
                 // Transaction::create($create);
                 Transaction::create($parent_create);
            }
            if($parent_level==4 && $user_level=2)
            {
                $parent_create = [
                    'amount' => $amount/100*2,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'description'=> 'Daily Earning of '.Auth::user()->full_name,
                    'title'=> 'Daily Earning',
                    'status'=> TransacTypes::TeamCommission,
                    'transaction_id'=> uniqid(),
                    'user_id' => $parent_user->id,
                ];
                // dd([$create, $parent_create]);
                 // Transaction::create($create);
                 Transaction::create($parent_create);
            }
            if($parent_level==4 && $user_level=3)
            {
                $parent_create = [
                    'amount' => $amount/100*4,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'description'=> 'Daily Earning of '.Auth::user()->full_name,
                    'title'=> 'Daily Earning',
                    'status'=> TransacTypes::TeamCommission,
                    'transaction_id'=> uniqid(),
                    'user_id' => $parent_user->id,
                ];
                // dd([$create, $parent_create]);
                 // Transaction::create($create);
                 Transaction::create($parent_create);
            }



             }

        }
    }

    /**
     * Handle the Tasks "updated" event.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return void
     */
    public function updated(Tasks $tasks)
    {
        //
    }

    /**
     * Handle the Tasks "deleted" event.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return void
     */
    public function deleted(Tasks $tasks)
    {
        //
    }

    /**
     * Handle the Tasks "restored" event.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return void
     */
    public function restored(Tasks $tasks)
    {
        //
    }

    /**
     * Handle the Tasks "force deleted" event.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return void
     */
    public function forceDeleted(Tasks $tasks)
    {
        //
    }
}
