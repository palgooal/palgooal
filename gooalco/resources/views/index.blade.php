@extends('layouts.app')
@section('content')


{{-- <div class="loader">
    <div class="spinner">
    <div class="cloud1"><img src="./images/clouds/cloud-blue.svg" alt=""></div>
    <div class="cloud2"><img src="./images/clouds/cloud-green.svg" alt=""></div>
    </div>
    </div> --}}

@include('partials.slider')


<section class="domain ptb30">
<div class="container">
<div class="col-md-3">
<h2 class="capitalize"></h2>{{__('home.Search Your')}} <span class="text-blue">{{__('home.domain')}}</span> {{__('home.Now!')}}</h2>
<form action="https://clientgooal.palgooal.com/cart.php?a=add&domain=register" method="post">
Find your Domain: <input type="text" name="query" size="20" />
<input type="submit" value="Go" />
</form>
</div>
<div class="col-md-9">
<div class="row">

<div class="form-group">
<input type="search" class="form-control" placeholder="{{__('home.Enter your domain name here')}}">
<button type="submit" class="btn btn-border btn-blue">{{__('home.Search')}}</button>
</div>

</div>
<div class="row">

<div class="domain-check">
<ul>
<li class="com">
<input type="checkbox" id="com" name="com" value="com"> .comm ($8.99)
<label for="com"></label>
</li>
<li class="net">
<input type="checkbox" id="net" name="net" value="net"> .net ($4.99)
<label for="net"></label>
</li>
<li class="org">
<input type="checkbox" id="org" name="org" value="org"> .org ($11.99)
<label for="org"></label>
</li>
<li class="in">
<input type="checkbox" id="in" name="in" value="in"> .in ($8.99)
<label for="in"></label>
</li>
</ul>
</div>

</div>
</div>
</div>
</section>


<section class="pt80" id="about">
<div class="container">
<div class="col-md-6">
<h2 class="ptb20">{{__('home.Welcome to Palgooal')}}</h2>
<h4>{{__('home.Palgooal guarantees a return of funds within 30 days')}}</h4>
<br>
<p>{{__('home.It is an Arabic site for shops and websites for life. All company websites are easy to use and efficient')}}</p>
{{-- <a href="#" class="btn btn-border btn-blue">{{__('home.Lear More')}}</a> --}}
</div>

<div class="col-md-6 about-image">
<img src="./images/img/about.svg" alt="">
</div>

<div class="clouds">
<img src="./images/clouds/cloud1.svg" alt="" class="cloud1">
<img src="./images/clouds/cloud2.svg" alt="" class="cloud2">
<img src="./images/clouds/cloud3.svg" alt="" class="cloud3">
<img src="./images/clouds/cloud1.svg" alt="" class="cloud4">
<img src="./images/clouds/cloud3.svg" alt="" class="cloud5">
</div>
</div>
</section>


<section id="services">
<div class="container ptb80">
<div class="section-title">
<h2>{{__('home.Why choose Palgooal')}}</h2>
<p>{{__('home.Every type of company services we offer is optimized with unique performance improvements!')}}</p>
</div>

<div class="row nomargin">
<div class="col-sm-4 col-xs-12 service text-center pt40">
<img src="./images/icons/cloud-server.svg" alt="">
<h3 class="ptb20">{{__('home.SSD Cloud Hosting')}}</h3>
<p>{{__('home.Experience up to 2X faster load times due to low-density servers, premium hardware, and multiple caching layers')}}</p>
</div>
<div class="col-sm-4 col-xs-12 service text-center pt40">
<img src="./images/icons/locked.svg" alt="">
<h3 class="ptb20">{{__('home.Safe and fortified')}}</h3>
<p>{{__('home.The security of your website is our top priority.')}} </p>
</div>
<div class="col-sm-4 col-xs-12 service text-center pt40">
<img src="./images/icons/transfer.svg" alt="">
<h3 class="ptb20">{{__('home.Transfer your site for free')}}</h3>
<p>{{__('home.Our dedicated Team is standing by to transfer your existing content from your prior host to our platform.')}}</p>
</div>
</div>


<div class="row nomargin pt40">
<div class="col-sm-4 col-xs-12 service text-center pt40">
<img src="./images/icons/chat1.svg" alt="">
<h3 class="ptb20">{{__('home.Live Chat Support')}}</h3>
<p>{{__('home.Our support team will be at your service 24/7 helping and guiding you via live chat.')}} </p>
</div>
<div class="col-sm-4 col-xs-12 service text-center pt40">
<img src="./images/icons/customer-service.svg" alt="">
<h3 class="ptb20">{{__('home.Technical Support')}}</h3>
<p>{{__('home.Our support staff is available 24/7 to assist you.')}}</p>
</div>
<div class="col-sm-4 col-xs-12 service text-center pt40">
<img src="./images/icons/optimization.svg" alt="">
<h3 class="ptb20">{{__('home.Flexible and high quality')}}</h3>
<p>{{__('home.Get a flexible and responsive site that is responsive to all screens')}}</p>
</div>
</div>

