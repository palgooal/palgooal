@extends('layouts.adminLayout')
@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="min-height:1318px">
        <div class="col-md-8 pt40">
            <h3 class="uppercase text-center">ارسال رسالة</h3>
            <div class="row contact-form nomargin pt40">

            <form
             method="post"
            action="/admin/sms"
            accept-charset="UTF-8"
            class="form-horizontal"
            role="form">
                @csrf

               
                <div class="alert alert-succsess">
                    <b>{{$success}}</b>
                </div>
               



            <div id="contact-result"></div>


            <div class="col-md-12">
                    <input class="form-control input-box" type="text" name="sender" placeholder="اسم المرسل">
            <input class="form-control input-box mb20" type="number" name="phone"  placeholder="رقم الجوال مبدء بمقدمة الدولة">
            </div>
            <div class="col-md-12">

            <textarea  class="form-control" rows="8" name="body" placeholder="الرسالة"></textarea>

            <button type="submit" class="btn btn-border btn-blue"class="btn blue">ارسال</button>
            </div>
            </form>

            </div>
            </div>



    </div>
    <!-- END CONTENT BODY -->
</div>
@endsection
