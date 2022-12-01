<?php

namespace App\Observers;

use App\Models\Tasks;

use App\Models\dailytask;
use App\Models\deposit;
use App\Models\User;
use App\Models\transaction;
use App\Enums\TaskStatus;
use App\Enums\TransacTypes;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
        if($tasks->status == TaskStatus::Completed){
           $completed_count = Tasks::where('user_id', $tasks->user_id)
                                    ->whereDate('created_at', Carbon::today())
                                    ->count();

            if($completed_count >= 30){
                // echo "Task completion profit";
                // dd( Deposit::where('user_id',Auth::user()->id)->firstOrFail());
                $level1_user_amount = Deposit::where('user_id',Auth::user()->id)->firstOrFail();
                $user_childs = User::where('parent_code', Auth::user()->code)->count();
                if($user_childs<10) //level 1
                {
                    $amount = ($level1_user_amount['amount']/100)*0.5;
                }
                elseif($user_childs>10 && $user_childs<20) //level 2
                {
                    $amount = ($level1_user_amount['amount']/100)*0.6;
                }
                elseif($user_childs>20 && $user_childs<30) //level 3
                {
                    $amount = ($level1_user_amount['amount']/100)*0.73;
                }
                elseif($user_childs>=30) //level 4
                {
                    $amount = ($level1_user_amount['amount']/100)*0.83;
                }

                $create = [
                    'amount' => $amount,
                    'deposit'=>  true,
                    'withdraw'=> false,
                    'description'=> 'null',
                    'title'=> 'null',
                    'status'=> TransacTypes::DailyEarning,
                    'transaction_id'=> uniqid(),
                    'user_id' => Auth::user()->id,
                ];

                $res = Transaction::create($create);

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
