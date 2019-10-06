<div class="loader">
                <div class="spinner">
                <div class="cloud1"><img src="/images/clouds/cloud-blue.svg" alt=""></div>
                <div class="cloud2"><img src="/images/clouds/cloud-green.svg" alt=""></div>
                </div>
                </div>
                <div class="top-header">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <ul class="social list-inline ptb10">
                            <li><a href="tel:12345678912">+970-598-663-901</a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                            </div>


                            <div class="col-md-6 col-sm-6 col-xs-12">

                            <ul class="top-button ptb10">
                            <li>
                            <a href="#" class="btn btn-small btn-border btn-green customer-support"><i class="fa fa-comments"></i>{{__('home.live chat')}}</a>
                            </li>
                            <li class="login">
                            <a id="modal_trigger" class="btn btn-small btn-border-rev btn-blue" href="#"><i class="fa fa-user"></i>{{__('home.Client Area')}}</a>
                            </li>
                            @if (App::isLocale('en'))
                            <li>
                                <a  class="btn btn-small btn-border btn-green customer-support" href="/lang/ar"><i class="fa fa-user"></i>عربي</a>
                                </li>   
                           
                            @else
                            <li>
                                <a  class="btn btn-small btn-border btn-green customer-support" href="/lang/en"><i class="fa fa-user"></i>en</a>
                                </li>
                            @endif
                           
                                
                            </ul>

                            </div>
                            </div>
                            </div>
                            </div>

    <header class="fixed">
        <nav class="navbar navbar-default navbar-static-top fluid_header centered transparent">
        <div class="container">

        <div class="col-md-2 col-sm-3 col-xs-3">
        <a class="navbar-brand" href="/"><img src="{{asset('/images/LOGO.png')}}" alt="logo"></a>

        </div>

        <div class="col-md-10 col-sm-9 col-xs-9">
        <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        </div>
        <div class="collapse navbar-collapse pull-right cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="main-nav">
        <ul class="nav navbar-nav navbar-right">
                @foreach ($menus as $menu)


        <li class="dropdown simple-menu active">

        <a href="{{$menu->url}}" class="dropdown-toggle" data-toggle="dropdown" role="button">@if (App::isLocale('en')){{$menu->name_en}}
            @else
            {{$menu->name_ar}}
            @endif
           <i class="fa fa-caret-down"></i></a>
        @if ($menu->submenus->count() >= 1)
        <ul class="dropdown-menu" role="menu">
                @foreach ($menu->submenus as $submenu)
        <li><a href="{{$menu->url}}">@if (App::isLocale('en')){{$submenu->name_en}}@else {{$submenu->name_ar}}@endif
                </a></li>
        @endforeach
        </ul>
        @endif
        </li>
        @endforeach

        </ul>

        </li>

        </ul>
        </div>
        </div>

        </div>
        </nav>
        </header>

