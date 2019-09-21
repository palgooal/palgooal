<?php

namespace App\Http\Controllers;

use App\modal\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::get();
        return view ('admin.pages.pages')->with('page', $pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('admin.pages.addPage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page();
        $page->slug = $request->slug;
        $page->title = $request->title;
        $page->content = $request->content;
        $page->save();
        return redirect('/admin/pages');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\modal\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modal\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view ('admin.pages.pages')->with('page',  $page);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\modal\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $page->slug = $request->slug;
        $page->title = $request->title;
        $page->content = $request->content;
        $page->save();
        return redirect('/admin/pages');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\modal\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::destroy($id);
        return redirect('/admin/pages');
    }
}
