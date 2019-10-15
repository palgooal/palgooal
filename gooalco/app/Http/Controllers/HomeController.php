<?php

namespace App\Http\Controllers;

//use App\modal\Price;
use App\modals\Work;
use App\modals\Menu;
use Illuminate\Http\Request;
use Session;
use App\modals\Post;
use App\modals\Slider;
use App\modals\SubMenu;
use App\modals\Option;
use App\modals\Page;
use Product;
use App;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(App::isLocale('ar')){
            $post = Post::where('Title_ar', '!=', null)->latest()->take(3)->get();
        }else if(App::isLocale('en')){
            $post = Post::where('Title_en', '!=', null)->latest()->take(3)->get();
        } 

        //$post = Post::latest()->take(3)->get();

         $work = Work::latest()->take(8)->get();
        return view('index')
        ->with('posts', $post)
        ->with('sliders', Slider::get())
       // ->with('menus', Menu::orderBy('number', 'asc')->get())
        //->with('submenus' ,SubMenu::orderBy('name_ar', 'desc')->get())
        ->with('options' , Option::get())
        ->with('works' ,  $work);
        //->with('prices' ,  Price::get());
       


    }
    public function show($title_en)
    {
        Product::where('post', $title_en)->first();

        // return view('singelPost')
        // ->with('post', Post::find($title_en));
    }
    // public function showPages($id)
    // {
    //     return view('pages')->with('pages', Page::find($id));
    // }
    function lang($local){
        Session::put('lang', $local);
        return redirect()->back();
    }
}
