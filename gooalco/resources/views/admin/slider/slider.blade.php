@extends('layouts.adminLayout')
@section('content')

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
              <span class="caption-subject bold uppercase">اضافة سلايدر</span>
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
                    <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#ar">اضافة سلايدر </a></li>
                            <li><a data-toggle="tab" href="#en">ADD SLIDER</a></li>
                          </ul>
                          <div class="tab-content">
                                <div id="ar" class="tab-pane fade in active">
                                  <h3>اضافة خبر باللغة العربية</h3>
                                  <div class="form-group">
                                        <label>عنوان السلايدر باللغة العربية</label>
                                        <input
                                          class="form-control spinner"
                                          type="text"
                                          placeholder="اكتب هنا عنوان السلادير باللغة العربية"
                                          name="title_ar"
                                          id="title_ar"
                                        />
                                      </div>
                                      <div class="form-group">
                                            <label>عنوان 2 السلادير باللغة العربية</label>
                                            <input
                                              class="form-control spinner"
                                              type="text"
                                              placeholder="اكتب هنا عنوان 2 السلادير باللغة العربية"
                                              name="title2_ar"
                                              id="title2_ar"
                                            />
                                          </div>
                                          <div class="form-group">
                                                <label>اكتب هنا عنوان بالون الأزرق باللغة العربية</label>
                                                <input
                                                  class="form-control spinner"
                                                  type="text"
                                                  placeholder="اكتب هنا عنوان بالون الأزرق باللغة العربية"
                                                  name="text_blue_ar"
                                                  id="text_blue_ar"
                                                />
                                              </div>
                                              <div class="form-group">
                                                    <label>وصف عام للسلايدر</label>
                                                    <input
                                                      class="form-control spinner"
                                                      type="text"
                                                      placeholder="اكتب هنا وصف عام للسلايدر"
                                                      name="description_ar"
                                                      id="description_ar"
                                                    />
                                                  </div>
                                </div>
                                        <div id="en" class="tab-pane ">
                                          <h3>ADD slider</h3>
                                          <div class="form-group">
                                                <label>Add title</label>
                                                <input
                                                  class="form-control spinner"
                                                  type="text"
                                                  placeholder="Add  title  "
                                                    name="title_en"
                                                  id="title_en"
                                                />
                                              </div>


                                                <div class="form-group">
                                                        <label>Add title 2</label>
                                                    <input
                                                      class="form-control spinner"
                                                      type="text"
                                                      placeholder="Add  title 2"
                                                        name="title2_en"
                                                      id="title2_en"
                                                    />
                                                  </div>
                                                    <div class="form-group">
                                                            <label>Add blue title</label>
                                                        <input
                                                          class="form-control spinner"
                                                          type="text"
                                                          placeholder="Add blue title"
                                                                    name="text_blue_en"
                                                          id="text_blue_en"
                                                        />
                                                      </div>

                                              <div class="form-group">
                                                    <label>Add description</label>
                                                <input
                                                  class="form-control spinner"
                                                  type="text"
                                                  placeholder="Add description"
                                                  name="description_en"
                                                  id="description_en"
                                                />
                                              </div>
                                       </div>
                          </div>
                <div class="form-group">
                  <label>تحميل صورة خلفية السلايدر</label>
                  <input
                    class="form-control spinner"
                    type="file"
                    placeholder="تحميل الصورة"
                    required
                    name="image"
                    id="image"
                  />
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn blue">اضافة</button>
                {{-- <a href="/admin/Slider" class="btn default">Cancel</a> --}}
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
                >عرض السلايدر
              </span>
            </div>
          </div>
          <div class="portlet-body">
            <div class="table-scrollable">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>عنوان السلايدر</th>
                    <th>صورة خلفية السلايدر</th>
                    <th>تعديل</th>
                    <th>حذف</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($sliders as $slider)
                  <tr>
                    <td>{{$slider->title_ar}}</td>

                    <td><img src="{{asset('/images/'.$slider->image)}}" alt="Los Angeles" style="width:100%;"></td>

                    <td>

                       <a href="/admin/slider/{{$slider->id}}/edit" class="btn btn-primary">تعديل</a>
                    </td>
                    <td>
                      <form style="display: inline" action="/admin/slider/{{$slider->id}}" method="post">
                      <button type="submit" class="btn btn-danger">
                          <i class="fa fa-trash-o"></i> حذف </button>
                        @method('delete') @csrf
                      </form>
                    </td>

                    @endforeach
                  </tr>
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
