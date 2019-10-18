
<section class="demo1" id="home">

    <div class="swiper-container fullscreen">



    <div class="swiper-wrapper">
            @foreach ($sliders->take(3) as $slider)

    <div class="swiper-slide overlay-black" style="background: url('{{asset('/images/'.$slider->image)}}'); background-size: cover;">
    <div class="slider-content container">
    <div class="col-md-12">
            @if (App::isLocale('en'))
    {{-- <h2>{{$slider->title_en}} <br> {{$slider->title2_en}}  <span class="text-blue">{{$slider->text_blue_en}}</span>.</h2>
    <p>{{$slider->description_en}}</p> --}}

    <p class="nomargin pb20">{!!Str::limit($slider->body_en, 1000)!!}</p>
    @else
            {{-- <h2>{{$slider->title_ar}} <br> {{$slider->title2_ar}}  <span class="text-blue">{{$slider->text_blue_ar}}</span>.</h2>
            <p>{{$slider->description_ar}}</p> --}}
            <p class="nomargin pb20">{!!Str::limit($slider->body_ar, 1000)!!}</p>
            @endif
            {{-- <div>
    <a href="#" class="btn btn-border btn-blue"><i class="fa fa-star"></i>Get Started Now</a>
    <a href="#" class="btn btn-border-rev btn-green">check pricing</a>
    </div> --}}
    </div>
    </div>
    </div>

{{--
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
    <source src="./video/video.mp4" type="video/mp4">
    <source src="./video/video.webm" type="video/webm">
    <source src="./video/video.ogv" type="video/ogg">
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
    </div> --}}
@endforeach
    </div>


    <div class="swiper-pagination"></div>

    <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
    <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
    </div>


 </section>
