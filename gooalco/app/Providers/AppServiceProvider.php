<?php

namespace App\Providers;

use App\modals\Menu;
use App\modals\Option;
use App\modal\Price;
use App\modals\categorieWork;
use App\modals\Category;
use App\modals\Page;
use App\modals\Post;
use App\modals\SubMenu;
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
        view::composer( 'menus', 'partials.header', 'App\Http\ViewComposers\HeaderComposer');
        view::share('menus' , Menu::orderBy('name_ar', 'desc')->get());
        //view::share('submenus' , SubMenu::orderBy('number', 'asc')->get());
        view::composer('options' , Option::get());
        view::share('prices', Price::get());
        view::share('categorys', categorieWork::get());
        view::share('pages', Page::get());
        



    }
}