</div>

</section>
<section class="servic-gooel">
<div class="feat bg-gray pt-5 pb-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="section-head col-sm-12">
        <br />
          <h4><span></span> {{__('home.Our main service')}} </h4>
          <br />
          <p>
         {{__('home.We provide services suitable for all and represent a fertile environment for the growth of ideas and projects on the Internet, and our services carry a lot of values ​​that generate a  sense of happiness and satisfaction among our customers over the (11) eleven years we have witnessed')}}
          </p>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
            <h6>{{__('home.Shared Hosting')}}</h6>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-anchor"></i></span>
            <h6>{{__('home.Distributor service(Reseller)')}}</h6>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-wordpress"></i></span>
            <h6>{{__('home.Hosting Wordpress')}}</h6>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_four"><i class="fa fa-database"></i></span>
            <h6>{{__('home.Domain reservation')}}</h6>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_five"><i class="fa fa-comments"></i></span>
            <h6>{{__('home.Sms Hosting')}}</h6>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_six"><i class="fa fa-camera"></i></span>
            <h6>{{__('home.progroming and disagining')}}</h6>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>
<section class="portfolio pt80 pb40">
        <div class="container nopadding">
        <div class="row">
        
        <ul class="list-inline text-center uppercase" id="portfolio-sorting">
        <li><a href="#0" data-filter="*" class="current">{{__('home.ALL')}}</a></li>
        @foreach ($categorys as $category)
    
        <li><a href="#0" data-filter=".{{$category->id}}">{{$category->name}}</a></li>
        {{-- <li><a href="#0" data-filter=".portfolio-cat2">shared hosting</a></li>
        <li><a href="#0" data-filter=".portfolio-cat3">domains</a></li>
        <li><a href="#0" data-filter=".portfolio-cat4">hosted websites</a></li> --}}
        @endforeach
        </ul>
        
        </div>
        
        <div class="row portfolio-grid mt40">
        @foreach ($works as $work)
        
        <div class="element col-md-3 col-sm-6 col-xs-6 {{$work->category_work_id}}">
        <figure>
        <a href="{{asset('images/'.$work->image)}}" class="hover-zoom">
        <img src="{{asset('images/'.$work->image)}}" class="img-responsive" alt="">
        </a>
        </figure>
        </div>
        @endforeach
        
        {{-- <div class="element col-md-3 col-sm-6 col-xs-6 portfolio-cat2">
        <figure>
        <a href="images/portfolio/image2.jpg" class="hover-zoom">
        <img src="images/portfolio/image2.jpg" class="img-responsive" alt="">
        </a>
        </figure>
        </div>
        
        <div class="element col-md-3 col-sm-6 col-xs-6 portfolio-cat3">
        <figure>
        <a href="images/portfolio/image3.jpg" class="hover-zoom">
        <img src="images/portfolio/image3.jpg" class="img-responsive" alt="">
        </a>
        </figure>
        </div>
        
        <div class="element col-md-3 col-sm-6 col-xs-6 portfolio-cat4">
        <figure>
        <a href="images/portfolio/image4.jpg" class="hover-zoom">
        <img src="images/portfolio/image4.jpg" class="img-responsive" alt="">
        </a>
        </figure>
        </div>
         --}}
        {{-- <div class="element col-md-3 col-sm-6 col-xs-6 portfolio-cat1">
        <figure>
        <a href="images/portfolio/image5.jpg" class="hover-zoom">
        <img src="images/portfolio/image5.jpg" class="img-responsive" alt="">
        </a>
        </figure>
        </div> --}}
        
        {{-- <div class="element col-md-3 col-sm-6 col-xs-6 portfolio-cat2">
        <figure>
        <a href="images/portfolio/image6.jpg" class="hover-zoom">
        <img src="images/portfolio/image6.jpg" class="img-responsive" alt="">
        </a>
         </figure>
        </div> --}}
        
        {{-- <div class="element col-md-3 col-sm-6 col-xs-6 portfolio-cat3">
        <figure>
        <a href="images/portfolio/image7.jpg" class="hover-zoom">
        <img src="images/portfolio/image7.jpg" class="img-responsive" alt="">
        </a>
        </figure>
        </div> --}}
        
        {{-- <div class="element col-md-3 col-sm-6 col-xs-6 portfolio-cat4">
        <figure>
        <a href="images/portfolio/image8.jpg" class="hover-zoom">
        <img src="images/portfolio/image8.jpg" class="img-responsive" alt="">
        </a>
        </figure>
        </div> --}}
        </div>
        
        </div>
        </section>
{{-- <section class="portfolio pt80 pb40">
    <div class="container nopadding">
    <div class="row">
        <div class="section-title">
            <h2>{{__('home.Of our business')}}</h2>
            </div>
    <ul class="list-inline text-center uppercase" id="portfolio-sorting">
    <li><a href="#0" data-filter="*" class="current">{{__('home.ALL')}}</a></li>
    
        
    
    <li><a href="#0" data-filter=".portfolio-cat1"></a></li>
   
   

    </ul>
    </div>

    <div class="row portfolio-grid mt40">
        @foreach ($works as $work)


    <div class="element col-md-3 col-sm-6 col-xs-6 portfolio-cat1">
    <figure>
    <a href="{{asset('/images/'.$work->image)}}" class="hover-zoom">
    <img src="{{asset('/images/'.$work->image)}}" class="img-responsive" alt="">
    </a>
    </figure>
    </div>
    @endforeach
    </div>
    </section> --}}


