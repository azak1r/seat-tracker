<?php

namespace Azak1r\Tracker;

use Illuminate\Routing\Router;
use Seat\Services\AbstractSeatPlugin;

class TrackerServiceProvider extends AbstractSeatPlugin
{
    /**
     * Bootstrap the application services.
     *
     * @param \Illuminate\Routing\Router $router
     */
    public function boot(Router $router)
    {
        $this->add_routes();

        $this->add_views();

        $this->add_migrations();

        $this->add_translations();
    }

    /**
     * Include the routes.
     */
    public function add_routes()
    {

        if (! $this->app->routesAreCached()) {
            include __DIR__ . '/Http/routes.php';
        }
    }

     /**
     * Set the path and namespace for the views.
     */
    public function add_views()
    {

        $this->loadViewsFrom(__DIR__ . '/resources/views', 'tracker');
    }

    /**
     * Add the packages translation files.
     */
    public function add_translations()
    {

        $this->loadTranslationsFrom(__DIR__ . '/lang', 'tracker');
    }

     /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Merge the config with anything in the main app
        $this->mergeConfigFrom(
            __DIR__ . '/Config/tracker.config.php', 'tracker.config');

        // Include this packages menu items
        $this->mergeConfigFrom(
            __DIR__ . '/Config/tracker.sidebar.php', 'tracker.sidebar');
    }

    /**
     * Set the path for migrations which should
     * be migrated by laravel. More informations:
     * https://laravel.com/docs/5.5/packages#migrations.
     */
    private function add_migrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations/');
    }

    /**
     * Return the plugin public name as it should be displayed into settings.
     *
     * @return string
     */
    public function getName(): string
    {
        return 'Azak1r Tracker';
    }

    /**
     * Return the plugin repository address.
     *
     * @return string
     */
    public function getPackageRepositoryUrl(): string
    {
        return '';
    }

    /**
     * Return the plugin technical name as published on package manager.
     *
     * @return string
     */
    public function getPackagistPackageName(): string
    {
        return 'tracker';
    }

    /**
     * Return the plugin vendor tag as published on package manager.
     *
     * @return string
     */
    public function getPackagistVendorName(): string
    {
        return 'azak1r';
    }

    /**
     * Return the plugin installed version.
     *
     * @return string
     */
    public function getVersion(): string
    {
        return config('tracker.config.version');
    }
}