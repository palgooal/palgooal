<?php

namespace App\Http\Controllers;

use App\modals\Post;
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
        return view('admin.news.news')->with('posts', Post::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.addnews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->image->store('post');
        $posts = new Post();
        $posts->Title =$request->Title;
        $posts->image =$path;
        $posts->Auther =$request->Auther;
        $posts->Body =$request->Body;
        $posts->save();

        return redirect('/admin/posts');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\modals\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modals\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('admin.news.editNew')->with('post', Post::find($id));
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
        $path = $request->image->store('post');
        $posts = Post::find($id);
        $posts->Title =$request->Title;
        $posts->image =$path;
        $posts->Auther =$request->Auther;
        $posts->Body =$request->Body;
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
