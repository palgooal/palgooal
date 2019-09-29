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

        $post = Post::latest()->take(3)->get();

         $work = Work::latest()->take(8)->get();
        return view('index')
        ->with('posts', $post)
        ->with('sliders', Slider::get())
        ->with('menus', Menu::get())
        ->with('submenus' ,SubMenu::orderBy('number', 'asc')->get())
        ->with('options' , Option::get())
        ->with('works' ,  $work);
        //->with('prices' ,  Price::get());
       


    }
    public function show($id)
    {
        return view('singelPost')
        ->with('post', Post::find($id));
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
