<!doctype html>
<html class="no-js" lang="zxx">


<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Shemaq Productions Limited – Movie and Film Production</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Place favicon.ico in the root directory -->
   {{-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('theme/assets/img/favicon.png')}}"> --}}
   @include('front.favicon')
   {{--  --}}
   <meta name="description" content="At ShemaQ Productions, we champion the extraordinary and are proud of the creative excellence we represent. Our unparalleled creativity and authentic storytelling are focused on creating, producing and distributing captivating and highly engaging digital content, with a strong focus on family entertainment excellence, reality game-show production and other branded content.">
   <link rel="canonical" href="{{url('/')}}"/>
   <meta property="og:description" content="At ShemaQ Productions, we champion the extraordinary and are proud of the creative excellence we represent. Our unparalleled creativity and authentic storytelling are focused on creating, producing and distributing captivating and highly engaging digital content, with a strong focus on family entertainment excellence, reality game-show production and other branded content." />
    <meta property="og:title" content="Shemaq Productions Limited – Movie and Film Production" />
    <meta property="og:type" content="articles" />
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:image" content="{{url('/')}}/theme/assets/img/logo/logo.png" />
    <meta name="twitter:title" content="Shemaq Productions Limited – Movie and Film Production" />
    <meta name="twitter:site" content="@shemaq" />
    <meta name="google-site-verification" content="oybQVWDBZuuEWNr0zgCeOMqzZMX4nQit_qtAKk6OHBE" />
   {{--  --}}
   <!-- CSS here -->
   <link rel="stylesheet" href="{{asset('theme/assets/css/preloader.css')}}">
   <link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('theme/assets/css/meanmenu.css')}}">
   <link rel="stylesheet" href="{{asset('theme/assets/css/animate.min.css')}}">
   <link rel="stylesheet" href="{{asset('theme/assets/css/swiper-bundle.css')}}">
   <link rel="stylesheet" href="{{asset('theme/assets/css/slick.css')}}">
   <link rel="stylesheet" href="{{asset('theme/assets/css/magnific-popup.css')}}">
   <link rel="stylesheet" href="{{asset('theme/assets/css/nice-select.css')}}">
   <link rel="stylesheet" href="{{asset('theme/assets/css/ui-range-slider.css')}}">
   <link rel="stylesheet" href="{{asset('theme/assets/css/flaticon_faime.css')}}">
   <link rel="stylesheet" href="{{asset('theme/assets/css/all.min.css')}}">
   <link rel="stylesheet" href="{{asset('theme/assets/css/default.css')}}">
   <link rel="stylesheet" href="{{asset('theme/assets/css/style.css')}}">
   <!-- CSS here -->
</head>

<body>

   <!-- cursor animation-->
   <div class="mouseCursor cursor-outer "></div>
   <div class="mouseCursor cursor-inner"><span>Drag</span></div>


   <!-- Go Top Button -->
   <button id="scroll_top" class="scroll-top">
      <i class="fa-solid fa-arrow-up"></i>
   </button>

   <!-- Preloader -->
   <div class="loader">
      <div class="loader__container">
         <div class="loader__film">
            <img class=loader__film-img src="{{asset('theme/assets/img/loader/film.png')}}" alt="img not found">
            <img class=loader__film-img src="{{asset('theme/assets/img/loader/film-2.png')}}" alt="img not found">
         </div>
         <img class=loader__camera src="{{asset('theme/assets/img/loader/camera.png')}}" alt="img not found">
      </div>
   </div>

   <!-- header area start -->
   @include('front.header')
   <!-- header area end -->

   <!-- sidebar area start -->
   @include('front.sidebar')
   <!-- sidebar area end -->


   @yield('content')

   <!-- footer-area-start -->
   @include('front.footer')
   <!-- footer-area-end -->



   <!-- JS here -->
   <script src="{{asset('theme/assets/js/jquery-3.6.0.min.js')}}"></script>
   <script src="{{asset('theme/assets/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('theme/assets/js/meanmenu.js')}}"></script>
   <script src="{{asset('theme/assets/js/swiper-bundle.min.js')}}"></script>
   <script src="{{asset('theme/assets/js/slick.min.js')}}"></script>
   <script src="{{asset('theme/assets/js/magnific-popup.min.js')}}"></script>
   <script src="{{asset('theme/assets/js/parallax.min.js')}}"></script>
   <script src="{{asset('theme/assets/js/gsap.min.js')}}"></script>
   <script src="{{asset('theme/assets/js/ScrollTrigger.min.js')}}"></script>
   <script src="{{asset('theme/assets/js/ScrollToPlugin.min.js')}}"></script>
   <script src="{{asset('theme/assets/js/SplitText.min.js')}}"></script>
   <script src="{{asset('theme/assets/js/vanilla-tils.js')}}"></script>
   <script src="{{asset('theme/assets/js/knob.min.js')}}"></script>
   <script src="{{asset('theme/assets/js/nice-select.min.js')}}"></script>
   <script src="{{asset('theme/assets/js/ajax-form.js')}}"></script>
   <script src="{{asset('theme/assets/js/wow.min.js')}}"></script>
   <script src="{{asset('theme/assets/js/sidebar.js')}}"></script>
   <script src="{{asset('theme/assets/js/imagesloaded.pkgd.min.js')}}"></script>
   <script src="{{asset('theme/assets/js/isotope.pkgd.min.js')}}"></script>
   <script src="{{asset('theme/assets/js/fontawesome.min.js')}}"></script>
   <script src="{{asset('theme/assets/js/ui-range-slider.js')}}"></script>
   <script src="{{asset('theme/assets/js/main.js')}}"></script>
</body>


</html>
