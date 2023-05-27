<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        /* $loader = $this->app['translation.loader'];

        // When registering the translator component, we'll need to set the default
        // locale as well as the fallback locale. So, we'll grab the application
        // configuration so we can easily get both of these values from there.
        $locale = $this->app['config']['app.locale'];

       $this->app->extend('translator', function () {
             new \App\Repositories\Translator($loader, $locale);
       }); */
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
