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
                        <span class="caption-subject font-green bold uppercase">All Pages </span>
                    </div>
                    <a href="/admin/pages/create" type="submit" class="btn btn-primary Add-post"> Add Pages </a>

                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-hover">
                            <thead>

                                <tr>
                                        <th> sort </th>
                                    <th>title </th>
                                    <th> url </th>
                                    <th> Edit </th>
                                    <th> Deleted </th>

                                </tr>

                            </thead>
                            <tbody>



                                <tr>
                                <td> </td>
                                <td></td>
                                <td> </td>

                                    <td>

                                            <a href="/admin/pages//edit" class="btn btn-primary">Edit</a>

                                           </td>
                                  <td>
                                  <form style="display: inline" action="/admin/pages/" method="post" >
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete </button>

                                    @method('delete')
                                    @csrf
                                        </form>
                                   </td>


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
@endsection
