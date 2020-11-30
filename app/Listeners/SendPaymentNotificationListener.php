<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\PaymentSuccessfulEvent;
use AfricasTalking\SDK\AfricasTalking;

class SendPaymentNotificationListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(PaymentSuccessfulEvent $event)
    {
        //send sms upon successful payment
        app('App\Http\Controllers\HomeController')->sendPaymentNotification($event->user);
    }
}
