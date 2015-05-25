<?php 

namespace ZaLaravel\LaravelAdmin;

use Illuminate\Support\ServiceProvider;

class LaravelAdminServiceProvider extends ServiceProvider {

	public function boot(){
		$this->loadViewsFrom(__DIR__.'/../../views', 'laravel-admin');
        $this->publishes([
            __DIR__ . '/../../../public' => public_path('admin')
        ], 'public');
	}

}
