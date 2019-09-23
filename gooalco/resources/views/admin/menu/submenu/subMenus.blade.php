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
          <span class="caption-subject bold uppercase">اضافة قائمة فرعية</span>
        </div>
      </div>
      <div class="portlet-body form">
        <form
          method="POST"
          action="/admin/submenus"
          accept-charset="UTF-8"
          class="form-horizontal"
          role="form"
        >
          @csrf

          <div class="form-body">

                <div class="form-group">
                        <label>القائمة</label>
                            <select
                            class="form-control"
                            required="required"
                            id="menu_id"
                            name="menu_id"
                            >
                            @foreach($menus as $menu)
                           <option value="{{$menu->id}}">{{$menu->name}}</option>
                        @endforeach
                        </select>
                      </div>
            <div class="form-group">
              <label>اسم القائمة الفرعية</label>
              <input
                class="form-control spinner"
                type="text"
                placeholder="كتابة القائمة الفرعية"
                name="name"
                id="name"
              />
            </div>
            <div class="form-group">
              <label>رابط القائمة الفرعية</label>
              <input
                class="form-control spinner"
                type="text"
                placeholder="ضع هنا رابط القائمة الفرعية http://"
                name="url"
                id="url"
              />
            </div>
            <div class="form-group">
              <label>ترتيب القائمة الفرعية</label>
              <input
                class="form-control spinner"
                type="number"
                placeholder="وضع ترتيب القائمة الفرعية بالارقام"
                name="number"
                id="number"
              />
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn blue">اضافة قائمة فرعية</button>
            <a href="/admin/menus" class="btn default">الرجوع الي القائمة</a>
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
            >كل القائمة الفرعية
          </span>
        </div>
      </div>
      <div class="portlet-body">
        <div class="table-scrollable">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ترتيب القائمة الفرعية</th>
                <th>اسم القائمة الفرعية</th>
                <th>رابط القائمة الفرعية</th>
                <th>القائمة</th>
                <th>تعديل</th>
                <th>حذف</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($submenu as $submenu)
              <tr>
                <td>{{$submenu->number}}</td>
                <td>{{$submenu->name}}</td>
                <td>{{$submenu->url}}</td>
                <td>{{$submenu->Menu->name}}</td>
                {{-- <td>{{$submenu->Menu->>name}}</td> --}}
                {{-- <td>{{$submenu->menu->name}}</td> --}}
               {{-- <td>@foreach ($submenu->$menu as $item)

              {{$item->menu_id}} @endforeach</td>  --}}



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
                    href="/admin/submenus/{{$submenu->id}}/edit"
                    class="btn btn-primary"
                    >تعديل</a
                  >
                </td>
                <td>
                  <form
                    style="display: inline"
                    action="/admin/submenus/{{$submenu->id}}"
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
