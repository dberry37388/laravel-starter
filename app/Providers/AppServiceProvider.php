<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->environment() !== 'production') {
            /* https://github.com/barryvdh/laravel-ide-helper */
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);

            /* https://github.com/Jeroen-G/Laravel-Packager */
            $this->app->register(\JeroenG\Packager\PackagerServiceProvider::class);

            /* https://github.com/svenluijten/artisan-view */
            $this->app->register(\Sven\ArtisanView\ArtisanViewServiceProvider::class);

            /* https://github.com/barryvdh/laravel-debugbar */
            $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
            $this->app->alias('Debugbar', \Barryvdh\Debugbar\Facade::class);

            /* https://github.com/lubusIN/laravel-decomposer */
            $this->app->register(\Lubusin\Decomposer\DecomposerServiceProvider::class);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
