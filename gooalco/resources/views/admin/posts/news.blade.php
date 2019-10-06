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
                            <span class="caption-subject font-green bold uppercase">كل المدونات</span>
                        </div>
                        <a href="/admin/posts/create" class="btn btn-primary Add-post">اضافة مدونة</a>

                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th> عنوان </th>
                                        <th>slug</th>
                                        <th>الكاتب</th>
                                        <th>مشاهدة المقالة</th>
                                        <th>تعديل</th>
                                        <th>حذف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                        <td> {{$post->Title_ar}}</td>
                                        <td>{{$post->slug}}</td>
                                        <td>{{$post->Auther_ar}}</td>
                                        <td>
                                            <a href="/post/{{$post->slug}}" class="btn btn-primary">شاهد المقالة</a>
                                        </td>
                                        <td>
                                            <a href="/admin/posts/{{$post->id}}/edit" class="btn btn-primary">تعديل</a>
                                        </td>
                                        <td>
                                            <form style="display: inline" action="/admin/posts/{{$post->id}}" method="post">
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
