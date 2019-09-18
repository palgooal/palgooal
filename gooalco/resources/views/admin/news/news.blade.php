@extends('layouts.adminLayout')
@section('adminContent')

    <div class="container" style="margin-top:100px">
        <hr />
        <h1 style="display: inline-block;">News</h1>
        {{-- <button type="button" class="btn btn-success float-right">

        </button> --}}

        <a href="/admin/posts/create" class="btn btn-success float-right" >Add news</a>
        <hr />
        <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    
                    <th scope="col">Title</th>
                    <th scope="col">Auther</th>
                    <th scope="col">Date</th>
                    <th scope="col" style="width: 350px;">Body</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>


    @foreach ($posts as $post)


                <tr>
                    <td>{{$post->Title}}</td>
                    <td>{{$post->Auther}}</td>
                    <td>{{$post->Date}}</td>
                    <td>{{$post->Body}}</td>
                    
                    <td><img src="{{asset('/images/'.$post->image)}}" alt=""></td>
                    <td>
                    <a href="/admin/posts/{{$post->id}}/edit" class="btn btn-outline-primary">Edit</a> |
                    <form style="display :inline"  action="/admin/posts/{{$post->id}}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-xs btn-danger" name="delete" value="Delete">Delete</button>

                        </form>
                        @endforeach
                    </td>
                </tr>

            </tbody>
        </table>
        </div>



    </div>
@endsection
