<?php

namespace App\Http\Controllers;

use App\modals\Page;
use Illuminate\Http\Request;
use unique;
use Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.pages')->with('pages', Page::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.addPage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $slug = Str::slug ($request->title_en ==null) ? Str::slug($request->title_ar) : Str::slug($request->title_en)  ;
        
        $pages = new Page();
        $pages->title_ar =$request->title_ar;
        $pages->title_en =$request->title_en;
        $pages->content_ar =$request->content_ar;
        $pages->content_en =$request->content_en;
        $pages->slug =$slug;
        $pages->save();

        return redirect('/admin/pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
         return view('pages')->with('page', Page::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return  view('admin.pages.editPage')->with('page', Page::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slug = Str::slug ($request->title_en ==null) ? Str::slug($request->title_ar) : Str::slug($request->title_en);
        $pages = Page::find($id);
        $pages->slug =$slug;
        $pages->title_ar =$request->title_ar;
        $pages->title_en =$request->title_en;
        $pages->content_ar =$request->content_ar;
        $pages->content_en =$request->content_en;

        $pages->save();

        return redirect('/admin/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::destroy($id);
        return redirect('/admin/pages');
    }
}
