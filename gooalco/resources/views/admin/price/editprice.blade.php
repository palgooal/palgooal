@extends('layouts.adminLayout')
@section('content')

<div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" style="min-height:1318px">
            <!-- BEGIN PAGE HEADER-->
            <div class="row">
      <div class="col-md-8">
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
          action="/admin/price/{{$price->id}}"
              enctype="multipart/form-data"
              accept-charset="UTF-8"
              class="form-horizontal"
              role="form"
            >
              @csrf
              @method('put')
              <div class="form-body">
                    <div class="form-group">
                            <label>اسم فئة العرض</label>
                            <input
                              class="form-control spinner"
                              type="text"
                              placeholder="اكتب اسم فئة العرض"
                              name="name"
                              value="{{$price->name}}"
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
                                          value="{{$price->price}}"
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
                                              value="{{$price->storge}}"
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
                                                  value="{{$price->data_transfare}}"
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
                                                      value="{{$price->num_database}}"
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
                                                  value="{{$price->num_email}}"
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
                                                              value="{{$price->num_website}}"
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
                                                                  value="{{$price->backup}}"
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
                                                                      value="{{$price->description}}"
                                                                      id="description"
                                                                    />
                                                                  </div>







                <div class="form-actions">
                    <button type="submit" class="btn blue">تعديل</button>
                  </div>

              </div>

            </form>
          </div>
        </div>
      </div>
            </div>
        </div>
        @endsection

