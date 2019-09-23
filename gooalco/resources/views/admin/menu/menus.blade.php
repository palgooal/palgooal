@extends('layouts.adminLayout')
@section('content')


<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="min-height:1318px">
        <!-- BEGIN PAGE HEADER-->
        <div class="row">
  <div class="col-md-4">
    <div class="portlet light bordered">
      <div class="portlet-title">
        <div class="caption font-red-sunglo">
          <i class="icon-settings font-red-sunglo"></i>
          <span class="caption-subject bold uppercase">اضافة قائمة</span>
        </div>
      </div>
      <div class="portlet-body form">
        <form
          method="POST"
          action="/admin/menus"
          accept-charset="UTF-8"
          class="form-horizontal"
          role="form"
        >
          @csrf
          <div class="form-body">
            <div class="form-group">
              <label>اسم القائمة بالعربية</label>
              <input
                class="form-control spinner"
                type="text"
                placeholder="اكتب عنوان القائمة بالعربية"
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
                  name="name_en"
                  id="name_en"
                />
              </div>

            <div class="form-group">
              <label>رابط القائمة</label>
              <input
                class="form-control spinner"
                type="text"
                placeholder="كتابة رابط القائمة يبدأ http://"
                name="url"
                id="url"
              />
            </div>
            <div class="form-group">
              <label>ترتيب القائمة</label>
              <input
                class="form-control spinner"
                type="number"
                placeholder="ترتيب القائمة"
                name="number"
                id="number"
              />
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn blue">اضافة</button>
            <a href="/admin/submenus" class="btn default">اضافة القائمة فرعية</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-8">
    <!-- BEGIN SAMPLE TABLE PORTLET-->
    <div class="portlet light bordered">
      <div class="portlet-title">
        <div class="caption">
          <i class="icon-social-dribbble font-green"></i>
          <span class="caption-subject font-green bold uppercase"
            >كل القوائم
          </span>
        </div>
      </div>
      <div class="portlet-body">
        <div class="table-scrollable">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ترتيب القائمة</th>
                <th>اسم القائمة</th>
                <th>اسم اسم القائمة بالانجليزية</th>
                <th>رابط القائمة</th>
                <th>تعديل</th>
                <th>حذف</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($menus as $item)
              <tr>
                <td>{{$item->number}}</td>
                <td>{{$item->name_ar}}</td>
                <td>{{$item->name_en}}</td>
                <td>{{$item->url}}</td>

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
                    href="/admin/menus/{{$item->id}}/edit"
                    class="btn btn-primary"
                    >تعديل</a
                  >
                </td>
                <td>
                  <form
                    style="display: inline"
                    action="/admin/menus/{{$item->id}}"
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
