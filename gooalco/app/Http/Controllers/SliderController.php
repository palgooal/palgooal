<?php

namespace App\Http\Controllers;

use App\modals\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.slider.Slider')->with('sliders', Slider::get() );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.addSlider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider();
        if($request->image !=null)
        {
            $path= $request->image->store('slider');
            $slider->image =$path;
        }

        $slider->title_ar =$request->title_ar;
        $slider->title2_ar =$request->title2_ar;
        $slider->text_blue_ar =$request->text_blue_ar;
        $slider->description_ar =$request->description_ar;
        $slider->title_en =$request->title_en;
        $slider->title2_en =$request->title2_en;
        $slider->text_blue_en =$request->text_blue_en;
        $slider->description_en =$request->description_en;
        $slider->save();

        return redirect('/admin/slider');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.slider.editSlider')->with('slider', Slider::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        if($request->image !=null)
        {
            $path= $request->image->store('slider');
            $slider->image =$path;
        }

        $slider->title_ar =$request->title_ar;
        $slider->title2_ar =$request->title2_ar;
        $slider->text_blue_ar =$request->text_blue_ar;
        $slider->description_ar =$request->description_ar;
        $slider->title_en =$request->title_en;
        $slider->title2_en =$request->title2_en;
        $slider->text_blue_en =$request->text_blue_en;
        $slider->description_en =$request->description_en;
        $slider->save();

        return redirect('/admin/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::destroy($id);
        return redirect('/admin/slider');
    }
}
