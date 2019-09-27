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
        method="post"
        action="/admin/slider/{{$slider->id}}"
        enctype="multipart/form-data"
        accept-charset="UTF-8"
        class="form-horizontal"
        role="form"
      >

      <input type="hidden" name="_method" value="put">
      @csrf
        <div class="form-body">
          <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#ar">اضافة سلايدر </a></li>
                  <li><a data-toggle="tab" href="#en">ADD SLIDER</a></li>
                </ul>
                <div class="tab-content">
                      <div id="ar" class="tab-pane fade in active">
                        <h3>اضافة خبر باللغة العربية</h3>
                        <div class="form-group">
                              <label>عنوان السلايدر باللغة العربية</label>
                              <input
                                class="form-control spinner"
                                type="text"
                                placeholder="اكتب هنا عنوان السلادير باللغة العربية"
                                name="title_ar"
                                id="title_ar"
                                value="{{$slider->title_ar}}"
                              />
                            </div>
                            <div class="form-group">
                                  <label>عنوان 2 السلادير باللغة العربية</label>
                                  <input
                                    class="form-control spinner"
                                    type="text"
                                    placeholder="اكتب هنا عنوان 2 السلادير باللغة العربية"
                                    name="title2_ar"
                                    id="title2_ar"
                                    value="{{$slider->title2_ar}}"
                                  />
                                </div>
                                <div class="form-group">
                                      <label>اكتب هنا عنوان بالون الأزرق باللغة العربية</label>
                                      <input
                                        class="form-control spinner"
                                        type="text"
                                        placeholder="اكتب هنا عنوان بالون الأزرق باللغة العربية"
                                        name="text_blue_ar"
                                        id="text_blue_ar"
                                        value="{{$slider->text_blue_ar}}"
                                      />
                                    </div>
                                    <div class="form-group">
                                          <label>وصف عام للسلايدر</label>
                                          <input
                                            class="form-control spinner"
                                            type="text"
                                            placeholder="اكتب هنا وصف عام للسلايدر"
                                            name="description_ar"
                                            id="description_ar"
                                            value="{{$slider->description_ar}}"
                                          />
                                        </div>
                      </div>
                              <div id="en" class="tab-pane ">
                                <h3>ADD slider</h3>
                                <div class="form-group">
                                      <label>Add title</label>
                                      <input
                                        class="form-control spinner"
                                        type="text"
                                        placeholder="Add  title  "
                                          name="title_en"
                                        id="title_en"
                                        value="{{$slider->title_en}}"
                                      />
                                    </div>


                                      <div class="form-group">
                                              <label>Add title 2</label>
                                          <input
                                            class="form-control spinner"
                                            type="text"
                                            placeholder="Add  title 2"
                                              name="title2_en"
                                            id="title2_en"
                                      value="{{$slider->title2_en}}"
                                          />
                                        </div>
                                          <div class="form-group">
                                                  <label>Add blue title</label>
                                              <input
                                                class="form-control spinner"
                                                type="text"
                                                placeholder="Add blue title"
                                                name="text_blue_en"
                                                id="text_blue_en"
                                              value="{{$slider->text_blue_en}}"
                                              />
                                            </div>

                                    <div class="form-group">
                                          <label>Add description</label>
                                      <input
                                        class="form-control spinner"
                                        type="text"
                                        placeholder="Add description"
                                        name="description_en"
                                        id="description_en"
                                    value="{{$slider->description_en}}"
                                      />
                                    </div>
                             </div>
                </div>
      <div class="form-group">
          <img src="{{asset('/images/'.$slider->image)}}" alt="" class="img-rounded"  width="100%" height="236">
          <br>
        <label>تحميل صورة خلفية السلايدر</label>
        <input class="form-control spinner" type="file" placeholder="تحميل الصورة" name="image" id="image" value="{{$slider->image}}"/>
      </div>
    </div>
        <div class="form-actions">
            <button type="submit" class="btn blue">تعديل</button>
            <a href="/admin/slider" type="button" class="btn default">الغاء</a>
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
