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
            action="/admin/sendemail"
            accept-charset="UTF-8"
            class="form-horizontal"
            role="form">
                @csrf

                @if(Session::has("success"))
                <div class="alert alert-succsess">
                    <b>تم الإرسال بنجاح  </b>
                </div>
                @endif



            <div id="contact-result"></div>


            <div class="col-md-12">
                    <input class="form-control input-box" type="text" name="subject" placeholder="عنوان الرسالة">
            <input class="form-control input-box mb20" type="email" name="email" value="{{$contact->email}}" placeholder="عنوان البريد المرسل اليه">
            </div>
            <div class="col-md-12">

            <textarea  class="form-control summernote" rows="8" name="message" placeholder="الرسالة"></textarea>

            <button type="submit" class="btn btn-border btn-blue"class="btn blue">ارسال</button>
            </div>
            </form>

            </div>
            </div>



    </div>
    <!-- END CONTENT BODY -->
</div>
@endsection
