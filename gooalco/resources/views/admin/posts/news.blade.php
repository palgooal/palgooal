
@extends('layouts.adminLayout')
@section('content')

{{-- <div class="container" style="margin-top:100px">
    <br />
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h4>Add Posts</h4>
                    <hr />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="/admin/posts" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-4 col-form-label">Title</label>
                            <div class="col-8">
                                <input id="Title"
                                       name="Title"
                                       placeholder="title"
                                       class="form-control here"
                                       type="text" />
                                <div class="valid-feedback">Looks good!</div>

                                <div class="invalid-feedback">
                                    Please title is required.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Auther" class="col-4 col-form-label">Auther</label>
                            <div class="col-8">
                                <input id="Auther"
                                       name="Auther"
                                       placeholder="Auther"
                                       class="form-control here"
                                       type="text" />
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please Auther is required.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Body" class="col-4 col-form-label">Body</label>
                            <div class="col-8">
                                <textarea id="Body"
                                          name="Body"

                                          class="form-control here"></textarea>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please Price is required.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="time" class="col-4 col-form-label">Image </label>

                            <div class="col-8">
                                <input id="image"
                                       name="image"
                                       placeholder="Image Online URL"
                                       class="form-control here"
                                       type="file" />
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please Image is required.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div> --}}

<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="min-height:1318px">
        <!-- BEGIN PAGE HEADER-->
        <div class="row">
  <div class="col-md-6">
    <div class="portlet light bordered">
      <div class="portlet-title">
        <div class="caption font-red-sunglo">
          <i class="icon-settings font-red-sunglo"></i>
          <span class="caption-subject bold uppercase"> Add news </span>
        </div>
      </div>
      <div class="portlet-body form">
        <form
          method="POST"
          action="/admin/posts"
          accept-charset="UTF-8"
          class="form-horizontal"
          role="form"
        >
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
              />
            </div>
            <div class="form-group row">
                <label for="Auther" class="col-4 col-form-label">Auther</label>
                <div class="col-8">
                    <input id="Auther"
                           name="Auther"
                           placeholder="Auther"
                           class="form-control here"
                           type="text" />

                </div>
            </div>
            <div class="form-group row">
                <label for="Body" class="col-4 col-form-label">Body</label>
                <div class="col-8">
                    <textarea id="Body"
                              name="Body"

                              class="form-control here"></textarea>

                </div>
            </div>
            <div class="form-group row">
                <label for="time" class="col-4 col-form-label">Image </label>

                <div class="col-8">
                    <input id="image"
                           name="image"
                           placeholder="Image Online URL"
                           class="form-control here"
                           type="file" />

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
  <div class="col-md-6">
    <!-- BEGIN SAMPLE TABLE PORTLET-->
    <div class="portlet light bordered">
      <div class="portlet-title">
        <div class="caption">
          <i class="icon-social-dribbble font-green"></i>
          <span class="caption-subject font-green bold uppercase"
            >All posts
          </span>
        </div>
      </div>
      <div class="portlet-body">
        <div class="table-scrollable">
          <table class="table table-hover">
            <thead>

              <tr>
                <th>Title</th>
                <th>Auther</th>
                <th>Body</th>
                <th>image</th>
                <th>Edit</th>
                <th>Deleted</th>
              </tr>
            </thead>
            <tbody>
                    @foreach ($posts as $item)




              <tr>
              <td>{{$item->Title}}</td>
                <td>{{$item->Auther}}</td>
                <td>{{$item->Body}}</td>
                <td>{{$item->image}}</td>
                <td>

                  {{--
                  <a
                    href="/admin/Menus/{{$item->id}}/edit"
                    class="btn btn-xs
                                                btn-info"
                    >Edit</a
                  >
                  --}} {{--
                  <button
                    class="edit"
                    data-id="{{$item->id}}"
                    type="button"
                    class="btn btn-primary"
                  >
                    <i class="fa fa-edit"></i> Edit
                  </button>
                  --}}
                  <a
                href="/admin/posts/{{$item->id}}/edit"
                    class="btn btn-primary"
                    >Edit</a
                  >
                </td>
                <td>
                  <form
                    style="display: inline"
                    action="/admin/Menus/"
                    method="post"
                  >
                    <button type="submit" class="btn btn-danger">
                      <i class="fa fa-trash-o"></i> Delete
                    </button>

                    @method('delete') @csrf
                  </form>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- END SAMPLE TABLE PORTLET-->
  </div>
</div>

</div>
</div>

@endsection
