@extends('layouts.adminLayout')
@section('content')

<div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" style="min-height:1318px">
            <!-- BEGIN PAGE HEADER-->
            <div class="row">
      <div class="col-md-6">
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
              <i class="icon-settings font-red-sunglo"></i>
              <span class="caption-subject bold uppercase">اضافة عرض </span>
            </div>
          </div>
          <div class="portlet-body form">
            <form
              method="POST"
          action="/admin/categorys/{{$category->id}}"
              accept-charset="UTF-8"
              class="form-horizontal"
              role="form"
            >
              @csrf
              @method('put')
              <div class="form-body">
                    <div class="form-group">
                            <label>اسم الموقع</label>
                            <input class="form-control spinner" type="text" placeholder="اسم الموقع" name="name_ar" value="{{$category->name_ar}}" id="name_ar"/>
                          </div>
                          <div class="form-group">
                            <label>اسم الموقع</label>
                            <input class="form-control spinner" type="text" placeholder="اسم الموقع" name="name_en" value="{{$category->name_en}}" id="name_en"/>
                          </div>
                <div class="form-actions">
                    <button type="submit" class="btn blue">تعديل</button>
                  </div>

              </div>

            </form>
          </div>
        </div>
      </div>
@endsection
