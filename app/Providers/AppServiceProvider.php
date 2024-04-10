<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // \Illuminate\Database\Eloquent\Model::preventLazyLoading(); // prevents the use of lazy loading in your app (causes crash when lazy loading is used)
        // \Illuminate\Pagination\Paginator::useBootstrapFive(); // changes the default pagination view
    }
}
