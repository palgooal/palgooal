@extends('layouts.adminLayout')
@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="min-height:1318px">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->


<div class="row">
<div class="col-md-8">

<div class="portlet light bordered">
<div class="portlet-title">
    <div class="caption font-red-sunglo">
        <i class="icon-settings font-red-sunglo"></i>
        <span class="caption-subject bold uppercase"> تعديل السلايدر </span>
    </div>

</div>
<div class="portlet-body form">
    <form
      method="POST"
action="/admin/slider/{{$slider->id}}"
      enctype="multipart/form-data"
      accept-charset="UTF-8"
      class="form-horizontal"
      role="form"
    >
      @csrf
      @method('put')
      <div class="form-body">
            <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#ar">اضافة سلايدر </a></li>
                    <li><a data-toggle="tab" href="#en">ADD SLIDER</a></li>
                  </ul>
                   <div class="tab-content">
                        <div id="ar" class="tab-pane fade in active">
                          <h3>اضافة سلايدر</h3>
                              <div class="form-group">
                                <label> محتوى السلايدر</label>
                              <textarea name="body_ar" id="body_ar" cols="30" rows="10" class="form-control ckeditor" placeholder="إضافة محتوى السلايدر هنا ... ">{{$slider->body_ar}}</textarea>
                            </div>
                        </div>
                                <div id="en" class="tab-pane ">
                                  <h3>ADD slider</h3>
                                      <div class="form-group">
                                        <label>Body of the slider</label>
                                        <textarea name="body_en" id="body_en" cols="30" rows="10" class="form-control ckeditor" placeholder="add body to slider ...">{{$slider->body_en}}</textarea>
                        </div></div></div>
        <div class="form-group">
          <label>تحميل صورة خلفية السلايدر</label>
          <input  class="form-control spinner" type="file" placeholder="تحميل الصورة"  name="image" id="image" value="{{$slider->image}}" />
        </div>
      </div>
      <div class="form-actions">
        <button type="submit" class="btn blue">اضافة</button>
        {{-- <a href="/admin/Slider" class="btn default">Cancel</a> --}}
      </div>
    </form>
  </div>
</div>
</div>
</div>


    </div>
    <!-- END CONTENT BODY -->
</div>


@endsection
