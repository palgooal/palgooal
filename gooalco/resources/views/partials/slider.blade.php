
<section class="demo1" id="home">

    <div class="swiper-container fullscreen">



    <div class="swiper-wrapper">
            @foreach ($sliders->take(3) as $slider)

    <div class="swiper-slide overlay-black" style="background: url('{{asset('/images/'.$slider->image)}}'); background-size: cover;">
    <div class="slider-content container">
    <div class="col-md-12">
            @if (App::isLocale('en'))
    <p class="nomargin pb20">{!!Str::limit($slider->body_en, 1000)!!}</p>
    @else
            <p class="nomargin pb20">{!!Str::limit($slider->body_ar, 1000)!!}</p>
            @endif

    </div>
    </div>
    </div>
@endforeach
    </div>


    <div class="swiper-pagination"></div>

    <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
    <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
    </div>


 </section>
