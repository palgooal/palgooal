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
                    <span class="caption-subject font-green bold uppercase">جميع الصفحات </span>
                </div>
                <a href="/admin/pages/create" type="submit" class="btn btn-primary Add-post"> اضافة صفحة </a>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">
                    <table class="table table-hover">
                        <thead>

                            <tr>
                                <th> تصنيف </th>
                                <th>العنوان</th>
                                <th>slug</th>
                                <th>الرابط</th>
                                <th>شاهد الصفحة</th>
                                <th> تعديل</th>
                                <th> حذف </th>
                            </tr>

                        </thead>
                        <tbody>
                               @foreach ($pages as $item)
                            <tr>
                            <td> {{$item->id}}</td>
                            <td> {{$item->title_ar}}</td>
                            <td>{{$item->slug}}</td>
                            <td>/pages/{{$item->slug}} </td>

                                <td>
                                        <a href="/pages/{{$item->slug}}" class="btn btn-primary">مشاهدة</a>
                                </td>
                                <td>
                                    <a href="/admin/pages/{{$item->id}}/edit" class="btn btn-primary">تعديل</a>
                            </td>

                              <td>
                              <form style="display: inline" action="/admin/pages/{{$item->id}}" method="post" >
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
