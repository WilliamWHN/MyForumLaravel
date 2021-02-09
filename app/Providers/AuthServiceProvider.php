<?php

namespace App\Providers;

<<<<<<< HEAD
use App\Models\Opinion;
use App\Policies\OpinionPolicy;
=======
>>>>>>> Dev
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
<<<<<<< HEAD
        Opinion::class => OpinionPolicy::class
=======
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
>>>>>>> Dev
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
    }
}
