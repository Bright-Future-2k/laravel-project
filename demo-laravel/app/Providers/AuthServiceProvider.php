<?php

namespace App\Providers;

use App\Http\Controllers\RoleConstant;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin',function($user){
            if($user->name = 'admin'){
                return 'You can go here';
            }
            return 'You cant go here';
            
            // return true ;
        });
        Gate::define('isStudent',function($user){
            if($user->name = 'student'){
                return 'Place for student';
            }
            return 'it not your place';
        });
        
    }
}
