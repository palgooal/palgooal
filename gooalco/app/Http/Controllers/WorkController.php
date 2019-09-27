<?php

namespace App\Http\Controllers;

use App\Category as AppCategory;
use App\modals\Category;
use App\modals\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.work.works')->with('works',Work::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.work.works')->with('categorys', Category::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $work = new Work();
        if($request->image !=null)
        {
            $path= $request->image->store('Works');
            $work->image =$path;
        }
        $work->name = $request->name;
        $work->url = $request->url;
        $work->category_work_id = $request->category_work_id;
        $work->save();
        return redirect('/admin/works');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\modal\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modal\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.work.editWork')->with('work', Work::find($id))->with('categorys', Category::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\modal\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $work = Work::find($id);
        if($request->image !=null)
        {
            $path= $request->image->store('slider');
            $work->image =$path;
            $work->name = $request->name;
            $work->url = $request->url;
            $work->category_work_id = $request->category_work_id;
            $work->save();
            return redirect('/admin/works');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\modal\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Work::destroy($id);

        return redirect('admin/works');
    }
}
