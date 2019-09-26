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
                            <input
                              class="form-control spinner"
                              type="text"
                              placeholder="اسم الموقع"
                              name="name"
                              value="{{$category->name}}"

                              id="name"
                            />
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
