<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Schema;
>>>>>>> Dev

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
<<<<<<< HEAD
        //
=======
        $this->app->register(\KitLoong\MigrationsGenerator\MigrationsGeneratorServiceProvider::class);
>>>>>>> Dev
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        //
=======
        Schema::defaultStringLength(191);
>>>>>>> Dev
    }
}
