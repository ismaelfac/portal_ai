<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\{ Template };
use App\Observers\TemplateObserver;

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
        Template::observe(TemplateObserver::class);
    }
}
