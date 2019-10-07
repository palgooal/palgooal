@extends('layouts.app')
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
        <h3>London, UK Office</h3>
        <p class="pt10 pb20 nomargin">Vivah London, London, United Kingdom</p>
        <ul>
        <li><strong>Phone:</strong> +123 456 789 0123</li>
        <li><strong>Fax:</strong> +123 456 789 0123</li>
        <li><strong>Email:</strong> <a href="http://cariera.co/cdn-cgi/l/email-protection#c6bfa9b3b4a3aba7afaa86a5aaa9b3a2afa0bfe8a5a9ab"><span class="__cf_email__" data-cfemail="87fee8f2f5e2eae6eec7e4ebe8f2e3eee1fea9e4e8ea">[email&#160;protected]</span></a></li>
        </ul>
        </div>

        <div class="contact-item mt40">
        <h3>New York, USA Office</h3>
        <p class="pt10 pb20 nomargin">New York Center, New York, USA</p>
        <ul>
        <li><strong>Phone:</strong> +123 456 789 0123</li>
        <li><strong>Fax:</strong> +123 456 789 0123</li>
        <li><strong>Email:</strong> <a href="http://cariera.co/cdn-cgi/l/email-protection#364f594344535b575f5a76555a5943525f504f1855595b"><span class="__cf_email__" data-cfemail="354c5a40475058545c7556595a40515c534c1b565a58">[email&#160;protected]</span></a></li>
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
