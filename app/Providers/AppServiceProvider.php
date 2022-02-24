<?php

namespace App\Providers;

// use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
// use Illuminate\Support\Facades\Schema;
use app\Models;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {    
        // Model::unguard();
        //    Schema::defaultStringLength(191);
        Paginator::useBootstrap();
    
    }
}
