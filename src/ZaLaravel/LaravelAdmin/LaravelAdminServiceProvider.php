<?php
namespace ZaLaravel\LaravelAdmin;
use Illuminate\Support\ServiceProvider;
/**
 * Class LaravelAdminServiceProvider
 * @package ZaLaravel\LaravelAdmin
 */
class LaravelAdminServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views', 'laravel-admin');
        $this->publishes([
            __DIR__ . '/../../../public' => public_path('admin')
        ], 'public');
        $this->publishes([
            __DIR__.'/../../views' => base_path('resources/views/admin'),
        ]);
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}