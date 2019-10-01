<?php

namespace App\Http\Controllers;

use App\modals\Post;
use Str;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view ('admin.posts.news')->with("posts", Post::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.posts.addnews");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug ($request->Title_en ==null) ? Str::slug($request->Title_ar) : Str::slug($request->Title_en);
        $posts = new Post();
        if($request->image !=null)
        {
            $path= $request->image->store('post');
            $posts->image =$path;
        }

        $posts->Title_ar =$request->Title_ar;
        $posts->image = $path;
        $posts->Auther_ar =$request->Auther_ar;
        $posts->Body_ar =$request->Body_ar;
        $posts->Title_en =$request->Title_en;
        $posts->Auther_en =$request->Auther_en;
        $posts->Body_en =$request->Body_en;
        $posts->optradio =$request->optradio;
        $posts->slug = $slug;


        $posts->save();

        return redirect('/admin/posts');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\modals\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('singelPost')->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modals\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view ("admin.posts.editNew")->with("post", $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\modals\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $posts = Post::find($id);
        if($request->image !=null)
        {
            $path= $request->image->store('post');
            $posts->image =$path;
        }
        $posts->Title_ar =$request->Title_ar;
        $posts->Auther_ar =$request->Auther_ar;
        $posts->Body_ar =$request->Body_ar;
        $posts->Title_en =$request->Title_en;
        $posts->Auther_en =$request->Auther_en;
        $posts->Body_en =$request->Body_en;

        $posts->save();
        return redirect('/admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\modals\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('/admin/posts');
    }
}
