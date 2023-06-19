<?php

namespace App\Listeners;

use App\Events\SendSubscribe;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendSubscriptionMail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SendSubscribe $event): void
    {
       
        $guest[] = $event->email;

      Mail::send('subsmail', $guest, function($message) use($guest){
             $message->to($guest['0']);
          $message->subject('Subscription Mail');
         });
    }
}
