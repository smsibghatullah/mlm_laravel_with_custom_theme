<?php

namespace App\Observers;

use App\Models\Tasks;
use App\Enums\TaskStatus;
use Carbon\Carbon;

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
           $completed_count = Tasks::where('user_id', $task->user_id)
                                    ->whereDate('created_at', Carbon::today())
                                    ->count();

            if($completed_count == 30){   echo "Task completion profit";   }

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
