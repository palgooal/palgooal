@extends('layouts.adminLayout')
@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="min-height:1318px">
        <div class="portlet-title">
            <div class="caption font-red-sunglo">


                <span class="caption-subject bold uppercase"><h2>{{$contact->subject}}</h2>  </span>
            </div>
        </div>
    </br>
        <form >
            <table></table>


             <label>اسم المرسل  </label>&nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp;  <label> {{$contact->name}}</label></br>
            <label> البريد الاكلتورني  </label> &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp;  <label> {{$contact->email}}</label></br>
            <label>محتوى الرسالة   </label> &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp;  <p> {{$contact->message}}</p></br>

          </form>
    </div>
    <!-- END CONTENT BODY -->
</div>
@endsection
