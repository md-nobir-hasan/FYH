<?php

namespace App\Providers;

use App\Events\SendSubscribe;
use App\Events\UserRegister;
use App\Listeners\UserRegInfoToAdmin;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\SubscriptionCreated;
use App\Listeners\SendSubscriptionEmail;
use App\Listeners\SendSubscriptionMail;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            SendNotificationToAdmin::class,
        ],
        // UserRegister::class =>[UserRegInfoToAdmin::class],
        SubscriptionCreated::class => [
            SendSubscriptionEmail::class,
        ],

        //footer subscription 
          SendSubscribe::class => [
              SendSubscriptionMail::class,
          ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
