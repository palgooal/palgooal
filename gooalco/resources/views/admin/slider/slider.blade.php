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
                <div class="form-group">
                  <label>عنوان السلايدر</label>
                  <input
                    class="form-control spinner"
                    type="text"
                    placeholder="اكتب هنا عنوان السلايدر"
                    name="title"
                    id="title"
                  />
                </div>
                
                    <div class="form-group">
                      <label>عنوان 2 السلايدر</label>
                      <input
                        class="form-control spinner"
                        type="text"
                        placeholder="اكتب هنا عنوان 2 السلايدر"
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
                            name="text_blue"
                            id="text_blue"
                          />
                        </div>
                <div class="form-group">
                  <label>وصف عام للسلايدر</label>
                  <input
                    class="form-control spinner"
                    type="text"
                    placeholder="اكتب هنا وصف عام للسلايدر"
                    name="description"
                    id="description"
                  />
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
                    {{-- <th>description</th> --}}
                    <th>صورة خلفية السلايدر</th>
                    <th>تعديل</th>
                    <th>حذف</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($sliders as $slider)
                  <tr>
                    <td>{{$slider->title}}</td>
                    {{-- <td>{{$slider->description}}</td> --}}
                    <td><img src="{{asset('/images/'.$slider->image)}}"}} alt="Los Angeles" style="width:100%;"></td>

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
                        href="/admin/slider/{{$slider->id}}/edit"
                        class="btn btn-primary"
                        >تعديل</a
                      >
                    </td>
                    <td>
                      <form
                        style="display: inline"
                        action="/admin/slider/{{$slider->id}}"
                        method="post"
                      >
                        <button type="submit" class="btn btn-danger">
                          <i class="fa fa-trash-o"></i> حذف
                        </button>

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
