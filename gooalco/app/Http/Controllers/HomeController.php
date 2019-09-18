<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Post;

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
        return view('home')->with('posts', Post::get());
    }
    function lang($local){
        Session::put('lang', $local);
        return redirect()->back();
    }
}
