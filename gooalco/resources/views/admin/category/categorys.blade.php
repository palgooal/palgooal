@extends('layouts.adminLayout')
@section('content')

<div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" style="min-height:1318px">
            <!-- BEGIN PAGE HEADER-->
            <div class="row">
      <div class="col-md-5">
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
              <i class="icon-settings font-red-sunglo"></i>
              <span class="caption-subject bold uppercase">اضافة  </span>
            </div>
          </div>
          <div class="portlet-body form">
            <form
              method="POST"
              action="/admin/categorys"
              enctype="multipart/form-data"
              accept-charset="UTF-8"
              class="form-horizontal"
              role="form"
            >
              @csrf
              <div class="form-body">

                    <div class="form-group">
                            <label>اسم التصنيف</label>
                            <input
                              class="form-control spinner"
                              type="text"
                              placeholder="اسم التصنيف"
                              name="name"
                              id="name"
                            />
                          </div>







                <div class="form-actions">
                    <button type="submit" class="btn blue">اضافة</button>
                  </div>

              </div>

            </form>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption">
              <i class="icon-social-dribbble font-green"></i>
              <span class="caption-subject font-green bold uppercase"
                >اخر الاعمال

              </span>
            </div>
          </div>
          <div class="portlet-body">
            <div class="table-scrollable">
              <table class="table table-hover">
                <thead>
                  <tr>

                        <td> اسم التصنيف</td>


                        <td>تعديل</td>
                        <td>حذف</td>


                  </tr>
                </thead>
                <tbody>
                    @foreach ($categorys as $category)


                  <tr>
                    <td>{{$category->name}}</td>






                    <td>
                      <a
                        href="/admin/categorys/{{$category->id}}/edit"
                        class="btn btn-primary"
                        >تعديل</a
                      >
                    </td>
                    <td>
                      <form
                        style="display: inline"
                    action="/admin/categorys/{{$category->id}}"
                        method="post"
                      >
                        <button type="submit" class="btn btn-danger">
                          <i class="fa fa-trash-o"></i> حذف
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