<section class="ptb80" id="latest-news">
<div class="container">
<div class="section-title">
<h2>{{__('home.Latest News')}}</h2>
</div>
<div class="col-md-12">

<div class="row news-content pt30">

    @foreach ($posts as $post)

<div class="col-md-4">
<article class="blog-single pb30 shadow">
<div class="blog-post-thumbnail normal-post hover-link">
<a href="/post/{{$post->id}}"><img src="{{asset('/images/'.$post->image)}}" alt=""></a>
</div>
<div class="blog-post-title pt30 pb10">
 @if (App::isLocale('en'))
<h3><a href="/post/{{$post->id}}">{{$post->Title_en}}</a></h3>
<p class="nomargin pt5">{{$post->Auther_en}}<a class="blog-author" href="#"></a> <span class="blog-date">{{$post->updated_at}}</span></p>
</div>
<div class="blog-post-details pt20">
<p class="nomargin pb20">{!!Str::limit($post->Body_en, 200)!!}</p>
@else
<h3><a href="/post/{{$post->id}}">{{$post->Title_ar}}</a></h3>
<p class="nomargin pt5">{{$post->Auther_ar}}<a class="blog-author" href="#"></a> <span class="blog-date">{{$post->updated_at}}</span></p>
</div>
<div class="blog-post-details pt20">
<p class="nomargin pb20">{!!Str::limit($post->Body_ar, 200)!!}</p>
@endif


<a class="blog-more-btn" href="/post/{{$post->id}}">{{__('home.Read More')}} <i class="fa fa-long-arrow-right"></i></a>
</div>
</article>
</div>
@endforeach

<div class="col-md-12 text-center pt40">
<a href="blog-listing.html" class="btn btn-border btn-blue btn-dark">{{__('home.visit blog')}}</a>
</div>
</div>

</div>
</div>
</section>

<div class="live-chat collapsed">

<div class="header">
<a href="#" onclick="return(false);" class="chat-close"><i class="fa fa-times"></i></a>
<h4>Live Chat</h4>
<span class="chat-message-counter">1</span>
</div>


<div class="chat">

<div class="chat-history">

<div class="chat-message">
<img src="./images/team/team1.jpg" alt="">

<div class="chat-message-content">
<span class="chat-time">18:35</span>
<h5>Customer Support</h5>
<p>Welcome. How may I help you?</p>
</div>

</div>

<hr>

<div class="chat-message">
<img src="./images/team/team1.jpg" alt="">

<div class="chat-message-content">
<span class="chat-time">18:36</span>
<h5>John Doe</h5>
<p>Hello. Can you please help me to transfer my domain from my previous server?</p>
</div>

</div>

<hr>
</div>

<p class="chat-feedback">Customer Support is typing…</p>

<form action="#" method="post" onsubmit="this.reset(); return false;">
<fieldset>
<input type="text" placeholder="Type your message…">
</fieldset>
</form>

</div>

</div>


<div class="cd-user-modal">

<div class="cd-user-modal-container">

<ul class="cd-switcher">
<li><a href="#0">Sign in</a></li>
<li><a href="#1">New account</a></li>
</ul>
<div id="cd-login">

<form class="cd-form">
<p class="fieldset">
<label class="image-replace cd-email" for="signin-email">E-mail</label>
<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
</p>
<p class="fieldset">
<label class="image-replace cd-password" for="signin-password">Password</label>
<input class="full-width has-padding has-border" id="signin-password" type="password" placeholder="Password">
</p>
<p class="fieldset">
<input type="checkbox" id="remember-me" checked>
<label for="remember-me">Remember me</label>
</p>
<p class="fieldset">
<button type="submit" value="Login" class="btn btn-border btn-blue">Login</button>
</p>
</form>
</div>

<div id="cd-signup">

<form class="cd-form">
<p class="fieldset">
<label class="image-replace cd-username" for="signup-username">Username</label>
<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
</p>
<p class="fieldset">
<label class="image-replace cd-email" for="signup-email">E-mail</label>
<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
</p>
<p class="fieldset">
<label class="image-replace cd-password" for="signup-password">Password</label>
<input class="full-width has-padding has-border" id="signup-password" type="password" placeholder="Password">
</p>
<p class="fieldset">
<input type="checkbox" id="accept-terms">
<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
</p>
<p class="fieldset">
<button class="btn btn-border btn-blue" type="submit" value="Create account">Create Account</button>
</p>
</form>
</div>

</div>

</div>
@endsection
