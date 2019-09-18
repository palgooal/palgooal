@extends('layouts.app')
@section('content')


<div class="loader">
<div class="spinner">
<div class="cloud1"><img src="{{asset('public/images/clouds/cloud-blue.svg')}}" alt=""></div>
<div class="cloud2"><img src="{{asset('public/images/clouds/cloud-green.svg')}}" alt=""></div>
</div>
</div>


<section class="demo1" id="home">

    <div class="swiper-container fullscreen">
    <div class="swiper-wrapper">

    <div class="swiper-slide overlay-black" style="background: url('{{asset('public/images/img/image1.jpg')}}'); background-size: cover;">
    <div class="slider-content container">
    <div class="col-md-12">
    <h2>Best web hosting <br> service for your <span class="text-blue">website</span>.</h2>
    <p>Get the best speed for your website. Don’t lose anymore
    <br>clients for the slowest speed of your hosting service.</p>
    <div>
    <a href="#" class="btn btn-border btn-blue"><i class="fa fa-star"></i>Get Started Now</a>
    <a href="#" class="btn btn-border-rev btn-green">check pricing</a>
    </div>
    </div>
    </div>
    </div>


    <div class="swiper-slide overlay-black">
    <div class="slider-content container">
    <div class="col-md-12">
    <h2>Best web hosting <br> service for your <span class="text-blue">website</span>.</h2>
    <p>Get the best speed for your website. Don’t lose anymore
    <br>clients for the slowest speed of your hosting service.</p>
    <div>
    <a href="#" class="btn btn-border btn-blue"><i class="fa fa-star"></i>Get Started Now</a>
    <a href="#" class="btn btn-border-rev btn-green">check pricing</a>
    </div>
    </div>
    </div>
    <video class="video-bg " preload="auto" loop="" autoplay="" poster="video/video.jpg">
    <source src="{{asset('public/video/video.mp4')}}" type="video/mp4">
    <source src="{{asset('public/video/video.webm')}}" type="video/webm">
    <source src="{{asset('public/video/video.ogv')}}" type="video/ogg">
    </video>
    </div>


    <div class="swiper-slide overlay-black" style="background: #29b2fe;">
    <div class="slider-content container">
    <div class="col-md-12">
    <h2>Best web hosting <br> service for your <span class="text-blue">website</span>.</h2>
    <p>Get the best speed for your website. Don’t lose anymore
    <br>clients for the slowest speed of your hosting service.</p>
    <div>
    <a href="#" class="btn btn-border btn-blue"><i class="fa fa-star"></i>Get Started Now</a>
    <a href="#" class="btn btn-border-rev btn-green">check pricing</a>
    </div>
    </div>
    </div>
    </div>

    </div>


    <div class="swiper-pagination"></div>

    <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
    <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
    </div>

    </section>


<section class="domain ptb30">
<div class="container">
<div class="col-md-3">
<h2 class="capitalize">{{__('home.Search Your')}} <span class="text-blue">{{__('home.domain')}}</span> {{__('home.Now!')}}</h2>
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
<input type="checkbox" id="com" name="com" value="com"> .com ($8.99)
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
<h2 class="ptb20">Welcome to Cloudify</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus felis sit amet eros varius vestibulum. Aliquam in euismod leo. Proin ac leo est. Ut eu bibendum velit, vitae tristique ipsum. In scelerisque elit ac ipsum ullamcorper porttitor. Phasellus vitae felis eu arcu iaculis posuere vitae eget diam. Nullam dictum sollicitudin elementum.</p>
<a href="#" class="btn btn-border btn-blue">{{__('home.Lear More')}}</a>
</div>

<div class="col-md-6 about-image">
<img src="{{asset('public/images/img/about.svg')}}" alt="">
</div>

<div class="clouds">
<img src="{{asset('public/images/clouds/cloud1.svg')}}" alt="" class="cloud1">
<img src="{{asset('public/images/clouds/cloud2.svg')}}" alt="" class="cloud2">
<img src="{{asset('public/images/clouds/cloud3.svg')}}" alt="" class="cloud3">
<img src="{{asset('public/images/clouds/cloud1.svg')}}" alt="" class="cloud4">
<img src="{{asset('public/images/clouds/cloud3.svg')}}" alt="" class="cloud5">
</div>
</div>
</section>


<section id="services">
<div class="container ptb80">
<div class="section-title">
<h2>Services</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
</div>

