<?php

namespace rafapaulino\CustomRoute;

use Illuminate\Support\ServiceProvider;

class CustomRouteServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'rafapaulino');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'rafapaulino');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/customroute.php', 'customroute');

        // Register the service the package provides.
        $this->app->singleton('customroute', function ($app) {
            return new CustomRoute;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['customroute'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/customroute.php' => config_path('customroute.php'),
        ], 'customroute.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/rafapaulino'),
        ], 'customroute.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/rafapaulino'),
        ], 'customroute.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/rafapaulino'),
        ], 'customroute.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
