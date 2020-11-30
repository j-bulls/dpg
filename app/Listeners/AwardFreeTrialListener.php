<?php

namespace App\Listeners;

use App\Events\NewUserRegisteredEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class AwardFreeTrialListener
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
     * @param  NewUserRegisteredEvent  $event
     * @return void
     */
    public function handle(NewUserRegisteredEvent $event)
    {
        //
        DB::table('subscriptions')->insert(
            [
                "user_id" => $event->data['id'],
                "expiry_on" => Date('Y-m-d h:i:s', strtotime('+14 days')),
                "package_id" => '0'
            ]
        );
    }
}
