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
        <span class="caption-subject bold uppercase">تعديل التدوينة</span>
    </div>

</div>
<div class="portlet-body form">

    <form
        method="post"
        action="/admin/posts/{{$post->id}}"
        enctype="multipart/form-data"
        accept-charset="UTF-8"
        class="form-horizontal"
        enctype="multipart/form-data"
        role="form"
      >

      <input type="hidden" name="_method" value="put">
      @csrf
      <div class="form-body">

            <div class="form-group">
                <label>عنوان التدوينة باللغة العربية</label>
            <input class="form-control spinner" type="text" placeholder="العنوان باللغة العربية" name="Title_ar" value="{{$post->Title_ar}}" id="Title">
            </div>
            <div class="form-group">
                    <label>عنوان التدوينة باللغة الانجليزية</label>
                    <input class="form-control spinner" type="text" placeholder="العنوان باللغة الانجليزية" name="Title_en" value="{{$post->Title_en}}" id="Title">
                </div>
            <div class="form-group">
                <label>نص التدوينة باللغة العربية</label>
                <textarea name="Body_ar" id="Body" cols="30" rows="10" class="form-control" placeholder="إضافة وصف هنا باللغة العربية ... ">{{$post->Body_ar}}</textarea>

            </div>
            <div class="form-group">
                    <label>نص التدوينة باللغة الانجليزية</label>
                    <textarea name="Body_en" id="Body" cols="30" rows="10" class="form-control" placeholder="إضافة وصف هنا باللغة الانجليزية ... ">{{$post->Body_en}}</textarea>

                </div>
                <div class="form-group">
                        <label>اسم الكاتب بالغة العربية</label>
                        <input class="form-control spinner" type="text" placeholder="الكاتب باللغة العربية" name="Auther_ar" value="{{$post->Auther_ar}}" id="Auther">
                    </div>
                    <div class="form-group">
                            <label>اسم الكاتب بالغة الانجليزية</label>
                            <input class="form-control spinner" type="text" placeholder="الكاتب باللغة الانجليزية" name="Auther_en"value="{{$post->Auther_en}}" id="Auther">
                        </div>

            </div>
            <div class="form-group">
                <img src="{{asset ('/images/'.$post->image)}}" class="img-rounded img-thumbnail"  alt=""  width="304" height="236">
                <br>
                <label>تحميل الصورة</label>
            <input class="form-control spinner" type="file" placeholder=" Uploed image" name="image" id="image" value="{{$post->image}}">
            </div>
            {{-- <div class="form-group">
                <label for="catagory_id" class="col-md-2 control-label">التصنيف</label>

                {{-- <div class="col-md-8">
                  <select
                    class="form-control"
                    required="required"
                    id="catagory_id"
                    name="catagory_id[]"
                    multiple
                    >
                    @foreach ($categorys as $category)
                    <option value="{{$category->id}}"
                            @foreach ($post->categories as $categoryp)
                                {{$categoryp->id == $category->id ? "selected" : "" }}
                            @endforeach

                        >{{$category->title}}</option>
                    @endforeach

                    </select> --}}

                  {{-- <span class="help-block">
                    <strong></strong>
                  </span>
                </div>
              </div>  --}}
        </div>
        <div class="form-actions">
            <button type="submit" class="btn blue">تعديل</button>
            <a href="/admin/posts" type="button" class="btn default">الغاء</a>
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
