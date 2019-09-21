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
                            <span class="caption-subject font-green bold uppercase">كل القوائم</span>
                        </div>
                        <a href="/admin/menus/create" class="btn btn-primary Add-menu">اضافة قائمة</a>

                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th> اسم القائمة </th>
                                        <th>الرابط</th>
                                        <th>الرقم</th>
                                        <th>تعديل</th>
                                        <th>حذف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menus as $menu)
                                    <tr>
                                    <td> {{$menu->name}}</td>
                                        <td>{{$menu->url}}</td>
                                        <td>{{$menu->number}}</td>



                                        <td>
                                            <a href="/admin/menus/{{$menu->id}}/edit" class="btn btn-primary">تعديل</a>
                                        </td>
                                        <td>
                                            <form style="display: inline" action="/admin/menus/{{$menu->id}}" method="post">
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
