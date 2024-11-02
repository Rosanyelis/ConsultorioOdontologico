<?php

namespace App\Providers;

use App\Models\Sucursal;
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
        $sucursal = Sucursal::first();
        view()->share('sucursal', $sucursal);
    }
}
