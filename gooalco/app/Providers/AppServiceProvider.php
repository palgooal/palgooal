<?php

namespace App\Providers;

use App\modals\Menu;
use App\modals\Option;
use App\modal\Price;
use App\modals\Category;
use App\modals\Post;

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
       // view::composer( 'menus', 'partials.header', 'App\Http\ViewComposers\HeaderComposer');
        view::share('menus' , Menu::get());
        view::composer('options' , Option::get());
        view::share('prices', Price::get());
        view::share('categorys', Category::get());
        view::share('posts', Post::get());



    }
}
