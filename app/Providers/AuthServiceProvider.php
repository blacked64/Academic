<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('index-coordinator', 'App\Policies\CoordinatorPolicies@index');
        Gate::define('belongCoordinator', 'App\Policies\CoordinatorPolicies@belongCoordinator');

        Gate::define('index-director', 'App\Policies\AdminPolicies@index');
        Gate::define('belongDirector', 'App\Policies\AdminPolicies@belongDirector');
    }
}
