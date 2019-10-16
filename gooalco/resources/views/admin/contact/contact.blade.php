@extends('layouts.adminLayout')
@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="min-height:1318px">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-social-dribbble font-green"></i>
                            <span class="caption-subject font-green bold uppercase">جميع الرسائل</span>
                        </div>


                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                            <th> id </th>
                                        <th> الاسم </th>
                                        <th>البريد الإلكتروني</th>
                                        <th>الموضوع</th>
                                        <th>مشاهدة الرسالة</th>
                                        <th>الرد الرسالة</th>
                                        <th>حذف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                         <td> {{$contact->id}}</td>
                                        <td> {{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->subject}}</td>
                                        <td>
                                            <a href="/admin/contact/{{$contact->subject}}" class="btn btn-primary">شاهد الرسالة</a>
                                        </td>
                                        <td>
                                            <a href="/admin/sendmail/{{$contact->id}}" class="btn btn-primary">الرد على الرسالة</a>
                                        </td>



                                                <td>
                                                    <form style="display: inline" action="/contact/{{$contact->id}}" method="post">
                                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> حذف </button>

                                                        @method('delete')
                                                        @csrf
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
    @endsection
