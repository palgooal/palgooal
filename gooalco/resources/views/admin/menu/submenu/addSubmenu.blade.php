@extends('layouts.adminLayout')
@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="min-height:1318px">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->


<div class="row">
<div class="col-md-6">

<div class="portlet light bordered">
<div class="portlet-title">
    <div class="caption font-red-sunglo">
        <i class="icon-settings font-red-sunglo"></i>
        <span class="caption-subject bold uppercase">تعديل قائمة فرعية </span>
    </div>
</div>

    <div class="portlet-body form">
        <form
            method="POST"
    action="/admin/submenus/create"
            accept-charset="UTF-8"
            class="form-horizontal"
            role="form"
            enctype="multipart/form-data"
          >
          @csrf
            <div class="form-body">
                    <div class="form-group">
                            <label for="القوائم" class="col-md-1 control-label"
                              >القوائم</label
                            >

                            <div class="col-md-11">
                              <select
                                class="form-control"

                                id="القوائم"
                                name="menu_id"
                                @foreach ($menus as $menu)


                                ><option value="{{$menu->id}}">{{$menu->name_en}}</option
                                >
                                @endforeach</select
                              >


                              <span class="help-block">
                                <strong></strong>
                              </span>
                            </div>
                          </div>


                <div class="form-group">
                    <label>اسم القائمة الفرعية</label>
                    <input class="form-control spinner" type="text" placeholder="اسم القائمة" name="name" id="اسم القائمة">
                </div>
                <div class="form-group">
                    <label>الرابط</label>
                    <input class="form-control spinner" type="text" placeholder="الرابط" name="url" id="الرابط">
                </div>
                <div class="form-group">
                    <label>الرقم</label>
                    <input class="form-control spinner" type="number" placeholder="الرقم" name="number" id="الرقم">
                </div>




            <div class="form-actions">
                <button type="submit" class="btn blue">اضافة</button>
                <a href="/admin/posts" class="btn default">الغاء</a>
            </div>

        </form>



    </div>
</div>
</div>

    @endsection
