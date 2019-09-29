<?php

namespace App\Http\Controllers;

use App\modals\categorieWork;
use Illuminate\Http\Request;

class CategorieWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.categorys')->with('categorys', categorieWork::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.categorys')->with('categorys', categorieWork::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorieWork = new categorieWork() ;
        $categorieWork->name_ar = $request->name_ar;
        $categorieWork->name_en = $request->name_en;
        $categorieWork->save();

        return redirect('/admin/categorys');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\modals\categorieWork  $categorieWork
     * @return \Illuminate\Http\Response
     */
    public function show(categorieWork $categorieWork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modals\categorieWork  $categorieWork
     * @return \Illuminate\Http\Response
     */
    public function edit(categorieWork $categorieWork)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\modals\categorieWork  $categorieWork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categorieWork $categorieWork)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\modals\categorieWork  $categorieWork
     * @return \Illuminate\Http\Response
     */
    public function destroy(categorieWork $categorieWork)
    {
        //
    }
}
