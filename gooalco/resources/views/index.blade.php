@extends('layouts.app') @section('content') @include('partials.slider')

<section class="domain ptb30">
    <div class="container">
        <div class="col-md-3">

            <h2 class="capitalize">{{__('home.Search Your')}} <br><span class="text-blue">{{__('home.domain')}}</span> {{__('home.Now!')}}</h2>
        </div>

        <div class="col-md-9">
            <div class="row">

                <div class="form-group">
                    <form action="https://clientgooal.palgooal.com/cart.php?a=add&domain=register" method="post">

                        <input type="text" name="query" class="form-control" placeholder="{{__('home.Enter your domain name here')}}">
                        <button type="submit" class="btn btn-border btn-blue">{{__('home.Search')}}</button>
                    </form>
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
            <h2>{{__('home.Why choose Palgooal')}}</h2> {{--
            <p>{{__('home.Every type of company services we offer is optimized with unique performance improvements!')}}</p> --}}
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
                        {{-- {{__('home.We provide services suitable for all and represent a fertile environment for the growth of ideas and projects on the Internet, and our services carry a lot of values ​​that generate a sense of happiness and satisfaction among our customers over the (11) eleven years we have witnessed')}} --}}
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"><a href="https://palgooal.com/pages/linux-hosting-packages"> <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
                        <h6>{{__('home.Shared Hosting')}}</h6></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"><a href="#"> <span class="icon feature_box_col_two"><i class="fa fa-anchor"></i></span>
                        <h6>{{__('home.Distributor service(Reseller)')}}</h6></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"><a href="#"> <span class="icon feature_box_col_three"><i class="fa fa-wordpress"></i></span>
                        <h6>{{__('home.Hosting Wordpress')}}</h6></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"><a href="https://clientgooal.palgooal.com/cart.php?a=add&domain=register"> <span class="icon feature_box_col_four"><i class="fa fa-database"></i></span>
                        <h6>{{__('home.Domain reservation')}}</h6></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <a href="http://sms.palgooal.com/"> <span class="icon feature_box_col_five"><i class="fa fa-comments"></i></span>
                        <h6>{{__('home.Sms Hosting')}}</h6></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"><a href="/#"> <span class="icon feature_box_col_six"><i class="fa fa-camera"></i></span>
                        <h6>{{__('home.progroming and disagining')}}</h6></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@include('partials.sliderwork')

<section class="ptb80" id="latest-news" )>

    <div class="container">
        <div class="section-title">
            <h2>{{__('home.Latest News')}}</h2>
        </div>
        <div class="col-md-12">

            @if (App::isLocale('en')) @includeWhen(!count($posts) !=null, 'alert.empyt', ['msg' => 'No posts yet ']) @else @includeWhen(!count($posts) !=null, 'alert.empyt', ['msg' => 'لا توجد منشورات']) @endif @foreach ($posts as $post)

            <div class="col-md-4">
                <article class="blog-single pb30 shadow">
                    <div class="blog-post-thumbnail normal-post hover-link">
                        <a href="/post/{{$post->slug}}"><img src="{{asset('/images/'.$post->image)}}" alt=""></a>
                    </div>
                    <div class="blog-post-title pt30 pb10">
                        @if (App::isLocale('en'))
                        <h3><a href="/post/{{$post->slug}}">{{$post->Title_en}}</a></h3>
                        <p class="nomargin pt5">{{$post->Auther_en}}
                            <a class="blog-author" href="#"></a> <span class="blog-date">{{$post->updated_at}}</span></p>
                    </div>
                    <div class="blog-post-details pt20">
                        <p class="nomargin pb20">{!!Str::limit($post->Body_en, 200)!!}</p>
                        @else
                        <h3><a href="/post/{{$post->slug}}">{{$post->Title_ar}}</a></h3>
                        <p class="nomargin pt5">{{$post->Auther_ar}}
                            <a class="blog-author" href="#"></a> <span class="blog-date">{{$post->updated_at}}</span></p>
                    </div>
                    <div class="blog-post-details pt20">
                        <p class="nomargin pb20">{!!Str::limit($post->Body_ar, 200)!!}</p>
                        @endif

                        <a class="blog-more-btn" href="/post/{{$post->slug}}">{{__('home.Read More')}} <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </article>
            </div>
            @endforeach

            <div class="col-md-12 text-center pt40">
                <a href="/Blog" class="btn btn-border btn-blue btn-dark">{{__('home.visit blog')}}</a>
            </div>
        </div>

    </div>
    </div>
</section>


@endsection