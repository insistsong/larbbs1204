<?php

namespace App\Providers;

<<<<<<< HEAD
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
=======
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Laravel\Horizon\Horizon;
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef

class AuthServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * The model to policy mappings for the application.
=======
     * The policy mappings for the application.
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
<<<<<<< HEAD
        //
=======
		 \App\Models\Reply::class => \App\Policies\ReplyPolicy::class,
		 \App\Models\Topic::class => \App\Policies\TopicPolicy::class,
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef
    ];

    /**
     * Register any authentication / authorization services.
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
        $this->registerPolicies();
        // 修改策略自动发现的逻辑
        Gate::guessPolicyNamesUsing(function ($modelClass) {
            // 动态返回模型对应的策略名称，如：// 'App\Model\User' => 'App\Policies\UserPolicy',
            return 'App\Policies\\'.class_basename($modelClass).'Policy';
        });

        Horizon::auth(function ($request) {
            // 是否是站长
            return Auth::user()->hasRole('Founder');
        });
>>>>>>> f3e4846e534429ffb5cf4cd373ab514cea04caef
    }
}
