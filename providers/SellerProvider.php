<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class SellerProvider
 * @package App\Providers
 */
class SellerProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
