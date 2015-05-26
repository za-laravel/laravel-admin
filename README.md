# laravel-admin
Base admin package for Laravel 5


## Installation

 * install package with ```composer require za-laravel/laravel-admin:"dev-master"``` 
  
 * Now append service provider to providers array in config/app.php.
     
     ```php
     <?php
     
     'providers' => array(
     
         'Illuminate\Foundation\Providers\ArtisanServiceProvider',
         'Illuminate\Auth\AuthServiceProvider',
         ...
         'ZaLaravel\LaravelAdmin\LaravelAdminServiceProvider',
     
     ),
     ?>
     ```
 * publish assets ```php artisan vendor:publish --tag=public``` 
   
  
     
## Usage 
     
   In your view you need extend *laravel-admin::layout*:
       ``` @extends('laravel-admin::layout') ```
     
   And insert your content in *content* section:
   
       ``` 
       @section('content')
         ...
       @endsection
         
       ```
     
