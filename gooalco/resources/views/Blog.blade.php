@extends('layouts.app')
@section('content')

<section class="page-title ptb50 overlay-black">
    <div class="container">
    <h2 class="uppercase">Blog listing</h2>
    <div class="breadcrumbs pt10">
    <h5><a href="/">{{__('home.Home')}}</a> / {{__('home.Blog')}}</h5>
    </div>
    </div>
    </section>
    <section class="blog-listing ptb80">
            <div class="container nopadding">
            <div class="row nomargin blog-grid">
            @foreach ($posts as $post)
            <div class="element col-md-4 col-xs-12">
            <article class="blog-single pb30 shadow">
            
            <div class="blog-post-thumbnail normal-post">
            <a href="/post/{{$post->slug}}" class="hover-link"><img src="{{asset('/images/'.$post->image)}}" alt=""></a>
            </div>
            <div class="blog-post-title pt30 pb10">
            @if (App::isLocale('en'))
           
            
            <h3><a href="/post/{{$post->slug}}">{{$post->Title_en}}</a></h3>
            <p class="nomargin pt5">By <a class="blog-author" href="#">{{$post->Auther_en}}</a> <span class="blog-date">{{$post->updated_at}}</span></p>
            <div class="blog-post-details pt20">
                    <p class="nomargin pb20">{!!Str::limit($post->Body_en, 200)!!}</p>
                    <a class="blog-more-btn" href="blog-post.html">{{__('home.Read More')}}<i class="fa fa-long-arrow-right"></i></a>
                    </div>
            @else
            <h3><a href="/post/{{$post->slug}}">{{$post->Title_ar}}</a></h3>
            <p class="nomargin pt5">By <a class="blog-author" href="#">{{$post->Auther_ar}}</a> <span class="blog-date">{{$post->updated_at}}</span></p>
            <div class="blog-post-details pt20">
                    <p class="nomargin pb20">{!!Str::limit($post->Body_ar, 200)!!}</p>
                    <a class="blog-more-btn" href="blog-post.html">{{__('home.Read More')}}<i class="fa fa-long-arrow-right"></i></a>
                    </div>
            @endif
            </div>
            </article>

            </div>
            @endforeach
            
            </div>
            
            
            <div class="row">
            <div class="col-md-12 text-center">
            <a href="#" class="btn btn-border btn-blue btn-dark">show more</a>
            </div>
            </div>
            
            </div>
            </section>
                
        <section class="buy-now ptb80">
            <div class="container">
            <div class="col-md-12 text-center">
            <h2 class="text-white">Do you like <span class="text-blue">Cloudify</span>?</h2>
            <h2 class="text-white pb20">Buy it now and become a Top Hosting Company!</h2>
            <a href="https://themeforest.net/item/cloudify-one-page-web-hosting-html-template/18398632?ref=gnodesign" target="_blank" class="btn btn-border btn-blue text-white nomargin">purchase now</a>
            </div>
            </div>
            </section>


@endsection