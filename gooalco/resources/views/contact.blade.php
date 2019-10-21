@extends('layouts.apppages')
@section('content')

<section class="page-title ptb50 overlay-black">
    <div class="container">
    <h2 class="uppercase">{{__('contact.Contact')}}</h2>
    <div class="breadcrumbs pt10">
    </div>
    </div>
    </section>
    <section class="contact-page ptb80">
        <div class="container">

        <aside class="col-md-4 contact-sidebar">

        <div class="contact-item">
        <h3>{{__('contact.to contact us')}}</h3>
        <br>
        {{-- <p class="pt10 pb20 nomargin">Vivah London, London, United Kingdom</p> --}}
        <ul>
        <li><strong>{{__('contact.Phone')}}:</strong> +970 598 663 901</li>
        <li><strong>{{__('contact.Email')}}:</strong> info@palgoal.ps</li>
        </ul>
        </div>

        
        </aside>


        <div class="col-md-8 pt40">
        <h3 class="uppercase text-center">{{__('contact.Leave us a message')}}</h3>
        <div class="row contact-form nomargin pt40">

        <form
         method="POST"
        action="/contact"
        accept-charset="UTF-8"
        class="form-horizontal"
        role="form">
            @csrf


        <div id="contact-result"></div>

        <div class="col-md-6">
        <input class="form-control input-box mb20" type="text" name="name" placeholder="{{__('contact.Your name')}}">
        </div>
        <div class="col-md-6">
        <input class="form-control input-box mb20" type="email" name="email" placeholder="{{__('contact.Your email')}}">
        </div>
        <div class="col-md-12">
        <input class="form-control input-box" type="text" name="subject" placeholder="{{__('contact.Subject')}}">
        <textarea class="form-control textarea-box mtb20" rows="8" name="message" placeholder="{{__('contact.Message')}}"></textarea>

        <button type="submit" class="btn btn-border btn-blue"class="btn blue">{{__('contact.Send')}}</button>
        </div>
        </form>

        </div>
        </div>

        </div>
        </section>
@endsection
