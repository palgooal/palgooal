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
          action="/admin/works/{{$work->id}}"
              enctype="multipart/form-data"
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
                              value="{{$work->name}}"

                              id="name"
                            />
                          </div>
                          <div class="form-group">
                            <label>رابط الموقع</label>
                            <input
                              class="form-control spinner"
                              type="text"
                              placeholder="رابط الموقع"
                              name="url"
                          value="{{$work->url}}"
                              id="url"
                            />
                          </div>
                          <div class="form-group">
                            <label>التصنيفات </label>

                          <div >
                            <select
                              class="form-control"

                              id="category_id"

                              name="category_id[]"
                              multiple
                              @foreach ($categorys as $category)


                          ><option @foreach ($work->categorys as $category)
                            {{$category->id == $category->id ? "selected" : ""}}
                            @endforeach

                            >{{$category->name}}</option>
                              @endforeach
                             </select
                            >

                            <span class="help-block">
                              <strong></strong>
                            </span>
                          </div></div>
                          <div class="form-group">
                              <label>صورة الموقع</label>
                              <input
                                class="form-control spinner"
                                type="file"
                                placeholder="صورة الموقع"
                                name="image"
                                value="{{$work->image}}"
                                id="image"
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
