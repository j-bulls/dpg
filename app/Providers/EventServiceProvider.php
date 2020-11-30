<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\PaymentSuccessfulEvent' => [
            'App\Listeners\SendPaymentNotificationListener',
        ],
        'App\Events\NewUserRegisteredEvent' => [
            'App\Listeners\SendRegistrationEmailListener',
            'App\Listeners\AwardFreeTrialListener',
            // 'App\Listeners\AssignUserRoleListener',
        ],
        'App\Events\MeetingCreatedEvent' => [
            'App\Listeners\SendMeetingNotificationListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
