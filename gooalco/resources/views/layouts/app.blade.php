<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from cariera.co/templates/cloudify/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2019 16:59:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
{{-- <base href="/public/"> --}}

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

<meta name="description" content="Cloudify - Web Hosting HTML Template">
<meta name="keywords" content="one page, multipage, domain, hosting, server, cloud, cloudify, html5 template">
<meta name="author" content="GnoDesign">

<title>Cloudify - Web Hosting HTML Template</title>
<link rel="shortcut icon" href="{{asset('public/images/favicon.png')}}" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" href="{{asset('public/images/apple-touch-icon.html')}}">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700|Roboto:400,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="./css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="./css/style.css">
<link rel="stylesheet" type="text/css" href="./css/responsive.css">


@if (App::isLocale('ar'))
<link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
@endif


<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body id="page-top">

@include('partials.header')
{{-- @include('partials.slider')   --}}
@yield('content')




<script data-cfasync="false" src="./cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="./js/jquery-3.1.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/wow.min.js"></script>
<script src="./js/swiper.min.js"></script>
<script src="./js/owl.carousel.min.js"></script>
<script src="./js/simple-expand.min.js"></script>
<script src="./js/jquery.countTo.js"></script>
<script src="./js/jquery.inview.min.js"></script>
<script src="./js/jquery.easing.min.js"></script>
<script src="./js/jquery.nav.js"></script>
<script src="./js/jquery.ajaxchimp.js"></script>
<script src="./js/jquery-ui.min.js"></script>
<script src="./js/jquery.easypiechart.min.js"></script>
<script src="./js/jquery.magnific-popup.min.js"></script>
<script src="./js/isotope.pkgd.min.js"></script>
<script src="./js/custom.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60264400-3', 'auto');
  ga('send', 'pageview');

</script>
</body>

<!-- Mirrored from cariera.co/templates/cloudify/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2019 17:00:00 GMT -->
</html>
