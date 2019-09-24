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
        <span class="caption-subject bold uppercase"> تعديل صفحة </span>
    </div>

</div>
<div class="portlet-body form">
    <form
        method="POST"
action="/admin/pages/{{$page->id}}"
        accept-charset="UTF-8"
        class="form-horizontal"
        role="form"
      >
      @csrf
        <div class="form-body">

            <div class="form-group">
                <label> عنوان الصفحة   </label>
            <input class="form-control spinner" type="text" placeholder=" عنوان الصفحة" value="{{$page->title}}" name="title" id="عنوان الصفحة">
            </div>
            <div class="form-group">
                <label>   المحتوى  </label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control summernote" placeholder=" المحتوى ">{{$page->content}}</textarea>

            </div>
            <label> Slug  </label>
                <input class="form-control spinner" type="text" placeholder="slug" value="{{$page->slug}}" name="slug" id="slug">
            </div>

        </div>
        <div class="form-actions">
            <button type="submit" class="btn blue">تعديل</button>
            <button type="button" class="btn default">الغاء</button>
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
