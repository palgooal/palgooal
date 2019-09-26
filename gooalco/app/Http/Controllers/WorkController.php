<?php

namespace App\Http\Controllers;

use App\Category as AppCategory;
use App\modal\Category;
use App\modal\Work;
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
        return view('admin.work.works')->with('works',Work::get())->with('categorys',AppCategory::get(['id', 'name']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.work.works')->with('categorys',AppCategory::get(['id', 'name']));
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
        $work->save();
        $work->categorys()->attach($request->category_id);
        return redirect('admin/works');
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
    public function edit(Work $work)
    {
        return view('admin.work.editWork')->with('work', $work)->with('categorys',Category::get(['id', 'name']));
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
            $work->save();
            $work->categorys()->sync($request->category_id);

            return redirect('admin/works');
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
