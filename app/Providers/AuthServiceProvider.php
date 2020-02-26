<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        'App\Blog' => 'App\Policies\BlogPolicy',
    ];

    
    public function boot(Gate $gate)
    {
        $this->registerPolicies();

        $gate->before(function ($user) {
            // add logic and provisions that super seeds everything in system
            //return $user->id == 1;
            
            if( $user->id == 1 ){
            return true;
        } 
        });
    }
}
