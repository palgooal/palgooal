<?php

namespace App\Http\Controllers;

//use App\Menu as AppMenu;
use App\modals\Menu;

use App\modals\SubMenu;
use Illuminate\Http\Request;

class SubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view ('admin.menu.submenu.subMenus')
        ->with('submenus', SubMenu::orderBy('number', 'asc')->get())
        ->with('menus', Menu::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.menu.submenu.subMenus')->with('menus', Menu::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sub = new SubMenu();
        $sub->name= $request->name;
        $sub->url= $request->url;
        $sub->number= $request->number;
        $sub->menu_id= $request->menu_id;
        $sub->save();
        return redirect('/admin/submenus');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\modals\SubMenu  $subMenu
     * @return \Illuminate\Http\Response
     */
    public function show(SubMenu $subMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modals\SubMenu  $subMenu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view ('admin.menu.submenu.editSubmenu')
        ->with('submenu', SubMenu::orderBy('number', 'asc')->find($id))
        ->with('menus', Menu::get());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\modals\SubMenu  $subMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sub = SubMenu::find($id);
        $sub->name= $request->name;
        $sub->url= $request->url;
        $sub->number= $request->number;
        $sub->menu_id= $request->menu_id;
        $sub->save();
        return redirect('/admin/submenus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\modals\SubMenu  $subMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubMenu::destroy($id);
        return redirect('/admin/submenus');


    }
}
