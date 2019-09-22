<?php

namespace App\Http\Controllers;

use App\modals\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.options.options')->with('options', Option::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.options.addOptions');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $options = new Option();
        $options->Copyright = $request->Copyright->default('جميع الحقوق محفوظة © شركة بال قول لتكنولوجيا المعلومات والدعاية والاعلان ');
        $options->save();

        return redirect('/admin/options');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\modals\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modals\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.options.options')->with('option', Option::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\modals\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $options = Option::find($id);
        $options->Copyright = $request->Copyright;
        $options->save();

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\modals\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Option $option)
    {
        //
    }
}
