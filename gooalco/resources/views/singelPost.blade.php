@extends('layouts.apppages') @section('title') @if (App::isLocale('en')) {{$post->Title_en}} @else {{$post->Title_ar}} @endif @endsection @section('content')

<section class="page-title ptb50 overlay-black">
    <div class="container">
        @if (App::isLocale('en'))
        <h2 class="uppercase">{{$post->Title_en}}</h2>
        <div class="breadcrumbs pt10">
            <h5><a href="/">{{__('home.Home')}}</a> / <a href="/">{{__('home.Blog')}}</a> / {{$post->Title_en}}</h5>
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
            @if (App::isLocale('en')) @if (!$post->Title_en !=null)
            <p>No posts yet</p>
            @else
            <img src="{{asset('/images/'.$post->image)}}" class="img-responsive" alt="{{$post->Title_en}}">
            <br>
            <h2 class="uppercase">{{$post->Title_en}}</h2> {{--
            <ul class="post-detail list-inline pt10">
                <li><i class="fa fa-user"></i> {{$post->Auther_en}}</li>
                <li><i class="fa fa-clock-o"></i>{{$post->updated_at}}</li>
                <li><i class="fa fa-comments-o"></i> 12 Comments</li>
            </ul> --}} @endif
            <p>{!!$post->Body_en!!}</p>
            @else @if (!$post->Title_ar !=null)
            <p>لا توجد منشورات</p>
            @else
            <br>
            <img src="{{asset('/images/'.$post->image)}}" class="img-responsive" alt="{{$post->Title_ar}}">
            <br>
            <h2 class="uppercase">{{$post->Title_ar}}</h2>
            <br> {{--
            <ul class="post-detail list-inline pt10">
                <li><i class="fa fa-user"></i> {{$post->Auther_ar}}</li>
                <li><i class="fa fa-clock-o"></i>{{$post->updated_at}}</li>
                <li><i class="fa fa-comments-o"></i> 12 Comments</li>
            </ul> --}} @endif
            <br>
            <br>
            <p>{!!$post->Body_ar!!}</p>
            @endif
            <!-- Load Facebook SDK for JavaScript -->
            <div id="fb-root"></div>
           @if (App::isLocale('en'))
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0"></script>
           @else
           <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v3.0"></script>
           @endif
            <!-- Your like button code -->
            <div class="fb-like" data-href="post/{{$post->slug}}" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
  
           
            {{-- <div class="share mt30">
                <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//themeforest.net/item/cloudify-one-page-web-hosting-html-template/18398632" target="_blank" class="share-icon fb"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/home?status=https%3A//themeforest.net/item/cloudify-one-page-web-hosting-html-template/18398632" target="_blank" class="share-icon tw"><i class="fa fa-twitter"></i></a>
                <a href="https://plus.google.com/share?url=https%3A//themeforest.net/item/cloudify-one-page-web-hosting-html-template/18398632" target="_blank" class="share-icon gp"><i class="fa fa-google-plus"></i></a>
                <span>{{__('home.share')}} <i class="fa fa-share-alt"></i></span>
            </div> --}}
        </div>

    </div>
</section>
@endsection