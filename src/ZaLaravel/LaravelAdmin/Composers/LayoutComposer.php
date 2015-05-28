<?php

namespace ZaLaravel\LaravelAdmin\Composers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Config;

class LayoutComposer
{
    public function compose(View $view)
    {
        $navItems = Config::get('laravel-admin.nav');
        $view->with('items', $navItems);

    }
}
