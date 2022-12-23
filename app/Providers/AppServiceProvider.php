<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Vite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        Vite::macro('image', fn($asset) => $this->asset("resources/images/{$asset}"));

        // Disable lazy loading prevent the use of Model::all() to query all records in database
        Model::preventLazyLoading(!app()->isProduction());
    }
}
