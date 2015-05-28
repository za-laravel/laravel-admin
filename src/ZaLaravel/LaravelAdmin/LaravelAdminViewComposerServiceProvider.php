<?php

namespace ZaLaravel\LaravelAdmin;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelAdminViewComposerServiceProvider
 * @package ZaLaravel\LaravelAdmin
 */
class LaravelAdminViewComposerServiceProvider extends ServiceProvider{


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layout', 'ZaLaravel\LaravelAdmin\Composers\LayoutComposer');
    }

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {
        //
    }

}