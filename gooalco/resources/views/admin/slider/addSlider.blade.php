@extends('layouts.adminLayout')
@section('adminContent')


<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="min-height:1318px">
        <!-- BEGIN PAGE HEADER-->
        <div class="row">
  <div class="col-md-12">
    <div class="portlet light bordered">
      <div class="portlet-title">
        <div class="caption font-red-sunglo">
          <i class="icon-settings font-red-sunglo"></i>
          <span class="caption-subject bold uppercase"> Add slider </span>
        </div>
      </div>
      <div class="portlet-body form">
        <form
          method="POST"
          action="/admin/slider"
          enctype="multipart/form-data"
          accept-charset="UTF-8"
          class="form-horizontal"
          role="form"
        >
          @csrf
          <div class="form-body">
            <div class="form-group">
              <label> title slider </label>
              <input
                class="form-control spinner"
                type="text"
                placeholder="Name Text"
                name="title"
                id="title"
              />
            </div>
            <div class="form-group">
              <label> description slider </label>
              <input
                class="form-control spinner"
                type="text"
                placeholder=" Url Menu"
                name="description"
                id="description"
              />
            </div>
            <div class="form-group">
              <label> images slider </label>
              <input
                class="form-control spinner"
                type="file"
                placeholder=" images slider"
                name="image"
                id="image"
              />
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn blue">Submit</button>
            <a href="/admin/Slider" class="btn default">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>

</div>
</div>

@endsection
