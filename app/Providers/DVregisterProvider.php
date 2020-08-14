<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

include (__DIR__).'/../../BysinessLogic/DVregister.php';

class DVregisterProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $userToken = new \DVregister();
        $this->app->instance(\DVregister::class, $userToken);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
