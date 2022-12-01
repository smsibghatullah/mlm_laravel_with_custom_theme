<?php

namespace App\Observers;

use App\Models\Tasks;

use App\Models\Dailytask;
use App\Enums\TaskStatus;
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
                dd( Deposit::where('user_id',Auth::user()->id) );
                $level1_user_amount = Deposit::where('user_id',Auth::user()->id)->firstOrFail();

                if($level1_user_amount['level']==1)
                {
                    $amount = ($level1_user_amount['amount']/100)*0.5;
                }
                elseif($level1_user_amount['level']==2)
                {
                    $amount = ($level1_user_amount['amount']/100)*0.6;
                }
                elseif($level1_user_amount['level']==3)
                {
                    $amount = ($level1_user_amount['amount']/100)*0.73;
                }
                elseif($level1_user_amount['level']==4)
                {
                    $amount = ($level1_user_amount['amount']/100)*0.83;
                }

                $res = Dailytask::create([
                    'amount' => $amount,
                    'user_id' => Auth::user()->id,
                  ]);

                $response = array(
                  'status' => 'success',
                  'msg' => 'Done',
                );
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
