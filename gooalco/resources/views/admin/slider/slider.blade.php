@extends('layouts.adminLayout')
@section('adminContent')

<div class="col-md-12">

        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption">
              <i class="icon-social-dribbble font-green"></i>
              <span class="caption-subject font-green bold uppercase"
                >All slider
              </span>
            </div>
          </div>
          <div class="portlet-body">
            <div class="table-scrollable">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>title sliders</th>
                    {{-- <th>description</th> --}}
                    <th>images</th>

                    <th>Edit</th>
                    <th>Deleted</th>
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
                        href="/admin/Slider/{{$slider->id}}/edit"
                        class="btn btn-primary"
                        >Edit</a
                      >
                    </td>
                    <td>
                      <form
                        style="display: inline"
                        action="/admin/Slider/{{$slider->id}}"
                        method="post"
                      >
                        <button type="submit" class="btn btn-danger">
                          <i class="fa fa-trash-o"></i> Delete
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
@endsection
