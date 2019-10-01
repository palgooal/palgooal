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
        <span class="caption-subject bold uppercase"> اضافة صفحة </span>
    </div>

</div>
<div class="portlet-body form">
    <form
        method="POST"
        action="/admin/pages"
        accept-charset="UTF-8"
        class="form-horizontal"
        role="form"
      >
      @csrf
        <div class="form-body">
                    <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#ar">اضافة صفحة باللغة العربية</a></li>
                            <li><a data-toggle="tab" href="#en">Add English page</a></li>
                    </ul>
                    <div class="tab-content">
                    <div id="ar" class="tab-pane fade in active">
                    <h3>اضافة صفحة باللغة العربية</h3>
                 <div class="form-group">
                <label> عنوان الصفحة   </label>
                <input class="form-control spinner" type="text" placeholder=" عنوان الصفحة" name="title_ar" id="title_ar">
                 </div>
            <div class="form-group">
                <label>   المحتوى  </label>
                <textarea name="content_ar" id="content_ar" cols="30" rows="10" class="form-control summernote" placeholder=" المحتوى "></textarea>
            </div>
                    </div>
            <div id="en" class="tab-pane fade">
                    <h3>Add post in Engilsh</h3>
                    <div class="form-group">
                            <label>Page title</label>
                            <input class="form-control spinner" type="text" placeholder=" عنوان الصفحة" name="title_en" id="title_en">
                             </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content_en" id="content_en" cols="30" rows="10" class="form-control summernote" placeholder=" المحتوى "></textarea>
                        </div>
            </div>
            {{-- <div class="form-group">
                    <label>slug</label>
                    <input class="form-control spinner" type="text" placeholder=" عنوان الصفحة" name="slug" id="slug">
                     </div> --}}
            
        </div>
        <div class="form-actions">
            <button type="submit" class="btn blue">اضافة</button>
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
