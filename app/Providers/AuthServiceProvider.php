<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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
        Gate::define('isAdmin' ,function($user){
            if($user->role === 'admin'){
                return true;
            }else{
                return false;
            }
        });

        Gate::define('isHr' ,function($user){
            if($user->role === 'hr'){
                return true;
            }else{
                return false;
            }
        });

        Gate::define('isSenior' ,function($user){
            if($user->role === 'senior'){
                return true;
            }else{
                return false;
            }
        });

        Gate::define('isJunior' ,function($user){
            if($user->role === 'junior'){
                return true;
            }else{
                return false;
            }
        });
        
        
        

        //
    }
}
