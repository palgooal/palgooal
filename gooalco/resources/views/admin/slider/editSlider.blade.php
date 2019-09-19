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
        <span class="caption-subject bold uppercase"> Edit slider </span>
    </div>

</div>
<div class="portlet-body form">

    <form
        method="post"
        action="/admin/Slider/"
        enctype="multipart/form-data"
        accept-charset="UTF-8"
        class="form-horizontal"
        role="form"
      >

      <input type="hidden" name="_method" value="put">
      @csrf
        <div class="form-body">


         <div class="form-group">
          <label> Name Menus  </label>
         <input class="form-control spinner" type="text" placeholder="Name Text" name="title" id="title" value="{{$slider->title}}">


            </div>
            <div class="form-group">
              <label>  Url Menu  </label>
            <input class="form-control spinner" type="text" placeholder=" Url Menu" name="description" id="description" value="{{$slider->description}}">

            </div>
            <div class="form-group">
              <label>  image slider </label>
            {{-- <img src="{{asset('/images/'.$slider->image)}}" alt=""> --}}
            <input class="form-control spinner" type="file" placeholder=" sort" name="image" id="image" value="{{$slider->image}}">
          </div>

        </div>
        <div class="form-actions">
            <button type="submit" class="btn blue">Submit</button>
            <a href="/admin/Slider" type="button" class="btn default">Cancel</a>
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
