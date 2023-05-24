@extends('front.master')

@section('content')

<main>

    <!-- fm-hero-area-start -->
    <div class="fm-hero-area black-bg hero-style hero-spc">
       <div class="hero-bg-thumb ">
          <img src="{{asset('theme/assets/img/bg/featured-bg.png')}}" alt="img not found">
       </div>
       <div class="hero-shape-wrapper">
          <img class="hero-shape shape-1 d-none d-sm-block d-lg-none d-xl-block d-md-none d-lg-block"
             src="{{asset('theme/assets/img/bg/btn-bg.png')}}" alt="award shape">
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
                         <div class="fm-hero-video-btn">HelaCab<br>
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
                         <span class="spc-text title-right">
                            Productions
                        </span>
                      </h1>
                   </div>
                </div>

             </div>
             <div class="col-xl-4 col-lg-4 ">
                <div class="fm-hero-thumb d-none d-sm-block hero__right-6">
                   <img src="{{asset('theme/assets/img/portfolio/MV5BMTAzOTc3ODE1ODZeQTJeQWpwZ15BbWU3MDU1NjY3ODc_._V1_FMjpg_UX1000_-removebg-preview.png')}}" alt="img not found">
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
                   <h3 class="about-subtitles title-anim" style="color:#ef5424">Who We Are.</h3>
                </div>
             </div>
             <div class="col-xl-7 col-lg-12">
                <div class="section-title">
                   <h2 class="section-main-title about-main-title title-anim">On-Demand Video
                      Production Company</h2>
                   <div class="section-text about-text title-anim">
                      <p>
                            At ShemaQ Productions, we champion the extraordinary and are
                            proud of the creative excellence we represent. Our unparalleled
                            creativity and authentic storytelling are focused on creating,
                            producing and distributing captivating and highly engaging digital
                            content, with a strong focus on family entertainment excellence,
                            reality game-show production and other branded content.
                      </p>
                   </div>
                    {{--  --}}
                    <div class="history-btn fade_bottom_2" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                        <a href="{{url('/')}}/the-company" class="hero-btn landing-border-clr hero-btn-clr">Explore
                        <span>
                            <i class="fa-regular fa-arrow-right"></i>
                        </span>
                        </a>
                    </div>
                   {{--  --}}

                </div>
                <br>
             </div>
             <div class="about-thumb-wrapper">
                <div class="about-exp title-anim" style="max-width:350px; border-radius:10px">
                   <h4 class="about-exp-num">"</h4>
                   <p class="about-exp-text" style="max-width:350px">
                        It doesn’t matter how great the idea is;
                        execution is always best. We connect the
                        best talent on and off-screen, cultivating
                        creative spaces and partnerships with
                        creatives across genres, locations and
                        cultures.
                   </p>
                </div>
                <div class="row">

                   <div class="col-12">
                      <div class="about-thumb">
                         <img style="border-radius:10px" src="{{asset('theme/assets/img/bg/pexels-bruno-massao-2865263.jpg')}}" alt="img not found" data-speed="auto">

                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- about-area-end -->

    <section class="about-area fm-about-style" >
        <div class="fm-about-bg-thumb" data-background="{{asset('theme/assets/img/bg/about-bg-2.png')}}" style="background-image: url('{{asset('theme/assets/img/bg/about-bg-2.png')}});">
        </div>
        <div class="container">
           <div class="row">
              <div class="fm-about-pos">
                 <div class="col-xl-7 col-lg-9">
                    <div class="fm-about-wrapper">
                       <div class="section-title">
                          <span class="section-subtitle featured-sub-title title-anim" style="perspective: 400px;"><div style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 57.8672px 11.1953px; transform: translate3d(0px, 0px, 0px); opacity: 1;">Home of Irresistible Family Entertainment</div></span>
                          <h2 class="section-main-title about-sec-title title-anim" style="perspective: 400px;"><div style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 381.25px 30px; transform: translate3d(0px, 0px, 0px); opacity: 1;"> We believe in the power of film to change lives, </div><div style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 381.25px 30px; transform: translate3d(0px, 0px, 0px); opacity: 1;"> and we want to use that power to help you tell your story. </div></h2>
                          <h4 class=" about-text-2 about-clr-2 title-anim">
                            Over time we endeavour to provide exceptional services of
                            the finest quality across our portfolio of services by creating
                            magnetic, award-winning content.
                            <br><br>
                            We like to hear your views and reactions to our work,
                            welcoming your honest and productive feedback that’s
                            instrumental to our continued success.
                          </h4>
                       </div>
                       <div class="fm-about-btn-2 btn_wrapper" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                          <a href="#" class="blog-rotate-btn about-icon-clr btn__item-move">
                             <span>
                                <i class="flaticon-right-arrow-1"></i>
                             </span>
                          </a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>

     </section>

    <!-- featured-area-start -->
    <section class="featured-area pt-145 pb-165 featured-full-width p-relative">
       <div class="featured-bg" data-background="{{asset('theme/assets/img/bg/featured-bg.png')}}">
       </div>
       <div class="container">
          <div class="row">
             <div class="col-12">


                <div class="fm-featured-wrapper">

                   <div class="featured-sec-wrapper">
                      <div class="section-title">
                         <span class="section-subtitle featured-sub-title title-anim">Irresistible. Magnetic. Authentic</span>
                         <h2 class="section-main-title featured-sec-title title-anim">
                            Impactful video content
                            for Broadcasting,
                            Corporate, Education,
                            Healthcare and more
                         </h2>
                         <br>
                         <p class="title-anim" style="color:#ffffff">
                            ShemaQ Productions serves clients from a wide range
                            of sectors, creating shows that captivate audiences
                            everywhere. From film and television to corporate and the
                            public sector, we are adept at creating video content for
                            various purposes, such as television shows, documentaries,
                            marketing campaigns, and educational videos that are both
                            engaging and captivating.
                         </p>
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
        {{--  --}}
        <div class="row ">
            <div class="col-xl-4 col-lg-12">
               <div class="services-sec-wrapper">
                  <div class="section-title">
                     <span class="section-subtitle title-anim" style="perspective: 400px;"><div style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 57.5391px 11.1953px; transform: translate3d(0px, 0px, 0px); opacity: 1;">Our ethos
                        is simple;
                        to Create
                        Responsibly</div></span>
                     <h2 class="section-main-title service-sec-title-2 services-clr title-anim" style="perspective: 400px;"><div style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 210px 30px; transform: translate3d(0px, 0px, 0px); opacity: 1;">Our Sectors  </div><div style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 210px 30px; transform: translate3d(0px, 0px, 0px); opacity: 1;"> Here </div></h2>
                  </div>


                  <div class="fm-services-btn btn_wrapper" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                     <a href="{{url('/')}}/sectors" class="blog-rotate-btn about-icon-clr btn-item btn__item-move">
                        <span>
                           <i class="flaticon-right-arrow-1"></i>
                        </span>
                     </a>
                  </div>


               </div>
            </div>

            <div class="col-xl-8 col-lg-12">
               <div class="fm-services-content-2 fade_bottom" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">

                <?php $Sector = DB::table('sectors')->limit('3')->get() ?>
                  @foreach($Sector as $sector)
                  <div class="fm-single-services-content   mb-20">
                     <span class="services-num">0{{$sector->id}}</span>



                     <h4 class="fm-service-title">
                        <a class="fm-content-title service__title" href="{{url('/')}}/sectors/{{$sector->slung}}"> {{$sector->title}} </a>
                     </h4>




                     <p class="fm-services-text-2 ">
                        {!!html_entity_decode($sector->meta)!!}
                     </p>



                     <div class="fm-btn services-btn-2 ">
                        <a href="{{url('/')}}/sectors/{{$sector->slung}}" class="fm-view-more explore-now">
                            View More
                           <span><i class="fa-regular fa-arrow-right"></i></span>
                        </a>
                     </div>
                  </div>
                  @endforeach

               </div>
            </div>

         </div>
        {{--  --}}
       </div>
    </section>
    <!-- featured-area-end -->

    <!-- services-area-start -->
    <section class="fm-services-area pt-140 pb-120" id="expertise">
       <div class="container">
          <div class="row justify-content-center">
             <div class="col-xl-6">
                <div class="section-title text-center">
                   <span class="section-subtitle title-anim">Home of Irresistible Family Entertainment</span>
                   <div>
                      <h2 class="section-main-title service-sec-title title-anim">Our BEST EXPERTISE</h2>
                   </div>
                </div>
             </div>
          </div>
          <div class=" fade_animation">
             <div class="row">

                <?php $Expertises = DB::table('expertises')->limit('3')->get() ?>
                @foreach($Expertises as $expertises)
                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                   <div class="fm-services-item img-hover p-relative mb-30 fade__anim-item">
                      <div class="services-thumb" data-background="{{asset('theme/assets/img/services/img-6.jpg')}}">
                      </div>
                      <div class="fm-services-icon mb-27">
                         <img src="{{asset('theme/assets/img/new-icon/')}}/{{$expertises->icon}}" alt="img not found">
                      </div>
                      <div class="fm-services-content">
                         <h4 class="fm-services-title mb-10"><a href="{{url('/')}}/expertises/{{$expertises->slung}}">{{$expertises->title}}</a>
                         </h4>
                         <p class="fm-services-text">
                            {!!html_entity_decode($expertises->meta)!!}
                         </p>
                         <div class="fm-btn services-btn">
                            <a href="{{url('/')}}/expertises/{{$expertises->slung}}" class="fm-view-more">View More
                               <span><i class="fa-regular fa-arrow-right"></i></span>
                            </a>

                         </div>
                      </div>
                   </div>
                </div>
                @endforeach
             </div>
          </div>
       </div>
    </section>
    <!-- services-area-end -->

     <!-- services-area-start -->


    <!-- video-area-start -->
    {{-- <div class="video-area fm-video-style">
       <div class="fm-video-wrapper">
          <video loop="" muted="" autoplay="" playsinline="">
             <source src="{{asset('theme/assets/video/video-1.mp4')}}" type="video/mp4">
          </video>
       </div>
    </div> --}}
    <!-- video-area-end -->


    <!-- brand-area-start -->
    {{-- <div class="brand-area  pt-150 pb-150">
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
    </div> --}}
    <!-- brand-area-end -->
    @include('front.contact-section')
 </main>

@endsection
