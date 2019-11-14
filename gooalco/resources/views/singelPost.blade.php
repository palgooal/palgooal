@extends('layouts.apppages')
@section('title')
@if (App::isLocale('en'))
{{$post->Title_en}}
@else
{{$post->Title_ar}}
@endif

@endsection
@section('content')

<section class="page-title ptb50 overlay-black">
    <div class="container">
        @if (App::isLocale('en'))
        <h2 class="uppercase">{{$post->Title_en}}</h2>
        <div class="breadcrumbs pt10">
        <h5><a href="/">{{__('home.Home')}}</a> / <a href="/g">{{__('home.Blog')}}</a> / {{$post->Title_en}}</h5>
    </div>
    </div>
</section>
        @else
        <h2 class="uppercase">{{$post->Title_ar}}</h2>
        <div class="breadcrumbs pt10">
                <h5><a href="/">{{__('home.Home')}}</a> / {{__('home.Blog')}} / {{$post->Title_ar}}</h5>
            </div>
        </div>
        </section>
        @endif

    <section class="blog-post pt80 pb60">
    <div class="container">
    <div class="col-md-12 post-title">
        @if (App::isLocale('en'))
        <h2 class="uppercase">{{$post->Title_en}}</h2>
        <ul class="post-detail list-inline pt10">
                <li><i class="fa fa-user"></i> {{$post->Auther_en}}</li>
                <li><i class="fa fa-clock-o"></i>{{$post->updated_at}}</li>
                {{-- <li><i class="fa fa-comments-o"></i> 12 Comments</li> --}}
                </ul>
        @else
        <h2 class="uppercase">{{$post->Title_ar}}</h2>
        <ul class="post-detail list-inline pt10">
                <li><i class="fa fa-user"></i> {{$post->Auther_ar}}</li>
                <li><i class="fa fa-clock-o"></i>{{$post->updated_at}}</li>
                {{-- <li><i class="fa fa-comments-o"></i> 12 Comments</li> --}}
                </ul>

        @endif
        <br>
    </div>

    <img src="{{asset('/images/'.$post->image)}}" class="img-responsive" alt="" >

    <br>
    @if (App::isLocale('en'))
    <p>{!!$post->Body_en!!}</p>
    @else
    <p>{!!$post->Body_ar!!}</p>
    @endif
    


    <div class="share mt30">
    <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//themeforest.net/item/cloudify-one-page-web-hosting-html-template/18398632" target="_blank" class="share-icon fb"><i class="fa fa-facebook"></i></a>
    <a href="https://twitter.com/home?status=https%3A//themeforest.net/item/cloudify-one-page-web-hosting-html-template/18398632" target="_blank" class="share-icon tw"><i class="fa fa-twitter"></i></a>
    <a href="https://plus.google.com/share?url=https%3A//themeforest.net/item/cloudify-one-page-web-hosting-html-template/18398632" target="_blank" class="share-icon gp"><i class="fa fa-google-plus"></i></a>
    <span class="uppercase">{{__('home.share')}} <i class="fa fa-share-alt"></i></span>
    </div>
    </div>

    </div>
    </section>


    {{-- <section class="blog-comments pb80">
    <div class="container main-content">
    <div class="col-md-12">
    <h3 class="uppercase pb40">4 comments</h3>
    </div>
    <div class="col-md-12">

    <ul class="comments-list">

    <li class="comment">

    <a class="pull-left commenter" href="#">
    <img src="images/team/team1.jpg" alt="" class="img-responsive">
    </a>
    <div class="media-body comment-body">

    <div class="comment-content-wrapper">
    <div class="media-heading clearfix">

    <h4 class="capitalize">john doe</h4>
    <div class="comment-reply pull-right">
    <a href="#" class="btn">reply</a>
    </div>

    <div class="comment-info">
    <time>Dec 11, 2016 at 7:49 am</time>
    </div>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>

    <ul class="comment-replies">

    <li class="comment comment-replied">

    <a class="pull-left commenter" href="#">
    <img src="images/team/team2.jpg" alt="" class="img-responsive">
    </a>
    <div class="media-body comment-body">

    <div class="comment-content-wrapper">
    <div class="media-heading clearfix">

    <h4 class="capitalize">john doe</h4>

    <div class="comment-info">
    <time>Dec 11, 2016 at 7:51 am</time>
    </div>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
    </div>

    </div>
    </li>


    <li class="comment comment-replied">

    <a class="pull-left commenter" href="#">
    <img src="images/team/team1.jpg" alt="" class="img-responsive">
    </a>
    <div class="media-body comment-body">

    <div class="comment-content-wrapper">
    <div class="media-heading clearfix">

    <h4 class="capitalize">john doe</h4>

    <div class="comment-info">
    <time>Dec 11, 2016 at 7:52 am</time>
    </div>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
    </div>

    </div>
    </li>

    </ul>

    </div>

    </div>
    </li>


     <li class="comment">

    <a class="pull-left commenter" href="#">
    <img src="images/team/team2.jpg" alt="" class="img-responsive">
    </a>
    <div class="media-body comment-body">

    <div class="comment-content-wrapper">
    <div class="media-heading clearfix">

    <h4 class="capitalize">john doe</h4>
    <div class="comment-reply pull-right">
    <a href="#" class="btn">reply</a>
    </div>

    <div class="comment-info">
    <time>Dec 12, 2016 at 8:51 am</time>
    </div>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
    </div>

    </div>
    </li>


    <li class="comment">

    <a class="pull-left commenter" href="#">
    <img src="images/team/team3.jpg" alt="" class="img-responsive">
    </a>
    <div class="media-body comment-body">

    <div class="comment-content-wrapper">
    <div class="media-heading clearfix">

    <h4 class="capitalize">john doe</h4>
    <div class="comment-reply pull-right">
    <a href="#" class="btn">reply</a>
    </div>

    <div class="comment-info">
    <time>Dec 13, 2016 at 8:55 am</time>
    </div>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
    </div>

    </div>
    </li>

    </ul>


    <div class="row mt40">
    <div class="col-md-12 pb20">
    <h3 class="uppercase">Leave a comment</h3>
    </div>
    <form id="comment-form">
    <div class="col-md-5">
    <input class="form-control input-box mb15" type="text" name="name" placeholder="Your Name">
    </div>
    <div class="col-md-5">
    <input class="form-control input-box mb15" type="email" name="email" placeholder="youremail@cloudify.com">
    </div>
    <div class="col-md-10">
    <textarea class="form-control textarea-box mb15" rows="8" name="message" placeholder="Type your message..."></textarea>
    </div>
    <div class="col-md-5 comment-require">
    <p>All fields are required.</p>
    </div>
    <div class="col-md-5 comment-require">
    <button class="btn btn-border btn-blue btn-dark pull-right" type="submit">Send your message</button>
    </div>
    </form>
    </div>

    </div>
    </div>
    </section>
     --}}


    @endsection
