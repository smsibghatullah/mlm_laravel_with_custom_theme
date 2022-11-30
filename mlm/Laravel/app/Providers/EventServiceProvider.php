<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use App\Events\PaymentConfirmed;
use App\Listeners\DistributeCommission;
use App\Listeners\UpdateReferalLevel;

use App\Events\DailyTaskCompleted;
use App\Listeners\DistributeTaskCompletionCommission;

use App\Events\NewMonthStarted;
use App\Listeners\DistributeMonthlyCommission;

use App\Models\transaction;
use App\Observers\TransactionObserver;

use App\Models\Tasks;
use App\Observers\TaskObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        PaymentConfirmed::class => [
            DistributeCommission::class,
            UpdateReferalLevel::class
        ],
        DailyTaskCompleted::class => [
            DistributeTaskCompletionCommission::class
        ],
        NewMonthStarted::class => [
            DistributeMonthlyCommission::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        transaction::observe(TransactionObserver::class);
        Tasks::observe(TaskObserver::class);
    }
}
