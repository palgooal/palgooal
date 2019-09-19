
@extends('layouts.adminLayout')
@section('content')

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
          <span class="caption-subject bold uppercase"> Edit new </span>
        </div>
      </div>
      <div class="portlet-body form">
        <form
          method="POST"
          action="/admin/posts/{{$post->id}}"
          accept-charset="UTF-8"
          class="form-horizontal"
          role="form"
          enctype="multipart/form-data"
        >
        @method('put')
          @csrf

          <div class="form-body">
            <div class="form-group">
              <label> Title </label>
              <input
                class="form-control spinner"
                type="text"
                placeholder="Title"
                name="Title"
                id="Title"
                value="{{$post->Title}}"
              />
            </div>
            <div class="form-group row">
                <label for="Auther" class="col-4 col-form-label">Auther</label>
                <div class="col-8">
                    <input id="Auther"
                           name="Auther"
                           placeholder="Auther"
                           class="form-control here"
                           type="text"
                           value="{{$post->Auther}}" />

                </div>
            </div>
            <div class="form-group row">
                <label for="Body" class="col-4 col-form-label">Body</label>
                <div class="col-8">
                    <textarea id="Body"
                              name="Body"
                              class="form-control here">{{$post->Body}}"</textarea>

                </div>
            </div>
            <div class="form-group row">
                <label for="time" class="col-4 col-form-label">Image </label>

                <div class="col-8">
                    <input id="image"
                           name="image"
                           placeholder="Image Online URL"
                           class="form-control here"
                           type="file"
                            />

                </div>
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn blue">Submit</button>
            <a href="/admin/Submenus" class="btn default">Add Submenus</a>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>

</div>
</div>
@endsection
