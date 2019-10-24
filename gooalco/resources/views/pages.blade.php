@extends('layouts.apppages')
@section('content')
<section class="page-title ptb50 overlay-black">
    <div class="container">
        @if(App::isLocale('en'))
    <h2 class="uppercase">{{$page->title_en}}</h2>
    <div class="breadcrumbs pt10">
    <h5><a href="/">Home</a> / {{$page->title_en}}</h5>
    @else 
    <h2 class="uppercase">{{$page->title_ar}}</h2>
    <div class="breadcrumbs pt10">
    <h5><a href="/">الرئيسية</a> / {{$page->title_ar}}</h5>
    @endif
    </div>
    </div>
    </section>
    {{-- <section class="about-page ptb80">
        <div class="container">
        <div class="section-title"> --}}
            @if (App::isLocale('en'))
            {!!$page->content_en!!}
            @else
            {!!$page->content_ar!!}
            @endif
{{-- 
        </div>
        </section> --}}
        


@endsection