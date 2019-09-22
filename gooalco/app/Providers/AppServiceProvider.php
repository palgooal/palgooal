<?php

namespace App\Providers;

use App\modals\Menu;
use Illuminate\Support\ServiceProvider;
use Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //view::share( 'menus', 'partials.header', 'App\Http\ViewComposers\HeaderComposer');
        view::share('menus' , Menu::get());
    }
}
