<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
<<<<<<< HEAD
     */
    public function register(): void
    {
        //
=======
     *
     * @return void
     */
    public function register()
    {
        if (app()->isLocal()) {
            $this->app->register(\VIACreative\SudoSu\ServiceProvider::class);
        }
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef
    }

    /**
     * Bootstrap any application services.
<<<<<<< HEAD
     */
    public function boot(): void
    {
        //
=======
     *
     * @return void
     */
    public function boot()
	{
		\App\Models\User::observe(\App\Observers\UserObserver::class);
		\App\Models\Reply::observe(\App\Observers\ReplyObserver::class);
		\App\Models\Topic::observe(\App\Observers\TopicObserver::class);
        \App\Models\Link::observe(\App\Observers\LinkObserver::class);

        \Illuminate\Pagination\Paginator::useBootstrap();
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef
    }
}
