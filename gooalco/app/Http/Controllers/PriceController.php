<?php

namespace App\Http\Controllers;

use App\modal\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.price.prices')->with('prices' , Price::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.price.prices');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $price = new Price();
        $price->name = $request->name;
        $price->price = $request->price;
        $price->storge = $request->storge;
        $price->num_email = $request->num_email;
        $price->num_database = $request->num_database;
        $price->num_website = $request->num_website;
        $price->description = $request->description;
        $price->data_transfare = $request->data_transfare;
        $price->backup = $request->backup;
        $price->save();
        return redirect('admin/price');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\modal\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modal\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $price)
    {
        return view ('admin.price.editprice')->with('price' ,$price );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\modal\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $price)
    {
        $price->name = $request->name;
        $price->price = $request->price;
        $price->storge = $request->storge;
        $price->num_email = $request->num_email;
        $price->num_database = $request->num_database;
        $price->num_website = $request->num_website;
        $price->description = $request->description;
        $price->data_transfare = $request->data_transfare;
        $price->backup = $request->backup;
        $price->save();
        return redirect('admin/price');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\modal\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Price::destroy($id);
        return redirect('admin/price');

    }
}
