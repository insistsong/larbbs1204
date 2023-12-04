<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * The event to listener mappings for the application.
=======
     * The event listener mappings for the application.
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
<<<<<<< HEAD
=======
        \Illuminate\Auth\Events\Verified::class => [
            \App\Listeners\EmailVerified::class,
        ],
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef
    ];

    /**
     * Register any events for your application.
<<<<<<< HEAD
     */
    public function boot(): void
=======
     *
     * @return void
     */
    public function boot()
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
<<<<<<< HEAD
     */
    public function shouldDiscoverEvents(): bool
=======
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef
    {
        return false;
    }
}
