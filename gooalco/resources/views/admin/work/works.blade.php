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
              <span class="caption-subject bold uppercase">اضافة عرض </span>
            </div>
          </div>
          <div class="portlet-body form">
            <form
              method="POST"
              action="/admin/works"
              enctype="multipart/form-data"
              accept-charset="UTF-8"
              class="form-horizontal"
              role="form"
            >
              @csrf
              <div class="form-body">

                    <div class="form-group">
                            <label>اسم الموقع</label>
                            <input
                              class="form-control spinner"
                              type="text"
                              placeholder="اسم الموقع"
                              name="name"
                              id="name"
                            />
                          </div>
                          <div class="form-group">
                            <label>رابط الموقع</label>
                            <input
                              class="form-control spinner"
                              type="text"
                              placeholder="رابط الموقع"
                              name="url"
                              id="url"
                            />
                          </div>
                          <div class="form-group">
                            <label for="category_work_id">التصنيفات </label>

                          <div >
                            <select class="form-control" id="category_work_id" name="category_work_id">
                              @foreach ($categorys as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
                             </select>

                            <span class="help-block">
                              <strong></strong>
                            </span>
                          </div></div>


                          <div class="form-group">
                              <label>صورة الموقع</label>
                              <input
                                class="form-control spinner"
                                type="file"
                                placeholder="صورة الموقع"
                                alt="defult"
                                name="image"
                                id="image"
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

                        <td> اسم الموقع</td>
                        <td>رابط الموقع</td>
                        <td>صورة الموقع  </td>

                        <td>تعديل</td>
                        <td>حذف</td>


                  </tr>
                </thead>
                <tbody>
                    @foreach ($works as $work)


                  <tr>
                    <td>{{$work->name}}</td>
                  <td>{{$work->url}}</td>
                  <td>{{$work->image}}</td>





                    <td>
                      <a
                        href="/admin/works/{{$work->id}}/edit"
                        class="btn btn-primary"
                        >تعديل</a
                      >
                    </td>
                    <td>
                      <form
                        style="display: inline"
                    action="/admin/works/{{$work->id}}"
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
