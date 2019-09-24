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
            <div class="form-group">
              <label>عنوان السلايدر باللغة العربية</label>
              <input
                class="form-control spinner"
                type="text"
                placeholder="اكتب هنا عنوان السلادير باللغة العربية"
                name="title_ar"
                value="{{$slider->title_ar}}"
                id="title_ar"
              />
            </div>
            <div class="form-group">
                <label>عنوان السلايدر باللغة الانجليزية</label>
                <input
                  class="form-control spinner"
                  type="text"
                  placeholder="اكتب هنا عنوان السلادير باللغة الانجليزية"
                  name="title_en"
                  value="{{$slider->title_en}}"
                  id="title_en"
                />
              </div>

                <div class="form-group">
                  <label>عنوان 2 السلادير باللغة العربية</label>
                  <input
                    class="form-control spinner"
                    type="text"
                    placeholder="اكتب هنا عنوان 2 السلادير باللغة العربية"
                    name="title2_ar"
                    value="{{$slider->title2_ar}}"
                    id="title2_ar"
                  />
                </div>
                <div class="form-group">
                    <label>عنوان 2 السلايدر بالانجليزية</label>
                    <input
                      class="form-control spinner"
                      type="text"
                      placeholder="اكتب هنا عنوان 2 السلايدر بالانجليزية"
                      name="title2_en"
                      value="{{$slider->title2_en}}"
                      id="title2_en"
                    />
                  </div>


                    <div class="form-group">
                      <label>اكتب هنا عنوان بالون الأزرق باللغة العربية</label>
                      <input
                        class="form-control spinner"
                        type="text"
                        placeholder="اكتب هنا عنوان بالون الأزرق باللغة العربية"
                        name="text_blue_ar"
                        value="{{$slider->text_blue_ar}}"
                        id="text_blue_ar"
                      />
                    </div>
                    <div class="form-group">
                        <label>اكتب هنا عنوان بالون الأزرق باللغة الانجليزية</label>
                        <input
                          class="form-control spinner"
                          type="text"
                          placeholder="اكتب هنا عنوان بالون الأزرق باللغة الانجليزية"
                          name="text_blue_en"
                          value="{{$slider->text_blue_en}}"
                          id="text_blue_en"
                        />
                      </div>
            <div class="form-group">
              <label>وصف عام للسلايدر</label>
              <input
                class="form-control spinner"
                type="text"
                placeholder="اكتب هنا وصف عام للسلايدر"
                name="description_ar"
                value="{{$slider->description_ar}}"
                id="description_ar"
              />
            </div>




              <div class="form-group">
                <label>وصف عام للسلايدر بالإنجليزية</label>
                <input
                  class="form-control spinner"
                  type="text"
                  placeholder="اكتب هنا وصف عام للسلايدر بالإنجليزية"
                  name="description_en"
                  value="{{$slider->description_en}}"
                  id="description_en"
                />
              </div>
            <div class="form-group">
                <img src="{{asset('/images/'.$slider->image)}}" class="img-rounded img-thumbnail"  alt=""  width="304" height="236">
                <br>
              <label>تحميل صورة خلفية للسلايد</label>
              <input class="form-control spinner" type="file" placeholder="تحميل صورة" name="image" id="image" value="{{$slider->image}}">
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
