@extends('layouts.apppages')
@section('content')
<section class="page-title ptb50 overlay-black">
    <div class="container">
    <h2 class="uppercase">{{$page->title_ar}}</h2>
    <div class="breadcrumbs pt10">
    <h5><a href="index.html">Home</a> / Pages</h5>
    </div>
    </div>
    </section>
    <section class="about-page ptb80">
        <div class="container">
        <div class="section-title">
            @if (App::isLocale('en'))
            {!!$page->content_en!!}
            @else
            {!!$page->content_ar!!}
            @endif

        </div>
        </section>
        


@endsection