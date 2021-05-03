<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//pus de mn
use Illuminate\Support\Facades\Schema;

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

//        pus de mn
        Schema::defaultStringLength(191);
    }
}
