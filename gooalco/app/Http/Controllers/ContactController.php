<?php

namespace App\Http\Controllers;

use App\modals\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('contact');
    }
    public function adminIndex()
    {
        return view ('admin.contact.contact')->with('contacts' , contact::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\modals\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.contact.showMessage')->with('contact',contact::where('subject', $id)->first());
    }
    public function sendEmailById($id){

        return view ('admin.contact.sendEmail')->with('contact',contact::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modals\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\modals\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\modals\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        contact::destroy($id);
        return redirect()->back();
    }
}
