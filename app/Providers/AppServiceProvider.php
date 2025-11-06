<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

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
        $products = DB::table('product')->orderBy('product_id', 'DESC')->select('product_id','product_name')->get();
        view()->share('sidebars', $products);        
    }
}
