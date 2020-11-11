<?php

namespace App\Providers;

use App\Repositories\BookRepositoryInterface;
use App\Repositories\Impl\BookRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\Repositories\BookRepositoryInterface' , 'App\Repositories\Impl\BookRepositoryImpl');
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
