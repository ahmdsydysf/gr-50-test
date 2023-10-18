<?php

namespace App\Providers;

use App\ViewComposer\ViewComposertt;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
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
        // View::composer('products.index', ViewComposertt::class);
        Schema::defaultStringLength(191);
    }
}
