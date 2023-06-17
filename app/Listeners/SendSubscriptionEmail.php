<?php

namespace App\Listeners;

use App\Events\SubscriptionCreated;
use App\Models\ClientType;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendSubscriptionEmail
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
    public function handle(SubscriptionCreated $event): void
    {
       
        
        $user = User::find($event->userId)->toArray();
           //dd($user);
         Mail::send('subsmail', $user, function($message) use($user){
             $message->to($user['email']);
             $message->subject('Subscription Mail');
         });
    }
}
