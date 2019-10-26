<?php

namespace App\Http\Controllers;

use App\sms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sms.sms')->with('success');    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sms.sms');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $sms = new sms();
        
        $sms->sender = $request->sender;
        $sms->phone = $request->phone;
        $sms->body = $request->body;
        $urlsm= 'https://sms.palgooal.com/sendbulksms.php?user_name=palgoal&user_pass=PAL@gooal123&sender='.$request->sender.'&mobile='.$sms->phone.'&type=0&text='.$sms->body;
      //dd($urlsm);
    //     $ch = curl_init($urlsm);
    //     $sms=curl_exec($ch);
    //     curl_close($ch);
    //    dd($sms);

        $c= file_get_contents($urlsm);
                
      return back($c);
        return Redirect('/admin/sms')->with('success','تم الارسال بنجاح');
        //return Redirect('/admin/sms');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function show(sms $sms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function edit(sms $sms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sms $sms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function destroy(sms $sms)
    {
        //
    }
}
