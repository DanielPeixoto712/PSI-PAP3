<?php

namespace App\Providers;

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
        //

       

       Gate::define('atualizar-produto', function($user, $produto){
        return $user->id==$produto->id;

       });

     
       
       

        Gate::define('admin', function($user){
            if($user->tipo_user=='admin'){
                return true;
            }
            else{
                return false;
            }
        });
    }
}
