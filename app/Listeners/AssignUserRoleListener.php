<?php

namespace App\Listeners;

use App\Events\NewUserRegisteredEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class AssignUserRoleListener
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
        DB::table('role_user')->insert(
            [
                "user_id" => $event->data['id'],
                "role_id" => $event->data['role_id']==null ? '0':$event->data['role_id']
            ]
        );
        

    }
}