<div class="row nomargin">
<div class="col-sm-4 col-xs-12 service text-center pt40">
<img src="{{asset('public/images/icons/cloud-server.svg')}}" alt="">
<h3 class="ptb20">SSD Cloud Hosting</h3>
<p>Experience up to 2X faster load times due to low-density servers, premium hardware, and multiple caching layers.</p>
</div>
<div class="col-sm-4 col-xs-12 service text-center pt40">
<img src="{{asset('public/images/icons/locked.svg')}}" alt="">
<h3 class="ptb20">Secured Server</h3>
<p>The security of your website is our top priority. </p>
</div>
<div class="col-sm-4 col-xs-12 service text-center pt40">
<img src="{{asset('public/images/icons/transfer.svg')}}" alt="">
<h3 class="ptb20">Free Domain Transfer</h3>
<p>Our dedicated Team is standing by to transfer your existing content from your prior host to our platform.</p>
</div>
</div>


<div class="row nomargin pt40">
<div class="col-sm-4 col-xs-12 service text-center pt40">
<img src="{{asset('public/images/icons/chat1.svg')}}" alt="">
<h3 class="ptb20">Live Chat Support</h3>
<p>Our support team will be at your service 24/7 helping and guiding you via live chat. </p>
</div>
<div class="col-sm-4 col-xs-12 service text-center pt40">
<img src="{{asset('public/images/icons/customer-service.svg')}}" alt="">
<h3 class="ptb20">Technical Support</h3>
<p>Our support staff is available 24/7/365 to assist you.</p>
</div>
<div class="col-sm-4 col-xs-12 service text-center pt40">
<img src="{{asset('public/images/icons/optimization.svg')}}" alt="">
<h3 class="ptb20">Free Website Optimization</h3>
<p>Cloudify will help you rank your website higher.</p>
</div>
</div>

</div>

<div class="container-fluid ptb80 info">
<div class="container">
<div class="col-md-6 info-text">
<h3 class="pb20">Easy to Customize</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<ul>
<li>Super clean code.</li>
<li>Well commented.</li>
<li>Documentation included.</li>
</ul>
</div>
<div class="col-md-4 col-md-offset-2 info-image">
<img src="{{asset('public/images/icons/custom.svg')}}" alt="">
</div>
</div>
</div>


<div class="container-fluid ptb80 info" id="secondary">
<div class="container">
<div class="col-md-4 info-image">
<img src="{{asset('public/images/icons/pixel-perfect.svg')}}" alt="">
</div>
<div class="col-md-offset-2 col-md-6 info-text">
<h3 class="pb20">Pixel Perfect Design</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<ul>
<li>Unique & modern design.</li>
 <li>Svg graphics.</li>
<li>Retina ready.</li>
</ul>
</div>
</div>
</div>


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
<img src="{{asset('public/images/icons/responsive-design.svg')}}" alt="">
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
<img src="{{asset('public/images/clouds/cloud1.svg')}}" class="cloud1" alt="">
<img src="{{asset('public/images/clouds/cloud2.svg')}}" class="cloud2" alt="">
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
<img src="{{asset('public/images/team/team1.jpg')}}" class="img-responsive" alt="">
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
<img src="{{asset('public/images/team/team2.jpg')}}" class="img-responsive" alt="">
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
<img src="{{asset('public/images/team/team3.jpg')}}" class="img-responsive" alt="">
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

<div class="col-sm-3 pricing-plan" id="starter">

<div class="row price">
<div>
<span class="currency">$</span>
<span class="amount">19</span>
<span class="month">per month</span>
</div>
</div>

<div class="plan-type">
<span>Starter</span>
</div>

<ul class="nav">
<li>3 Email Account</li>
<li>1 Website Layout</li>
<li>5GB Space</li>
<li><i class="fa fa-times"></i></li>
<li><i class="fa fa-times"></i></li>
<li><i class="fa fa-times"></i></li>
</ul>
<a href="#" class="btn btn-border btn-blue">purchase</a>

</div>


<div class="col-sm-3 pricing-plan" id="basic">

<div class="row price">
<div>
<span class="currency">$</span>
<span class="amount">39</span>
<span class="month">per month</span>
</div>
</div>

<div class="plan-type">
<span>basic</span>
</div>

<ul class="nav">
<li>10 Email Account</li>
<li>3 Website Layout</li>
<li>10GB Space</li>
<li><i class="fa fa-check"></i></li>
<li><i class="fa fa-times"></i></li>
<li><i class="fa fa-times"></i></li>
</ul>
<a href="#" class="btn btn-border btn-blue">purchase</a>

</div>


<div class="col-sm-3 pricing-plan" id="agency">

<div class="row price">
<div>
<span class="currency">$</span>
<span class="amount">69</span>
<span class="month">per month</span>
</div>
</div>

<div class="plan-type">
<span>agency</span>
</div>

