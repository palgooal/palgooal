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
          <label>عنوان السلايدر</label>
         <input class="form-control spinner" type="text" placeholder="عنوان عام للسلايدر" name="title" id="title" value="{{$slider->title}}">  
            

            </div>
            
                <div class="form-group">
                  <label>عنوان 2 السلايدر</label>
                  <input
                    class="form-control spinner"
                    type="text"
                    placeholder="اكتب هنا عنوان 2 السلايدر"
                value="{{$slider->title2}}"
                    name="title2"
                    id="title2"
                  />
                </div>
                
                    <div class="form-group">
                      <label>اكتب هنا عنوان بالون الازرق</label>
                      <input
                        class="form-control spinner"
                        type="text"
                        placeholder="اكتب هنا عنوان بالون الازرق"
                    value="{{$slider->text_blue}}"
                        name="text_blue"
                        id="text_blue"
                      />
                    </div>
            <div class="form-group">
              <label>وصف عام</label>
            <input class="form-control spinner" type="text" placeholder="كتابة وصف عام هنا" name="description" id="description" value="{{$slider->description}}"> 
            
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
