<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
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
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
