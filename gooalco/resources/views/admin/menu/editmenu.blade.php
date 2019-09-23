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
        <span class="caption-subject bold uppercase">تعديل القائمة</span>
    </div>

</div>
<div class="portlet-body form">

    <form
        method="post"
        action="/admin/menus/{{$menu->id}}"
        accept-charset="UTF-8"
        class="form-horizontal"
        role="form"
      >

      <input type="hidden" name="_method" value="put">
      @csrf
        <div class="form-body">


            <div class="form-group">
                <label>اسم القائمة بالعربية</label>
                <input
                  class="form-control spinner"
                  type="text"
                  placeholder="اكتب عنوان القائمة بالعربية"
                  value="{{$menu->name_ar}}"
                  name="name_ar"
                  name="name_ar"
                />
                
              </div>
            <div class="form-group">
                <label>اسم القائمة بالانجليزية</label>
                <input
                  class="form-control spinner"
                  type="text"
                  placeholder="اكتب عنوان القائمة بالانجليزية"
                  value="{{$menu->name_en}}"
                  name="name_en"
                  id="name_en"
                />
              </div>
            <div class="form-group">
              <label>رابط عنوان القائمة </label>
            <input class="form-control spinner" type="text" placeholder="اكتب هنا رابط القائمة url http://" name="url" id="url" value="{{$menu->url}}">

            </div>
            <div class="form-group">
              <label>ترتيب القائمة</label>
            <input class="form-control spinner" type="number" placeholder="ترتيب القائمة" name="number" id="number" value="{{$menu->number}}">
          </div>

        </div>
        <div class="form-actions">
            <button type="submit" class="btn blue">اضافة</button>
            <a href="/admin/menus" type="button" class="btn default">الغاء</a>
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