<ul class="nav">
<li>100 Email Account</li>
<li>10 Website Layout</li>
<li>100GB Space</li>
<li><i class="fa fa-check"></i></li>
<li><i class="fa fa-check"></i></li>
<li><i class="fa fa-times"></i></li>
</ul>
<a href="#" class="btn btn-border btn-blue">purchase</a>

</div>


<div class="col-sm-3 pricing-plan" id="enterprise">

<div class="row price">
<div>
<span class="currency">$</span>
<span class="amount">99</span>
<span class="month">per month</span>
</div>
</div>

<div class="plan-type">
<span>enterprise</span>
</div>

<ul class="nav">
<li><strong>Unlimited</strong></li>
<li>100 Website Layout</li>
<li><strong>Unlimited Space</strong></li>
<li><i class="fa fa-check"></i></li>
<li><i class="fa fa-check"></i></li>
 <li><i class="fa fa-check"></i></li>
</ul>
<a href="#" class="btn btn-border btn-blue">purchase</a>

</div>

</div>

</div>
</section>


<section class="ptb40" id="countup">
<div class="container-fluid">

<div class="col-md-3 col-sm-3 col-xs-12">
<img src="{{asset('public/images/icons/award.svg')}}" alt="">
<span class="counter" data-from="0" data-to="65"></span>
<h3>Awards</h3>
</div>


<div class="col-md-3 col-sm-3 col-xs-12">
<img src="{{asset('public/images/icons/happy.svg')}}" alt="">
<span class="counter" data-from="0" data-to="750"></span>
<h3>Clients</h3>
</div>


<div class="col-md-3 col-sm-3 col-xs-12">
<img src="{{asset('public/images/icons/site.svg')}}" alt="">
<span class="counter" data-from="0" data-to="1425"></span>
<h3>Hosted Websites</h3>
</div>


<div class="col-md-3 col-sm-3 col-xs-12">
<img src="{{asset('public/images/icons/clock.svg')}}" alt="">
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
<img src="{{asset('public/images/clouds/cloud-blue.svg')}}" alt="">
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
<img src="{{asset('public/images/clouds/cloud-blue.svg')}}" alt="">
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
<img src="{{asset('public/images/clouds/cloud-blue.svg')}}" alt="">
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
<img src="{{asset('public/images/clouds/cloud-blue.svg')}}" alt="">
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
<img src="{{asset('public/images/clouds/cloud-blue.svg')}}" alt="">
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
<img src="{{asset('public/images/clouds/cloud-blue.svg')}}" alt="">
</div>
</div>
<div class="customer">
<h3 class="uppercase">customer</h3>
<span>Web Developer</span>
</div>
</div>

</div>

</div>
</section>


<section class="ptb80" id="latest-news">
<div class="container">
<div class="section-title">
<h2>Latest News</h2>
<p>Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since The 1500s.</p>
</div>
<div class="col-md-12">

<div class="row news-content pt30">




@foreach ($posts as $post)


<div class="col-md-4">
<article class="blog-single pb30 shadow">
<div class="blog-post-thumbnail normal-post hover-link">
<a href="blog-post.html"><img src="" alt=""></a>
</div>
<div class="blog-post-title pt30 pb10">
<h3><a href="blog-post.html">{{$post->Title}}</a></h3>
<p class="nomargin pt5">By <a class="blog-author" href="#"></a> <span class="blog-date"></span></p>
</div>
<div class="blog-post-details pt20">
<p class="nomargin pb20"></p>
<a class="blog-more-btn" href="blog-post.html">Read More <i class="fa fa-long-arrow-right"></i></a>
</div>
</article>
</div>
@endforeach


<div class="col-md-4">
<article class="blog-single pb30 shadow">
<div class="blog-post-thumbnail normal-post hover-link">
<a href="blog-post.html"><img src="{{asset('public/images/blog/blog2.jpg')}}" alt=""></a>
</div>
<div class="blog-post-title pt30 pb10">
<h3><a href="blog-post.html">Cloudify strategy tipps</a></h3>
<p class="nomargin pt5">By <a class="blog-author" href="#">John Doe</a> <span class="blog-date">17 October 2016</span></p>
</div>
<div class="blog-post-details pt20">
<p class="nomargin pb20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
<a class="blog-more-btn" href="blog-post.html">Read More <i class="fa fa-long-arrow-right"></i></a>
</div>
</article>
</div>


