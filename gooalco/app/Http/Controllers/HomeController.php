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
            $post = Post::where('Title_ar', '!=', null)->latest()->take(4)->get();
        }else if(App::isLocale('en')){
            $post = Post::where('Title_en', '!=', null)->latest()->take(4)->get();
        } 
        //$post = Post::latest()->take(3)->get();
         $work = Work::latest()->take(12)->get();
        return view('index')
        ->with('posts', $post)
        ->with('sliders', Slider::get())
        ->with('options' , Option::get())
        ->with('works' ,  $work);
    }
    public function show($title_en)
    {
      //
    }

    function lang($local){
        Session::put('lang', $local);
        return redirect()->back();
    }
}
