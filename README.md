# laravel-admin

[![Build Status](https://scrutinizer-ci.com/g/za-laravel/laravel-admin/badges/build.png?b=master)](https://scrutinizer-ci.com/g/za-laravel/laravel-admin/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/za-laravel/laravel-admin/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/za-laravel/laravel-admin/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/za-laravel/laravel-admin/v/stable)](https://packagist.org/packages/za-laravel/laravel-admin) [![Total Downloads](https://poser.pugx.org/za-laravel/laravel-admin/downloads)](https://packagist.org/packages/za-laravel/laravel-admin) [![Latest Unstable Version](https://poser.pugx.org/za-laravel/laravel-admin/v/unstable)](https://packagist.org/packages/za-laravel/laravel-admin) [![License](https://poser.pugx.org/za-laravel/laravel-admin/license)](https://packagist.org/packages/za-laravel/laravel-admin)

Base admin package for Laravel 5


## Installation

 * Install package with composer ```composer require za-laravel/laravel-admin:"dev-master"``` 
 
 * If composer can't find package, try to set ```"minimum-stability": "dev"```
  
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
     
 * Append view composer service provider to app/config.php   
   
      ```php
      <?php
     
     'providers' => array(
     
         'Illuminate\Foundation\Providers\ArtisanServiceProvider',
         'Illuminate\Auth\AuthServiceProvider',
         ...
         'ZaLaravel\LaravelAdmin\LaravelAdminServiceProvider',
         'ZaLaravel\LaravelAdmin\LaravelAdminViewComposerServiceProvider',
     ),
     ?>
     ```
     
 * Publish assets and config file with  ```php artisan vendor:publish``` 
 
 * You will have empty **larave-admin.php** config and you need to sepecifiy nav items there:
  
 ```php
 <?php

return [

    'nav' => [
        [
            'title' => 'Users',
            'url' => 'user' // equals to /admin/user
        ]
    ]
];
 ```
 
  
     
## Usage 
     
   In your view you need extend *laravel-admin::layout*:
       ``` @extends('laravel-admin::layout') ```
     
   And insert your content in *content* section:
   
       ``` 
       @section('content')
         ...
       @endsection
         
       ```
     
