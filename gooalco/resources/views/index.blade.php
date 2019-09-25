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

<div class="container-fluid ptb80 info" id="secondary">
<div class="container">

<div class="col-md-offset-2 col-md-6 info-text">
<h3 class="pb20">Our main service</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<ul>
<li>Unique & modern design.</li>
 <li>Svg graphics.</li>
<li>Retina ready.</li>
</ul>
</div>
</div>
</div>
<<<<<<< HEAD
=======


<div class="container-fluid ptb80 info">
<div class="container">
<div class="col-md-6 info-text">
<h3 class="pb20">Fully Responsive</h3>
<p>Cloudify adapts and provides an optimal experience on any device it’s being accessed from. This means that your website should look and function flawlessly for a user on a desktop computer, laptop, tablet, or smartphone. </p>
<ul>
<li>Pixel Perfect</li>
<li>Svg graphics.</li>
<li>Retina ready.</li>
</ul>
</div>
<div class="col-md-4 col-md-offset-2 info-image">
<img src="./images/icons/responsive-design.svg" alt="">
</div>
</div>
</div>

</section>


<section class="ptb40" id="subscribe">
<div class="container subscribe-form">
<div class="col-md-3 col-sm-12">
<h2 class="uppercase">Subscribe<small class="capitalize">Newsletter</small></h2>
</div>
<div class="col-md-9 col-sm-12">

<form action="#" class="form-inline mailchimp" id="subscribtion-form-not">

<div id="subscribe-result"></div>

<div class="form-group">
<div class="input-group">
<input type="email" name="email" class="form-control" placeholder="Email Address">
<button type="submit" class="btn btn-border btn-blue">Submit</button>
</div>
</div>
</form>

</div>

<div class="clouds">
<img src="./images/clouds/cloud1.svg" class="cloud1" alt="">
<img src="./images/clouds/cloud2.svg" class="cloud2" alt="">
</div>

</div>
</section>


<section id="team">
<div class="container ptb80">
<div class="section-title">
<h2> Meet The Team </h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
</div>

<div class="col-md-4 col-sm-4 col-xs-12">
<div class="member">
<div class="member-details">
<img src="./images/team/team1.jpg" class="img-responsive" alt="">
<div class="overlay">
<div class="member-info-overlay">
<h4>John Doe</h4>
<p>SEO Expert</p>
</div>
<div class="member-social">
<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
<a href="#" class="google"><i class="fa fa-google-plus"></i></a>
<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
<div class="member-info">
<h4>John Doe</h4>
<p>SEO Expert</p>
</div>
</div>
</div>


<div class="col-md-4 col-sm-4 col-xs-12">
<div class="member">
<div class="member-details">
<img src="./images/team/team2.jpg" class="img-responsive" alt="">
<div class="overlay">
<div class="member-info-overlay">
<h4>John Doe</h4>
<p>Web Developer</p>
</div>
<div class="member-social">
<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
<a href="#" class="google"><i class="fa fa-google-plus"></i></a>
<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
<div class="member-info">
<h4>John Doe</h4>
<p>Web Developer</p>
</div>
</div>
</div>


<div class="col-md-4 col-sm-4 col-xs-12">
<div class="member">
<div class="member-details">
<img src="./images/team/team3.jpg" class="img-responsive" alt="">
<div class="overlay">
<div class="member-info-overlay">
<h4>John Doe</h4>
<p>Graphic Designer</p>
</div>
<div class="member-social">
<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
<a href="#" class="google"><i class="fa fa-google-plus"></i></a>
<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
<div class="member-info">
<h4>John Doe</h4>
<p>Graphic Designer</p>
</div>
</div>
</div>

</div>
</section>


<section id="pricing-table">
<div class="container ptb80">
<div class="section-title">
<h2>Pricing Plan</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
</div>

<div class="pricing-table1">
    @foreach ($prices as $price)



<div class="col-sm-3 pricing-plan" id="starter">

<div class="row price">
<div>
<span class="currency">$</span>
<span class="amount">{{$price->price}}</span>
<span class="month">per year</span>
</div>
</div>

<div class="plan-type">
<span>{{$price->name}}</span>
</div>

<ul class="nav">
<li>{{$price->num_email}} Email Account</li>
<li>{{$price->num_website}} Website Layout</li>
<li>{{$price->storge}}GB Space</li>
<li>Number of Database : {{$price->num_database}}</li>
<li>Avarage of Data Transfer : {{$price->data_transfare}}</li>
<li>Backup  :{{$price->backup}}</li>
<li>{{$price->description}}</li>
</ul>
<a href="#" class="btn btn-border btn-blue">purchase</a>

</div>





@endforeach

</div>

</div>
</section>


<section class="ptb40" id="countup">
<div class="container-fluid">

<div class="col-md-3 col-sm-3 col-xs-12">
<img src="./images/icons/award.svg" alt="">
<span class="counter" data-from="0" data-to="65"></span>
<h3>Awards</h3>
</div>


<div class="col-md-3 col-sm-3 col-xs-12">
<img src="./images/icons/happy.svg" alt="">
<span class="counter" data-from="0" data-to="750"></span>
<h3>Clients</h3>
</div>


<div class="col-md-3 col-sm-3 col-xs-12">
<img src="./images/icons/site.svg" alt="">
<span class="counter" data-from="0" data-to="1425"></span>
<h3>Hosted Websites</h3>
</div>


