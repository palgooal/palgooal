<?php

namespace App\Http\Controllers;

use App\modals\Menu;
use Illuminate\Http\Request;
use Session;
use App\modals\Post;
use App\modals\Slider;
use App\modals\SubMenu;
use App\modals\Option;




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

        return view('index')
        ->with('posts', Post::get())
        ->with('sliders', Slider::get())
        ->with('menus', Menu::get())
        ->with('submenus' ,SubMenu::get())
        ->with('options' , Option::get());
        

    }
    public function show($id)
    {
        return view('singelPost')->with('post', Post::find($id));
    }
    function lang($local){
        Session::put('lang', $local);
        return redirect()->back();
    }
}
