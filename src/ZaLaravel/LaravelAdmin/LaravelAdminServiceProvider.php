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
            __DIR__ . '/../../../public/css' => public_path('css/admin')
        ], 'public');

        $this->publishes([
            __DIR__ . '/../../../public/js' => public_path('js/admin')
        ], 'public');

        $this->publishes([
            __DIR__.'/../../../config/laravel-admin.php' => config_path('laravel-admin.php'),
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