<div class="col-md-4">
<article class="blog-single pb30 shadow">
<div class="blog-post-thumbnail normal-post hover-link">
<a href="blog-post.html"><img src="{{asset('public/images/blog/blog3.jpg')}}" alt=""></a>
</div>
<div class="blog-post-title pt30 pb10">
<h3><a href="blog-post.html">Working with Cloudify</a></h3>
<p class="nomargin pt5">By <a class="blog-author" href="#">John Doe</a> <span class="blog-date">17 October 2016</span></p>
</div>
<div class="blog-post-details pt20">
<p class="nomargin pb20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
<a class="blog-more-btn" href="blog-post.html">Read More <i class="fa fa-long-arrow-right"></i></a>
</div>
</article>
</div>


<div class="col-md-12 text-center pt40">
<a href="blog-listing.html" class="btn btn-border btn-blue btn-dark">visit blog</a>
</div>
</div>

</div>
</div>
</section>


<section class="ptb40" id="partners">
<div class="container">
<div class="owl-carousel partners-slider">
<div class="item">
<a href="#"><img src="{{asset('public/images/partners/envato-logo.svg')}}" alt="image title"></a>
</div>
<div class="item">
<a href="#"><img src="{{asset('public/images/partners/envato-logo.svg')}}" alt="image title"></a>
</div>
<div class="item">
<a href="#"><img src="{{asset('public/images/partners/envato-logo.svg')}}" alt="image title"></a>
</div>
<div class="item">
<a href="#"><img src="{{asset('public/images/partners/envato-logo.svg')}}" alt="image title"></a>
</div>
<div class="item">
<a href="#"><img src="{{asset('public/images/partners/envato-logo.svg')}}" alt="image title"></a>
</div>
<div class="item">
<a href="#"><img src="{{asset('public/images/partners/envato-logo.svg')}}" alt="image title"></a>
</div>
<div class="item">
<a href="#"><img src="{{asset('public/images/partners/envato-logo.svg')}}" alt="image title"></a>
</div>
<div class="item">
<a href="#"><img src="{{asset('public/images/partners/envato-logo.svg')}}" alt="image title"></a>
</div>
</div>
</div>
</section>


<footer>

<div class="top-footer">
<div class="container">

<div class="row ptb60 footer-info">

<div class="col-sm-3 about">
<a href="index.html"><img src="{{asset('public/images/logo.svg')}}" alt=""></a>
<p class="pt30">Lorem ipsum dolor sit amet, ectetur adipiscing elit.viverra tellus. Vivamus finibus, quam vitae pulvinar euismod, Lorem ipsum dolor sit amet, ectetur adipiscing elit.</p>
</div>

<div class="col-sm-3">
<h4>Important Links</h4>
<ul class="footer-links nopadding mt30">
<li><a href="#">Privacy & Policy</a></li>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">VPS Service</a></li>
<li><a href="#">Support</a></li>
</ul>
</div>

<div class="col-sm-3">
<h4>Products</h4>
<ul class="footer-links nopadding mt30">
<li><a href="#">Webhosting</a></li>
<li><a href="#">Reseler Hosting</a></li>
<li><a href="#">VPS Hosting</a></li>
<li><a href="#">Wordpress Hosting</a></li>
</ul>
</div>

<div class="col-sm-3">
<h4>Contact Us</h4>
<ul class="footer-links nopadding mt30">
<li><i class="fa fa-phone"></i>123-456-7890</li>
<li><i class="fa fa-envelope"></i><a href="http://cariera.co/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f29b9c949db2919e9d87969b948bdc919d9f">[email&#160;protected]</a></li>
<li><i class="fa fa-map-marker"></i>London, UK</li>
</ul>
<div class="payment mt30">
<h4>Payment</h4>
<ul class="list-inline nopadding mt20">
<li><i class="fa fa-cc-amex"></i></li>
<li><i class="fa fa-cc-paypal"></i></li>
<li><i class="fa fa-cc-stripe"></i></li>
<li><i class="fa fa-cc-visa"></i></li>
</ul>
</div>
</div>
</div>

</div>
</div>


<div class="copyright ptb20 text-center">
Copyright &copy; cloudify. All Rights Reserved
</div>

</footer>


<div class="live-chat collapsed">

<div class="header">
<a href="#" onclick="return(false);" class="chat-close"><i class="fa fa-times"></i></a>
<h4>Live Chat</h4>
<span class="chat-message-counter">1</span>
</div>


<div class="chat">

<div class="chat-history">

<div class="chat-message">
<img src="{{asset('public/images/team/team1.jpg')}}" alt="">

<div class="chat-message-content">
<span class="chat-time">18:35</span>
<h5>Customer Support</h5>
<p>Welcome. How may I help you?</p>
</div>

</div>

<hr>

<div class="chat-message">
<img src="{{asset('public/images/team/team1.jpg')}}" alt="">

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
