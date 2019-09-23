<?php

namespace App\Http\Controllers;

use App\modals\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.menu.menus')->with('menus' , Menu::orderBy('number','asc')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.menu.addmenu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new Menu();
        $menu->name_ar = $request->name_ar;
        $menu->name_en = $request->name_en;
        $menu->url = $request->url;
        $menu->number = $request->number;
        $menu->save();
        return redirect('/admin/menus');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\modals\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modals\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view ('admin.menu.editmenu')->with('menu' , Menu::orderBy('number','asc')->get())->with('menu', $menu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\modals\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $menu->name_ar = $request->name_ar;
        $menu->name_en = $request->name_en;
        $menu->url = $request->url;
        $menu->number = $request->number;
        $menu->save();
        return redirect('/admin/menus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\modals\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::destroy($id);
        return redirect('/admin/menus');
    }
}
