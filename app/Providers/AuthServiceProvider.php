<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',


    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();



        Gate::resource('users', 'App\Policies\UserPolicy');
        Gate::resource('terms', 'App\Policies\TermPolicy');
        Gate::resource('services', 'App\Policies\ServicePolicy');
        Gate::resource('doctors', 'App\Policies\DoctorPolicy');
        Gate::resource('categories', 'App\Policies\CategoryPolicy');
        Gate::resource('comments', 'App\Policies\CommentPolicy');
        Gate::resource('panels', 'App\Policies\PanelPolicy');

        Gate::before(function ($user, $ability) {
            if ($user->role == 1) {
                return true;
            }
        });
    }
}