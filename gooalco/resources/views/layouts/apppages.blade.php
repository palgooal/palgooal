<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <base href="/public/"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="شركة بال قول لتكنولوجيا المعلومات">
    <meta name="keywords" content="one page, multipage, domain, hosting, server, cloud, cloudify, html5 template , استضافة مواقع الانترنت, شركة بال قول لتكنولوجيا المعلومات,تكنولوجيا المعلومات, حجز دومينات,whois">
    <meta name="author" content="GnoDesign">
    <title>@yield('title' , __('home.Palgooal co'))</title>
    <meta property="fb:app_id"          content="2298185633728958"/> 
    <meta property="og:type"            content="article" /> 
    <meta property="og:url"             content="https://gooal.palgooal.com" /> 
    <meta property="og:title"           content="{{__('home.Palgooal co')}}" /> 
    <meta property="og:image"           content="https://gooal.palgooal.com/public/default1.jpg" /> 
    <meta property="og:description"    content="https://gooal.palgooal.com" />
    <meta property="og:locale:alternate" content="en" />
    <meta property="og:locale:alternate" content="ar" />
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="../images/apple-touch-icon.html">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700|Roboto:400,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">
    <link rel="stylesheet" type="text/css" href="../css/aa.css">

    @if (App::isLocale('ar'))

    <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style-ar.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

    @endif

<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/57488c85f633cc8d73012c90/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body id="page-top">
           

@include('partials.headerpage')
            </div>
@yield('content')
@include('partials.footer')
<div class="cd-user-modal">

    <div class="cd-user-modal-container">
    
    <ul class="cd-switcher">
    <li><a href="#0">{{__('login.Login')}}</a></li>
    <li><a href="#1">{{__('login.New account')}}</a></li>
    </ul>
    <div id="cd-login">
    
    <form class="cd-form" method="post" action="https://clientgooal.palgooal.com/dologin.php">
    <p class="fieldset">
    <label class="image-replace cd-email" for="signin-email">{{__('login.E-Mail Address')}}</label>
    <input class="full-width has-padding has-border" id="signin-email" type="text" name="username" size="50" placeholder="{{__('login.E-Mail Address')}}">
    </p>
    <p class="fieldset">
    <label class="image-replace cd-password" for="signin-password">{{__('login.Password')}}</label>
    <input class="full-width has-padding has-border" id="signin-password" type="password" name="password" size="20" autocomplete="off"  placeholder="{{__('login.Password')}}">
    </p>
    <p class="fieldset">
    <input type="checkbox" id="remember-me" checked>
    <label for="remember-me">{{__('login.Remember Me')}}  </label>
    </p>
    <p class="fieldset">
    <button type="submit" value="Login" class="btn btn-border btn-blue">{{__('login.Login')}}</button>
    </p>
    </form>
    </div>
    
    <div id="cd-signup">
    
    <form class="cd-form">
    <p class="fieldset">
    <label class="image-replace cd-username" for="signup-username">{{__('login.User Name')}}</label>
    <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="{{__('login.User Name')}}">
    </p>
    <p class="fieldset">
    <label class="image-replace cd-email" for="signup-email">{{__('login.E-Mail Address')}}</label>
    <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="{{__('login.E-Mail Address')}}">
    </p>
    <p class="fieldset">
    <label class="image-replace cd-password" for="signup-password">{{__('login.Password')}}</label>
    <input class="full-width has-padding has-border" id="signup-password" type="password" placeholder="{{__('Password')}}">
    </p>
    <p class="fieldset">
    <input type="checkbox" id="accept-terms">
    <label for="accept-terms">{{__('login.I agree the')}} <a href="#0">{{__('login.terms')}}</a></label>
    </p>
    <p class="fieldset">
    <button class="btn btn-border btn-blue" type="submit" value="Create account">{{__('login.New account')}}</button>
    </p>
    </form>
    </div>
    
    </div>
    
    </div>
    

<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/swiper.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/simple-expand.min.js"></script>
<script src="../js/jquery.countTo.js"></script>
<script src="../js/jquery.inview.min.js"></script>
<script src="../js/jquery.easing.min.js"></script>
<script src="../js/jquery.nav.js"></script>
<script src="../js/jquery.ajaxchimp.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/jquery.easypiechart.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/isotope.pkgd.min.js"></script>
<script src="../js/custom.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60264400-3', 'auto');
  ga('send', 'pageview');
</script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v5.0&appId=2298185633728958&autoLogAppEvents=1"></script>
</body>

<!-- Mirrored from cariera.co/templates/cloudify/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2019 17:00:00 GMT -->
</html>
