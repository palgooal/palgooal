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
              <span class="caption-subject bold uppercase">اضافة عرض </span>
            </div>
          </div>
          <div class="portlet-body form">
            <form
              method="POST"
              action="/admin/price"
              enctype="multipart/form-data"
              accept-charset="UTF-8"
              class="form-horizontal"
              role="form"
            >
              @csrf
              <div class="form-body">

                    <div class="form-group">
                            <label>اسم فئة العرض</label>
                            <input
                              class="form-control spinner"
                              type="text"
                              placeholder="اكتب اسم فئة العرض"
                              name="name"
                              id="name"
                            />
                          </div>
                                  <div class="form-group">
                                        <label>السعر</label>
                                        <input
                                          class="form-control spinner"
                                          type="number"
                                          placeholder="اكتب السعر "
                                          name="price"
                                          id="price"
                                        />
                                      </div>
                                      <div class="form-group">
                                            <label>مساحة القرص</label>
                                            <input
                                              class="form-control spinner"
                                              type="number"
                                              placeholder="اكتب المساحة"
                                              name="storge"
                                              id="storge"
                                            />
                                          </div>
                                          <div class="form-group">
                                                <label>معدل نقل البيانات</label>
                                                <input
                                                  class="form-control spinner"
                                                  type="number"
                                                  placeholder="اكتب معدل نقل البيانات"
                                                  name="data_transfare"
                                                  id="data_transfare"
                                                />
                                              </div>
                                              <div class="form-group">
                                                    <label>عدد قواعد البيانات</label>
                                                    <input
                                                      class="form-control spinner"
                                                      type="text"
                                                      placeholder="اكتب عدد قواعد البيانات"
                                                      name="num_database"
                                                      id="num_database"
                                                    />
                                                  </div>
                                          <div class="form-group">
                                                <label>عدد حسابات البريد الالكتروني</label>
                                                <input
                                                  class="form-control spinner"
                                                  type="text"
                                                  placeholder="اكتب عدد حسابات البريد الالكتروني"
                                                  name="num_email"
                                                  id="num_email"
                                                />
                                              </div>


                                                      <div class="form-group">
                                                            <label>عدد الموقع</label>
                                                            <input
                                                              class="form-control spinner"
                                                              type="text"
                                                              placeholder="اكتب عدد المواقع "
                                                              name="num_website"
                                                              id="num_website"
                                                            />
                                                          </div>
                                                          <div class="form-group">
                                                                <label>النسخ الاحتياطي </label>
                                                                <input
                                                                  class="form-control spinner"
                                                                  type="text"
                                                                  placeholder="النسخ الاحتياطي"
                                                                  name="backup"
                                                                  id="backup"
                                                                />
                                                              </div>
                                                              <div class="form-group">
                                                                    <label>وصف  عن العرض</label>
                                                                    <input
                                                                      class="form-control spinner"
                                                                      type="text"
                                                                      placeholder="اكتب هنا وصف عام "
                                                                      name="description"
                                                                      id="description"
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
      <div class="col-md-8">
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

                        <td> الاسم</td>
                        <td>السعر</td>
                        <td>مساحة القرص</td>
                        <td>النسخ الاحتياطي</td>
                        <td>تعديل</td>
                        <td>حذف</td>


                  </tr>
                </thead>
                <tbody>
                    @foreach ($prices as $price)


                  <tr>
                    <td>{{$price->name}}</td>
                  <td>{{$price->price}}</td>
                  <td>{{$price->storge}}</td>

                  <td>{{$price->backup}}</td>




                    <td>
                      <a
                        href="/admin/price/{{$price->id}}/edit"
                        class="btn btn-primary"
                        >تعديل</a
                      >
                    </td>
                    <td>
                      <form
                        style="display: inline"
                    action="/admin/price/{{$price->id}}"
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