<div class="col-md-3 col-sm-3 col-xs-12">
<img src="./images/icons/clock.svg" alt="">
<span class="counter" data-from="0" data-to="2425"></span>
<h3>Work Hours</h3>
</div>

</div>
</section>


<section class="pt80 pb40" id="testimonials">
<div class="container">
<div class="section-title">
<h2> Testimonials </h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
</div>

<div class="owl-carousel testimonial">

<div class="item">
<div class="review">
<div class="review-inner text-center">
<blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. </blockquote>
<img src="./images/clouds/cloud-blue.svg" alt="">
</div>
</div>
<div class="customer">
<h3 class="uppercase">customer</h3>
<span>Web Developer</span>
</div>
</div>


<div class="item">
<div class="review">
<div class="review-inner text-center">
<blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. </blockquote>
<img src="./images/clouds/cloud-blue.svg" alt="">
</div>
</div>
<div class="customer">
<h3 class="uppercase">customer</h3>
<span>Web Developer</span>
</div>
</div>


<div class="item">
<div class="review">
<div class="review-inner text-center">
<blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. </blockquote>
<img src="./images/clouds/cloud-blue.svg" alt="">
</div>
</div>
<div class="customer">
<h3 class="uppercase">customer</h3>
<span>Web Developer</span>
</div>
</div>


<div class="item">
<div class="review">
<div class="review-inner text-center">
<blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. </blockquote>
<img src="./images/clouds/cloud-blue.svg" alt="">
</div>
</div>
<div class="customer">
<h3 class="uppercase">customer</h3>
<span>Web Developer</span>
</div>
</div>


<div class="item">
<div class="review">
<div class="review-inner text-center">
<blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. </blockquote>
<img src="./images/clouds/cloud-blue.svg" alt="">
</div>
</div>
<div class="customer">
<h3 class="uppercase">customer</h3>
<span>Web Developer</span>
</div>
</div>


<div class="item">
<div class="review">
<div class="review-inner text-center">
<blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. </blockquote>
<img src="./images/clouds/cloud-blue.svg" alt="">
</div>
</div>
<div class="customer">
<h3 class="uppercase">customer</h3>
<span>Web Developer</span>
</div>
</div>

</div>

</div>
>>>>>>> 0a15ec3eb8e2d1109f1d10074a3866c984978c1f
</section>
<section class="portfolio pt80 pb40">
    <div class="container nopadding">
    <div class="row">
        <div class="section-title">
            <h2>{{__('home.Of our business')}}</h2>
            </div>
    <ul class="list-inline text-center uppercase" id="portfolio-sorting">
    <li><a href="#0" data-filter="*" class="current">{{__('home.ALL')}}</a></li>
    <li><a href="#0" data-filter=".portfolio-cat1">servers</a></li>
    <li><a href="#0" data-filter=".portfolio-cat2">shared hosting</a></li>
    <li><a href="#0" data-filter=".portfolio-cat3">domains</a></li>
    <li><a href="#0" data-filter=".portfolio-cat4">hosted websites</a></li>
    </ul>
    </div>
    
    <div class="row portfolio-grid mt40">
    
    <div class="element col-md-3 col-sm-6 col-xs-6 portfolio-cat1">
    <figure>
    <a href="images/portfolio/image1.jpg" class="hover-zoom">
    <img src="images/portfolio/image1.jpg" class="img-responsive" alt="">
    </a>
    </figure>
    </div>
    
    <div class="element col-md-3 col-sm-6 col-xs-6 portfolio-cat2">
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
    
    <div class="element col-md-3 col-sm-6 col-xs-6 portfolio-cat1">
    <figure>
    <a href="images/portfolio/image5.jpg" class="hover-zoom">
    <img src="images/portfolio/image5.jpg" class="img-responsive" alt="">
    </a>
    </figure>
    </div>
    
    <div class="element col-md-3 col-sm-6 col-xs-6 portfolio-cat2">
    <figure>
    <a href="images/portfolio/image6.jpg" class="hover-zoom">
    <img src="images/portfolio/image6.jpg" class="img-responsive" alt="">
    </a>
     </figure>
    </div>
    
    <div class="element col-md-3 col-sm-6 col-xs-6 portfolio-cat3">
    <figure>
    <a href="images/portfolio/image7.jpg" class="hover-zoom">
    <img src="images/portfolio/image7.jpg" class="img-responsive" alt="">
    </a>
    </figure>
    </div>
    
    <div class="element col-md-3 col-sm-6 col-xs-6 portfolio-cat4">
    <figure>
    <a href="images/portfolio/image8.jpg" class="hover-zoom">
    <img src="images/portfolio/image8.jpg" class="img-responsive" alt="">
    </a>
    </figure>
    </div>
    </div>
    
    </div>
    </section>


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
<<<<<<< HEAD
<p class="nomargin pb20">{!!str_limit($post->Body_en, 200)!!}</p>
=======
<<<<<<< HEAD
<p class="nomargin pb20">{{$post->Body_en}} </p>
=======
<p class="nomargin pb20">{!!Str::limit($post->Body_en, 200)!!}</p>
>>>>>>> 84c4bc5c9476597ccf92e687765acd65f04f50d4
>>>>>>> 0a15ec3eb8e2d1109f1d10074a3866c984978c1f
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
