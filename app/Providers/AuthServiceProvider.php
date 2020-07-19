<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Support\Facades\Auth;

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
    public function boot(GateContract $gate)
    {
       $this->registerPolicies();
       //dd($gate);
    //...
        $gate->define('laravel-inline-editor', function ($user) {
            // Add your logic here
            //dd($user);
            $user = Auth::guard('admin')->user();
           
            if($user){
                return true;
            }
            return false;
        }); 
    }
}
