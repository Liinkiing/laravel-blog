<?php

namespace App\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Barryvdh\Debugbar\ServiceProvider as SPDebugBar;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* Permet la traduction des verbes CRUD

        \Route::resourceVerbs([
            'create' => 'ajout',
            'edit' => 'modifier'
        ]);

        */

        Carbon::setLocale(config('app.locale'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(SPDebugBar::class);
            $this->app->register(IdeHelperServiceProvider::class);
        }
    }
}
