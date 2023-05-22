<!doctype html>
<html class="no-js" lang="zxx">


<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Shemaq Productions Limited – Movie and Film Production</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="{{asset('theme/assets/img/favicon.png')}}">
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
   <div class="fm-header-sidebar-area fm-header-sidebar-left">
      <div class="fm-header-sidebar-wrapper">
         <div class="fm-header-sidebar-action mb-75">
            <div class="fm-header-sidebar-logo">
               <a href="index.html"><img src="{{asset('theme/assets/img/logo/logo.png')}}" alt="img not found"></a>
            </div>
            <div class="offcanvas-close">
               <a class="offcanvas-btn" href="#0">
                  <i class="fa-thin fa-times"></i>
               </a>
            </div>
         </div>
         <div class="d-none d-sm-block">
            <div class="fm-offcanvas-about mt-30 mb-30">
               <h4>About Shemaq</h4>
               <p>We Believe Film And Moving Image Has The Power
                  To
                  Create
                  Significant Change.</p>
            </div>
         </div>
         <div class="d-none d-sm-block">
            <div class="fm-header-sidebar-search">
               <form action="https://html.bdevs.net/Shemaq-prev/Shemaq/index.html">
                  <input type="text" placeholder="Search here">
                  <button type="submit"><i class="flaticon flaticon-search"></i></button>
               </form>
            </div>
         </div>
         <div class="mobile-menu"></div>
         <div class="offcanvas-contact mt-45 mb-30">
            <h4 class="offcanvas-contact-title">Contact Information</h4>
            <ul>
               <li class="d-flex align-items-center gap-2">
                  <div class="offcanvas-contact-icon">
                     <a target="_blank"
                        href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">
                        <i class="fal fa-map-marker-alt"></i></a>
                  </div>
                  <div class="offcanvas-contact-text">
                     <a target="_blank"
                        href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">477-463
                        Broadway, NY 10013 Bournemouth</a>
                  </div>
               </li>
               <li class="d-flex align-items-center gap-2">
                  <div class="offcanvas-contact-icon">
                     <a href="tel:+088889797697"><i class="far fa-phone"></i></a>
                  </div>
                  <div class="offcanvas-contact-text">
                     <a href="tel:915550303420">+91 555 0303 420</a>
                  </div>
               </li>
               <li class="d-flex align-items-center gap-2">
                  <div class="offcanvas-contact-icon">
                     <a href="https://html.bdevs.net/cdn-cgi/l/email-protection#3c4f494c4c534e487c5b515d5550125f5351"><i class="fal fa-envelope"></i></a>
                  </div>
                  <div class="offcanvas-contact-text">
                     <a href="https://html.bdevs.net/cdn-cgi/l/email-protection#1b737e7777745b7d7a72767e767e7f727a35787476"><span class="__cf_email__" data-cfemail="f098959c9c9fb09691999d959d95949991de939f9d">[email&#160;protected]</span></a>
                  </div>
               </li>
            </ul>
         </div>
         <div class="d-none d-sm-block d-sm-none d-md-block">
            <div class="fm-offcanvas-social">
               <span class="social-text">Follow :</span>
               <div class="fm-offcanvas-social-icon">
                  <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                  <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                  <a href="https://www.pinterest.com/" target="_blank"><i class="fa-brands fa-pinterest-p"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="overlay"></div>
   <!-- sidebar area end -->


   <main>

      <!-- fm-hero-area-start -->
      <div class="fm-hero-area black-bg hero-style hero-spc">
         <div class="hero-bg-thumb ">
            <img src="{{asset('theme/assets/img/bg/bg-1.png')}}" alt="img not found">
         </div>
         <div class="hero-shape-wrapper">
            <img class="hero-shape shape-1 d-none d-sm-block d-lg-none d-xl-block d-md-none d-lg-block"
               src="{{asset('theme/assets/img/new-award-logo/award-1.png')}}" alt="award shape">
         </div>
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-8 col-lg-8 ">

                  <div class="fm-hero-video-wrapper hero__six_anim ">

                     <a href="https://assets.mixkit.co/videos/preview/mixkit-crew-working-on-a-film-at-warehouse-22994-large.mp4"
                        class="popup-video hero-btn-hover">

                        <div class="fm-hero-video-thumb ">
                           <img src="{{asset('theme/assets/img/bg/hero-small.png')}}" alt="img not found">
                        </div>

                        <div class="fm-hero-video fm-featured-video-btn">
                           <div class="fm-hero-video-btn">Play
                              Trailer<i class="fas fa-play">

                              </i></div>
                        </div>

                     </a>
                  </div>

                  <div class="fm-hero-section-wrapper hero__six_anim">
                     <div class="fm-hero-section-title">
                        <span class="fm-hero-subtitle ">AN award winning web series</span>
                        <h1 class="fm-hero-main-title hero__title-6">
                           <span class="title-left">Shemaq</span>
                           <span class="spc-text title-right">GAME</span>
                        </h1>
                     </div>
                  </div>

               </div>
               <div class="col-xl-4 col-lg-4 ">
                  <div class="fm-hero-thumb d-none d-sm-block hero__right-6">
                     <img src="{{asset('theme/assets/img/portfolio/port-1.png')}}" alt="img not found">
                  </div>
                  <div class="d-none d-xl-none d-xxl-block">
                     <div class="fm-slider-main-social-abs">
                        <div class="fm-sliderfull-social">
                           <label>Follow</label>
                           <a href="https://www.facebook.com/" target="_blank"><i
                                 class="fa-brands fa-facebook-f"></i></a>
                           <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                           <a href="https://www.instagram.com/" target="_blank"><i
                                 class="fa-brands fa-instagram"></i></a>
                           <a href="https://www.pinterest.com/" target="_blank"><i
                                 class="fa-brands fa-pinterest-p"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- fm-hero-area-end -->

      <!-- about-area-start -->
      <section class="about-area pt-140 pb-150">
         <div class="container">
            <div class="row">
               <div class="col-xl-5 col-lg-12">
                  <div class="about-sub">
                     <span class="about-subtitle title-anim">About Shemaq</span>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-12">
                  <div class="section-title">
                     <h2 class="section-main-title about-main-title title-anim">On-Demand Video
                        Production Company</h2>
                     <div class="section-text about-text">
                        <p>Shemaq Production Is A Full—Service Production
                           House Based
                           Out
                           Of Indonesia
                           And Singapore That Hosts A Thriving Roster Of Directors Working Across A Range Of
                           Artistic
                           Disciplines.</p>
                     </div>
                  </div>
               </div>
               <div class="about-thumb-wrapper">
                  <div class="about-exp">
                     <h4 class="about-exp-num">10</h4>
                     <p class="about-exp-text">years of <br>
                        experience</p>
                  </div>
                  <div class="row">

                     <div class="col-12">
                        <div class="about-thumb">
                           <img src="{{asset('theme/assets/img/bg/about-bg.jpg')}}" alt="img not found" data-speed="auto">

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about-area-end -->

      <!-- featured-area-start -->
      <section class="featured-area pt-145 pb-165 featured-full-width p-relative">
         <div class="featured-bg" data-background="assets/img/bg/featured-bg.png')}}">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-12">


                  <div class="fm-featured-wrapper">

                     <div class="featured-sec-wrapper">
                        <div class="section-title">
                           <span class="section-subtitle featured-sub-title title-anim">Featured
                              PRODUCTION</span>
                           <h2 class="section-main-title featured-sec-title title-anim">The featured
                              production we
                              created proudly</h2>
                        </div>
                     </div>

                     <div class="btn-featured-wrapper">
                        <div class="featured-btn-circle-wrap btn_wrapper">
                           <a href="movie-details.html" class="featured-rotate-btn btn__item-move">
                              <span>
                                 <i class="flaticon-right-arrow-1"></i>
                              </span>
                           </a>
                           <img class="image-text" src="{{asset('theme/assets/img/bg/btn-bg.png')}}" alt="img not found">
                        </div>
                     </div>

                  </div>


               </div>
            </div>
         </div>
         <div class="container">
            <div class="featured-wrapper featured-slider-wrapper">
               <div class="swiper-container featured-active slider-drag">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="fm-single-featured">
                           <div class="fm-featured-thumb">
                              <a href="movie.html"> <img src="{{asset('theme/assets/img/new-slider/img-1.png')}}" alt="img not found"></a>
                           </div>
                           <div class="fm-featured-content">
                              <div class="fm-featured-content-inner">
                                 <a href="portfolio-details.html">
                                    <h4 class="fm-featured-title">Action Movie</h4>
                                 </a>
                                 <span class="fm-featured-meta">Release Date: 25 June 2022</span>
                              </div>
                              <div class="fm-video-play">
                                 <a class="fm-featured-video-wrapper popup-video"
                                    href="https://assets.mixkit.co/videos/preview/mixkit-mercenary-looking-for-zombies-in-an-abandoned-building-41783-large.mp4"><i
                                       class="fas fa-play"></i><span class="fm-featured-video-btn">Play
                                       Trailer</span></a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="fm-single-featured">
                           <div class="fm-featured-thumb">
                              <a href="movie.html"> <img src="{{asset('theme/assets/img/new-slider/img-2.png')}}" alt="img not found"></a>
                           </div>
                           <div class="fm-featured-content">
                              <div class="fm-featured-content-inner">
                                 <a href="portfolio-details.html">
                                    <h4 class="fm-featured-title">Comedy Movie</h4>
                                 </a>
                                 <span class="fm-featured-meta">Release Date: 30 Jan 2021</span>
                              </div>
                              <div class="fm-video-play">
                                 <a class="fm-featured-video-wrapper popup-video"
                                    href="https://assets.mixkit.co/videos/preview/mixkit-mime-in-front-of-the-eiffel-tower-4772-large.mp4"><i
                                       class="fas fa-play"></i><span class="fm-featured-video-btn">Play
                                       Trailer</span></a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="fm-single-featured">
                           <div class="fm-featured-thumb">
                              <a href="movie.html"> <img src="{{asset('theme/assets/img/new-slider/img-3.png')}}" alt="img not found"></a>
                           </div>
                           <div class="fm-featured-content">
                              <div class="fm-featured-content-inner">
                                 <a href="portfolio-details.html">
                                    <h4 class="fm-featured-title">Thriller Movie</h4>
                                 </a>
                                 <span class="fm-featured-meta">Release Date: 25 FEb 2023</span>
                              </div>
                              <div class="fm-video-play">
                                 <a class="fm-featured-video-wrapper  popup-video"
                                    href="https://assets.mixkit.co/videos/preview/mixkit-running-scared-down-a-hospital-hall-at-night-41764-large.mp4"><i
                                       class="fas fa-play"></i><span class="fm-featured-video-btn">Play
                                       Trailer</span></a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="fm-single-featured">
                           <div class="fm-featured-thumb">
                              <a href="movie.html"> <img src="{{asset('theme/assets/img/new-slider/img-4.png')}}" alt="img not found"></a>
                           </div>
                           <div class="fm-featured-content">
                              <div class="fm-featured-content-inner">
                                 <a href="portfolio-details.html">
                                    <h4 class="fm-featured-title">Action Movie</h4>
                                 </a>
                                 <span class="fm-featured-meta">Release Date: 01 May 2022</span>
                              </div>
                              <div class="fm-video-play">
                                 <a class="fm-featured-video-wrapper popup-video"
                                    href="https://assets.mixkit.co/videos/preview/mixkit-airplane-flying-in-a-red-cloudy-sky-7476-large.mp4"><i
                                       class="fas fa-play"></i><span class="fm-featured-video-btn ">Play
                                       Trailer</span></a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="fm-single-featured">
                           <div class="fm-featured-thumb">
                              <a href="movie.html"> <img src="{{asset('theme/assets/img/new-slider/img-5.png')}}" alt="img not found"></a>
                           </div>
                           <div class="fm-featured-content">
                              <div class="fm-featured-content-inner">
                                 <a href="portfolio-details.html">
                                    <h4 class="fm-featured-title">Superhero Movie</h4>
                                 </a>
                                 <span class="fm-featured-meta">Release Date: 10 Dec 2020</span>
                              </div>
                              <div class="fm-video-play">
                                 <a class="fm-featured-video-wrapper popup-video"
                                    href="https://assets.mixkit.co/videos/preview/mixkit-large-tarantula-spider-in-red-light-45639-large.mp4"><i
                                       class="fas fa-play"></i><span class="fm-featured-video-btn">Play
                                       Trailer</span></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="featured-slider-btn">
                  <div class="featured-slider-button-prev square-btn">
                     <i class="fal fa-angle-left"></i>
                  </div>
                  <div class="featured-slider-button-next square-btn">
                     <i class="fal fa-angle-right"></i>
                  </div>
               </div>
            </div>
         </div>
         <div class="featured-scroll-area">
            <div class="swiper text-scroll">
               <div class="swiper-wrapper featured-scroll-wrapper">
                  <div class="swiper-slide">
                     <div class="featured-scroll-line">
                        <h2 class="featured-scroll-line-heading">bolywood. Hollywood. tolywood</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- featured-area-end -->

      <!-- services-area-start -->
      <section class="fm-services-area pt-140 pb-120">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-6">
                  <div class="section-title text-center">
                     <span class="section-subtitle title-anim">WHAT WE DO</span>
                     <div>
                        <h2 class="section-main-title service-sec-title title-anim">Our BEST EXPERTISE</h2>
                     </div>
                  </div>
               </div>
            </div>
            <div class=" fade_animation">
               <div class="row">

                  <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                     <div class="fm-services-item img-hover p-relative mb-30 fade__anim-item">
                        <div class="services-thumb" data-background="assets/img/services/img-1.jpg')}}">
                        </div>
                        <div class="fm-services-icon mb-27">
                           <img src="{{asset('theme/assets/img/new-icon/img-1.png')}}" alt="img not found">
                        </div>
                        <div class="fm-services-content">
                           <h4 class="fm-services-title mb-10"><a href="services.html">Filming
                                 Service</a>
                           </h4>
                           <p class="fm-services-text">Playing field is rarely level when it is to making
                              decisions
                              people are amenable</p>
                           <div class="fm-btn services-btn">
                              <a href="service-details.html" class="fm-view-more">View More
                                 <span><i class="fa-regular fa-arrow-right"></i></span>
                              </a>

                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                     <div class="fm-services-item img-hover p-relative mb-30 fade__anim-item">
                        <div class="services-thumb" data-background="assets/img/services/img-2.jpg')}}">
                        </div>
                        <div class="fm-services-icon mb-27">
                           <img src="{{asset('theme/assets/img/new-icon/img-2.png')}}" alt="img not found">
                        </div>
                        <div class="fm-services-content">
                           <h4 class="fm-services-title mb-10"><a href="services.html">Animation</a>
                           </h4>
                           <p class="fm-services-text">This is why we need to take the chances we are given
                              and
                              run with
                              them</p>
                           <div class="fm-btn services-btn">
                              <a href="service-details.html" class="fm-view-more">View More
                                 <span><i class="fa-regular fa-arrow-right"></i></span>
                              </a>

                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 ">
                     <div class="fm-services-item img-hover p-relative mb-30 fade__anim-item">
                        <div class="services-thumb" data-background="assets/img/services/img-3.jpg')}}">
                        </div>
                        <div class="fm-services-icon mb-27">
                           <img src="{{asset('theme/assets/img/new-icon/img-3.png')}}" alt="img not found">
                        </div>
                        <div class="fm-services-content">
                           <h4 class="fm-services-title mb-10"><a href="services.html">BLOCK
                                 BUSTERS</a>
                           </h4>
                           <p class="fm-services-text">As well as this, most companies are not main
                              structured to
                              encourage</p>
                           <div class="fm-btn services-btn">
                              <a href="service-details.html" class="fm-view-more">View More
                                 <span><i class="fa-regular fa-arrow-right"></i></span>
                              </a>

                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 ">
                     <div class="fm-services-item img-hover p-relative mb-30 fade__anim-item">
                        <div class="services-thumb" data-background="assets/img/services/img-4.jpg')}}">
                        </div>
                        <div class="fm-services-icon mb-27">
                           <img src="{{asset('theme/assets/img/new-icon/img-4.png')}}" alt="img not found">
                        </div>
                        <div class="fm-services-content">
                           <h4 class="fm-services-title mb-10"><a href="services.html">Direction</a>
                           </h4>
                           <p class="fm-services-text">We actually can be benchmarked differently for
                              different
                              positions.</p>
                           <div class="fm-btn services-btn">
                              <a href="service-details.html" class="fm-view-more">View More
                                 <span><i class="fa-regular fa-arrow-right"></i></span>
                              </a>

                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                     <div class="fm-services-item img-hover p-relative mb-30 fade__anim-item">
                        <div class="services-thumb" data-background="assets/img/services/img-5.jpg')}}">
                        </div>
                        <div class="fm-services-icon mb-27">
                           <img src="{{asset('theme/assets/img/new-icon/img-5.png')}}" alt="img not found">
                        </div>
                        <div class="fm-services-content">
                           <h4 class="fm-services-title mb-10"><a href="services.html">FILM
                                 PRODUCTION
                              </a></h4>
                           <p class="fm-services-text">Cinema career will actually benefit a lot more from
                              being a
                              team
                              player.</p>
                           <div class="fm-btn services-btn">
                              <a href="service-details.html" class="fm-view-more">View More
                                 <span><i class="fa-regular fa-arrow-right"></i></span>
                              </a>

                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 ">
                     <div class="fm-services-item img-hover p-relative mb-30 fade__anim-item">
                        <div class="services-thumb" data-background="assets/img/services/img-6.jpg')}}">
                        </div>
                        <div class="fm-services-icon mb-27">
                           <img src="{{asset('theme/assets/img/new-icon/img-6.png')}}" alt="img not found">
                        </div>
                        <div class="fm-services-content">
                           <h4 class="fm-services-title mb-10"><a href="services.html">Motion
                                 Graphic </a>
                           </h4>
                           <p class="fm-services-text">If you’d like to plan out a more equitable and
                              democratic
                              approach.</p>
                           <div class="fm-btn services-btn">
                              <a href="service-details.html" class="fm-view-more">View More
                                 <span><i class="fa-regular fa-arrow-right"></i></span>
                              </a>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- services-area-end -->

      <!-- video-area-start -->
      <div class="video-area fm-video-style">
         <div class="fm-video-wrapper">
            <video loop="" muted="" autoplay="" playsinline="">
               <source src="{{asset('theme/assets/video/video-1.mp4')}}" type="video/mp4">
            </video>
         </div>
      </div>
      <!-- video-area-end -->

      <!-- team-area-start -->
      <section class="team-area pb-150 pt-140">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="team-sec-wrapper">
                     <div class="section-title">
                        <span class="section-subtitle featured-sub-title title-anim">awesome team</span>
                        <h2 class="section-main-title team-sec-title title-anim">Creative team</h2>
                     </div>
                     <div class=" team-btn fade_bottom">
                        <a class="team-details-btn" href="team-details.html">View All
                           <span><i class=" fa-regular fa-arrow-right"></i></span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="fm-team-border">
               <div class="fm-team-wrapper">
                  <div class="fm-team-item p-relative">
                     <div class="fm-team-thumb w-img">
                        <a href="team-details.html">
                           <img src="{{asset('theme/assets/img/team/img-1.jpg')}}" alt="img not found">
                        </a>
                     </div>
                     <div class="fm-team-content">
                        <h4 class="fm-team-title "><a href="team-details.html">CRISTINA ANGEL</a></h4>
                        <span class="fm-team-designation ">VEDIO EDITOR</span>
                     </div>
                  </div>
                  <div class="fm-team-item p-relative active">
                     <div class="fm-team-thumb w-img">
                        <a href="team-details.html">
                           <img src="{{asset('theme/assets/img/team/img-2.jpg')}}" alt="img not found">
                        </a>
                     </div>
                     <div class="fm-team-content">
                        <h4 class="fm-team-title "><a href="team-details.html">IRA BANANA</a></h4>
                        <span class="fm-team-designation">DIRECTOR</span>
                     </div>
                  </div>
                  <div class="fm-team-item p-relative">
                     <div class="fm-team-thumb w-img">
                        <a href="team-details.html">
                           <img src="{{asset('theme/assets/img/team/img-3.jpg')}}" alt="img not found">
                        </a>
                     </div>
                     <div class="fm-team-content">
                        <h4 class="fm-team-title "><a href="team-details.html">ANDRES MAN</a></h4>
                        <span class="fm-team-designation ">CAMERAMAN</span>
                     </div>
                  </div>
                  <div class="fm-team-item p-relative">
                     <div class="fm-team-thumb w-img">
                        <a href="team-details.html">
                           <img src="{{asset('theme/assets/img/team/img-4.jpg')}}" alt="img not found">
                        </a>
                     </div>
                     <div class="fm-team-content">
                        <h4 class="fm-team-title "><a href="team-details.html">CHARLEY BOXES
                           </a></h4>
                        <span class="fm-team-designation ">VOICE MAKOVER</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- team-area-end -->

      <!-- testimonial-area-start -->
      <section class="testimonial-area pt-140 pb-150 p-relative">
         <div class="testimonial-bg" data-background="assets/img/bg/testimonial.png')}}">
         </div>
         <div class="container">
            <div class="row">
               <div class="testimonial-sec-wrapper">

                  <div class="section-title testimonial-pos">
                     <span class="section-subtitle featured-sub-title  title-anim">SATISFIED CLIENTS</span>
                     <h2 class="section-main-title featured-sec-title  title-anim">customers feedback</h2>
                  </div>

                  <div class="testimonial-pagination circle-dot-pagination fade_bottom_2"></div>


               </div>
            </div>
            <div class="fm-testimonial-slide-wrapper">
               <div class="testimonial-active swiper-container slider-drag">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="fm-testimonial-content">
                           <div class="fm-testimonial-quote-icon">
                              <span><svg id="quote_2_" data-name="quote (2)" xmlns="http://www.w3.org/2000/svg"
                                    width="66.569" height="47.769" viewBox="0 0 66.569 47.769">
                                    <path id="Path_8645" data-name="Path 8645"
                                       d="M27.018,0H1.95A1.95,1.95,0,0,0,0,1.95V27.018a1.95,1.95,0,0,0,1.95,1.95H12.534V45.819a1.95,1.95,0,0,0,1.95,1.95h6.267a1.95,1.95,0,0,0,1.85-1.334l6.267-18.8a1.946,1.946,0,0,0,.1-.617V1.95A1.95,1.95,0,0,0,27.018,0Zm-1.95,26.7L19.345,43.868H16.434V27.018a1.95,1.95,0,0,0-1.95-1.95H3.9V3.9H25.068Zm0,0"
                                       fill="#171717" />
                                    <path id="Path_8646" data-name="Path 8646"
                                       d="M316.217,0H291.149a1.95,1.95,0,0,0-1.95,1.95V27.018a1.95,1.95,0,0,0,1.95,1.95h10.584V45.819a1.95,1.95,0,0,0,1.95,1.95h6.267a1.951,1.951,0,0,0,1.85-1.334l6.267-18.8a1.959,1.959,0,0,0,.1-.617V1.95A1.95,1.95,0,0,0,316.217,0Zm-1.95,26.7-5.722,17.166h-2.911V27.018a1.95,1.95,0,0,0-1.95-1.95H293.1V3.9h21.167Zm0,0"
                                       transform="translate(-251.598)" fill="#171717" />
                                 </svg>
                              </span>
                           </div>
                           <div class="fm-testimonial-text">
                              <p>I Have Worked With Shemaq The Past Couple Of Years And Have Purchased 10+
                                 Videos.
                                 My
                                 Company Is All Across The US And Working With Shemaq Was Easy.</p>
                           </div>
                           <div class="fm-testimonial-bottom-content">
                              <div class="fm-testimonial-author">
                                 <span>
                                    Adam quel
                                 </span>
                              </div>
                              <div class="fm-testimonial-brand-thumb">
                                 <img src="{{asset('theme/assets/img/brand/testi-brand.png')}}" alt="img not found">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="fm-testimonial-content">
                           <div class="fm-testimonial-quote-icon">
                              <span><svg id="quote_3_" data-name="quote (3)" xmlns="http://www.w3.org/2000/svg"
                                    width="66.569" height="47.769" viewBox="0 0 66.569 47.769">
                                    <path id="Path_28645" data-name="Path 28645"
                                       d="M27.018,0H1.95A1.95,1.95,0,0,0,0,1.95V27.018a1.95,1.95,0,0,0,1.95,1.95H12.534V45.819a1.95,1.95,0,0,0,1.95,1.95h6.267a1.95,1.95,0,0,0,1.85-1.334l6.267-18.8a1.946,1.946,0,0,0,.1-.617V1.95A1.95,1.95,0,0,0,27.018,0Zm-1.95,26.7L19.345,43.868H16.434V27.018a1.95,1.95,0,0,0-1.95-1.95H3.9V3.9H25.068Zm0,0"
                                       fill="#171717" />
                                    <path id="Path_28646" data-name="Path 28646"
                                       d="M316.217,0H291.149a1.95,1.95,0,0,0-1.95,1.95V27.018a1.95,1.95,0,0,0,1.95,1.95h10.584V45.819a1.95,1.95,0,0,0,1.95,1.95h6.267a1.951,1.951,0,0,0,1.85-1.334l6.267-18.8a1.959,1.959,0,0,0,.1-.617V1.95A1.95,1.95,0,0,0,316.217,0Zm-1.95,26.7-5.722,17.166h-2.911V27.018a1.95,1.95,0,0,0-1.95-1.95H293.1V3.9h21.167Zm0,0"
                                       transform="translate(-251.598)" fill="#171717" />
                                 </svg>
                              </span>
                           </div>
                           <div class="fm-testimonial-text">
                              <p>I Have Worked With Shemaq The Past Couple Of Years And Have Purchased 10+
                                 Videos.
                                 My
                                 Company Is All Across The US And Working With Shemaq Was Easy.</p>
                           </div>
                           <div class="fm-testimonial-bottom-content">
                              <div class="fm-testimonial-author">
                                 <span>
                                    Ander son
                                 </span>
                              </div>
                              <div class="fm-testimonial-brand-thumb">
                                 <img src="{{asset('theme/assets/img/brand/testi-brand.png')}}" alt="image not found">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="fm-testimonial-content">
                           <div class="fm-testimonial-quote-icon">
                              <span><svg id="quote_4_" data-name="quote (4)" xmlns="http://www.w3.org/2000/svg"
                                    width="66.569" height="47.769" viewBox="0 0 66.569 47.769">
                                    <path id="Path_18645" data-name="Path 18645"
                                       d="M27.018,0H1.95A1.95,1.95,0,0,0,0,1.95V27.018a1.95,1.95,0,0,0,1.95,1.95H12.534V45.819a1.95,1.95,0,0,0,1.95,1.95h6.267a1.95,1.95,0,0,0,1.85-1.334l6.267-18.8a1.946,1.946,0,0,0,.1-.617V1.95A1.95,1.95,0,0,0,27.018,0Zm-1.95,26.7L19.345,43.868H16.434V27.018a1.95,1.95,0,0,0-1.95-1.95H3.9V3.9H25.068Zm0,0"
                                       fill="#171717" />
                                    <path id="Path_18646" data-name="Path 18646"
                                       d="M316.217,0H291.149a1.95,1.95,0,0,0-1.95,1.95V27.018a1.95,1.95,0,0,0,1.95,1.95h10.584V45.819a1.95,1.95,0,0,0,1.95,1.95h6.267a1.951,1.951,0,0,0,1.85-1.334l6.267-18.8a1.959,1.959,0,0,0,.1-.617V1.95A1.95,1.95,0,0,0,316.217,0Zm-1.95,26.7-5.722,17.166h-2.911V27.018a1.95,1.95,0,0,0-1.95-1.95H293.1V3.9h21.167Zm0,0"
                                       transform="translate(-251.598)" fill="#171717" />
                                 </svg>
                              </span>
                           </div>
                           <div class="fm-testimonial-text">
                              <p>I Have Worked With Shemaq The Past Couple Of Years And Have Purchased 10+
                                 Videos.
                                 My
                                 Company Is All Across The US And Working With Shemaq Was Easy.</p>
                           </div>
                           <div class="fm-testimonial-bottom-content">
                              <div class="fm-testimonial-author">
                                 <span>
                                    Rowan san
                                 </span>
                              </div>
                              <div class="fm-testimonial-brand-thumb">
                                 <img src="{{asset('theme/assets/img/brand/testi-brand.png')}}" alt="img not found">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- testimonial-area-end -->

      <!-- blog-area-start -->
      <section class="blog-area pt-140 pb-150 black-bg">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="blog-sec-wrapper">
                     <div class="section-title">
                        <span class="section-subtitle featured-sub-title title-anim">LATEST NEWS FROM
                           Shemaq</span>
                        <h2 class="section-main-title blog-sec-title title-anim">Shemaq latest BLOG</h2>
                     </div>
                     <div class=" blog-btn fade_bottom_3">
                        <a class="blog-details-btn" href="blog-details.html">View All <span>
                              <i class=" fa-regular fa-arrow-right"></i>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="fm-blog-wrapper">


                  <div class="fm-blog-inner blog__animation-wrapper ">

                     <div class="fm-blog-thumb mb-40">
                        <a href="blog-details.html"> <img src="{{asset('theme/assets/img/portfolio/blog-1.png')}}" alt="img not found"></a>
                     </div>

                     <div class="fm-blog-content blog__content ">
                        <div class="fm-blog-content-text">
                           <div class="fm-blog-meta">
                              <span>3 Mar 2023</span>
                           </div>
                           <h4 class="fm-blog-title">
                              <a href="blog.html">Anne Rice's Mayfair Witches' An
                                 Only
                                 Somewhat Spellbinding Gothic</a>
                           </h4>
                           <div class="fm-blog-text">
                              <p class="">it was clear the network had its sights set on resurrecting more
                                 stories of a
                                 paranormal
                                 variety
                                 for the small-screen market. The epic rights package consisted of 18
                                 novels,</p>
                           </div>
                        </div>
                     </div>

                     <div class="fm-featured-btn btn_wrapper ">
                        <a href="blog-details.html" class="blog-rotate-btn btn__item-move">
                           <span>
                              <i class="flaticon-right-arrow-1"></i>
                           </span>
                        </a>
                     </div>

                  </div>


                  <div class="fm-blog-inner blog__animation-wrapper">

                     <div class="fm-blog-thumb mb-40">
                        <a href="blog-details.html"> <img src="{{asset('theme/assets/img/portfolio/blog-2.png')}}" alt="img not found"></a>
                     </div>

                     <div class="fm-blog-content blog__content">
                        <div class="fm-blog-content-text">
                           <div class="fm-blog-meta">
                              <span>3 Mar 2023</span>
                           </div>
                           <h4 class="fm-blog-title">
                              <a href="blog.html">Rowan can tolerate the undeserved
                                 criticism
                                 and dismissive attitude she</a>
                           </h4>
                           <div class="fm-blog-text">
                              <p>it was clear the network had its sights set on resurrecting more
                                 stories of a
                                 paranormal
                                 variety
                                 for the small-screen market. The epic rights package consisted of 18
                                 novels,</p>
                           </div>
                        </div>
                     </div>
                     <div class="fm-featured-btn btn_wrapper">
                        <a href="blog-details.html" class="blog-rotate-btn btn__item-move">
                           <span>
                              <i class="flaticon-right-arrow-1"></i>
                           </span>
                        </a>
                     </div>
                  </div>


                  <div class="fm-blog-inner blog__animation-wrapper">

                     <div class="fm-blog-thumb">
                        <a href="blog-details.html"> <img src="{{asset('theme/assets/img/portfolio/blog-3.png')}}" alt="img not found"></a>
                     </div>

                     <div class="fm-blog-content blog__content">
                        <div class="fm-blog-content-text">
                           <div class="fm-blog-meta">
                              <span>3 Mar 2023</span>
                           </div>
                           <h4 class="fm-blog-title">
                              <a href="blog.html">Mayfair Witches, a somewhat more linear
                                 story
                                 in nature, quickly Reach</a>
                           </h4>
                           <div class="fm-blog-text">
                              <p class="">it was clear the network had its sights set on resurrecting more
                                 stories of a
                                 paranormal
                                 variety
                                 for the small-screen market. The epic rights package consisted of 18
                                 novels,</p>
                           </div>
                        </div>
                     </div>
                     <div class="fm-featured-btn btn_wrapper">
                        <a href="blog-details.html" class="blog-rotate-btn btn__item-move">
                           <span>
                              <i class="flaticon-right-arrow-1"></i>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- blog-area-end -->

      <!-- brand-area-start -->
      <div class="brand-area  pt-150 pb-150">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="brand-active slider-drag ">
                     <div class="fm-brand">
                        <img src="{{asset('theme/assets/img/brand/img-1.png')}}" alt="img not found">
                     </div>
                     <div class="fm-brand">
                        <img src="{{asset('theme/assets/img/brand/img-2.png')}}" alt="img not found">
                     </div>
                     <div class="fm-brand">
                        <img src="{{asset('theme/assets/img/brand/img-3.png')}}" alt="img not found">
                     </div>
                     <div class="fm-brand">
                        <img src="{{asset('theme/assets/img/brand/img-4.png')}}" alt="img not found">
                     </div>
                     <div class="fm-brand">
                        <img src="{{asset('theme/assets/img/brand/img-5.png')}}" alt="img not found">
                     </div>
                     <div class="fm-brand">
                        <img src="{{asset('theme/assets/img/brand/img-3.png')}}" alt="img not found">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- brand-area-end -->

   </main>

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
