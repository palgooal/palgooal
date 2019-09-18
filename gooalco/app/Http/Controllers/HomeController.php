<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\modals\Post;
use DB;

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
        
        return view('index')->with('posts', Post::get());
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
