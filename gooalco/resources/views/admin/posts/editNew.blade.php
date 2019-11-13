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

    <form  method="post" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data"  accept-charset="UTF-8" class="form-horizontal" role="form" >

      <input type="hidden" name="_method" value="put">
      @csrf
      <div class="form-body">


        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#ar">اضافة خبر باللغة العربية</a></li>
          <li><a data-toggle="tab" href="#en">اضافة خبر باللغة الانجليزية</a></li>

        </ul>

        <div class="tab-content">
          <div id="ar" class="tab-pane fade in active">
            <h3>اضافة خبر باللغة العربية</h3>
            <div class="form-group">
                <label>عنوان التدوينة</label>
            <input class="form-control spinner" type="text" placeholder="العنوان" name="Title_ar" id="Title_ar" value="{{$post->Title_ar}}">
            </div>
            <div class="form-group">
                <label>نص التدوينة</label>
            <textarea name="Body_ar" id="Body_ar" cols="30" rows="10" class="form-control ckeditor" placeholder="إضافة وصف هنا ... ">{{$post->Body_ar}}</textarea>

            </div>
            <div class="form-group">
                <label>اسم الكاتب</label>
            <input class="form-control spinner" type="text" placeholder="الكاتب" name="Auther_ar" id="Auther_ar" value="{{$post->Auther_ar}}">
            </div>
          </div>

          <div id="en" class="tab-pane fade">
            <h3>Add post in Engilsh</h3>
            <div class="form-group">
                    <label>Add title</label>
            <input class="form-control spinner" type="text" placeholder="Add title of the post" name="Title_en" id="Title_en" value="{{$post->Title_en}}">
                </div>

            <div class="form-group">
                    <label>Add body of the post</label>
            <textarea name="Body_en" id="Body_en" cols="30" rows="10" class="form-control ckeditor" placeholder=" Add body of the post ">{{$post->Body_en}}</textarea>

                </div>

                    <div class="form-group">
                            <label>Auther</label>
                    <input class="form-control spinner" type="text" placeholder="Auther" name="Auther_en" id="Auther_en" value="{{$post->Auther_en}}">
                        </div>
                    </div>
                </div>
              <img src="{{asset('/images/'.$post->image)}}" alt="" class="img-thumbnail">
            <div class="form-group">
                <label>تحميل الصور</label>
                <input class="form-control spinner" type="file" placeholder="تحميل الصور" name="image" id="image">
            </div>
        <div class="form-actions">
    <button type="submit" class="btn blue">تعديل</button>
    <a href="/admin/posts" class="btn default">الغاء</a>
</div>
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
