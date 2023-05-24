@extends('front.master')

@section('content')

    <!-- breadcrumb-area-start -->
    <div class="fm-breadcrumb-area " data-background="{{asset('theme/assets/img/bg/pexels-spemone-639090.jpg')}}">
        <div class="container">
           <div class="row justify-content-center">
              <div class="col-12">
                 <div class="page-title-wrapper">
                    <h1 class="page-title p-text">The Company</h1>
                 </div>
                 <div class="breadcrumb-menu">
                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                       <ul class="trail-items">
                          <li class="trail-item trail-begin p-text">
                             <a href="index.html"><span>home</span></a>
                          </li>
                          <li class="trail-item trail-end p-text"><span>The Company</span></li>
                       </ul>
                    </nav>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- breadcrumb-area-end -->
  <!-- about-area-start -->
  <section class="about-area pt-140 pb-150">
    <div class="container">
       <div class="row">
          <div class="col-xl-5 col-lg-12">
            <div class="fm-director-about-img mb-50">
                <img style="border-radius:10px" src="{{asset('theme/assets/img/bg/pexels-bruno-massao-2873486.jpg')}}" alt="img not found">
                <div class="fm-director-years">
                   {{-- <span class="fm-director-years-number">30</span> --}}
                   <span class="fm-director-years-content">
                      {{-- <span class="fm-director-plus">+</span> --}}
                      <span class="fm-director-years-text">Irresistible<strong>∙</strong><br>Magnetic<strong>∙</strong><br>Authentic<strong>∙</strong></span>
                   </span>
                </div>
             </div>
          </div>
          <div class="col-xl-7 col-lg-12">
             <div class="section-title">
                <h2 class="section-main-title about-main-title title-anim" style="color:#ef5424">Who We Are</h2>
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

                <div class="section-text about-text title-anim">
                    <p>
                        It doesn’t matter how great the idea is;
                        <span style="color:#ef5424; font-weight:800">execution</span> is always best. We connect the
                        best talent on and off-screen, <span style="color:#ef5424; font-weight:800">cultivating</span>
                        <span style="color:#ef5424; font-weight:800">creative spaces</span> and partnerships with
                        creatives across genres, locations and
                        cultures.
                    </p>
                </div>

                <div class="section-text about-text title-anim">
                    <p>
                        Over time we endeavour to provide exceptional services of
                        the finest quality across our portfolio of services by creating
                        magnetic, award-winning content.
                        <br>
                        We like to hear your views and reactions to our work,
                        welcoming your honest and productive feedback that’s
                        instrumental to our continued success.
                    </p>
                </div>


             </div>
          </div>
          <center>
            <h2 class="title-anim">
                We believe in the
                <span style="color:#ef5424; font-weight:800">power of film to
                change lives,</span> and
                we want to use that
                power to help you tell
                your story.
            </h2>
          </center>
       </div>
    </div>
 </section>
 <!-- about-area-end -->


 <!-- Core Values-->
 <div class="fm-director-service-area soft-blackbg">
    <div class="fm-director-service-bg" data-background="{{asset('theme/assets/img/services/pexels-orlando-allo-8770518.jpg')}}">
    </div>
    <div class="container">
       <div class="fm-director-service-wrapper">
          <div class="row">
             <div class="col-xl-7 col-lg-12">
                <div class="row">
                   <div class="col-12">
                      <div class="fm-director-service-title">
                         <span class="fm-about-subtitle title-anim">Our Values</span>
                         <h4 class="fm-about-title title-anim mb-55">What makes us
                            different? Staying true
                            athe most to us.
                         </h4>

                         <p class="title-anim" style="color:#ffffff; text-transform:capitalize">
                            Regardless of their location, our teams
                            are governed by a set of core values that
                            influence our approach to every facet of our
                            creative output – as well as our commitment
                            to elevating the communities we operate
                            within
                         </p>
                         <br>
                      </div>
                   </div>
                </div>
                <div class="row">

                   <div class="col-xl-6 col-sm-6">
                      <div class="fm-director-service-single fade_bottom">
                         <h4 class="fm-director-service-title">
                            <a href="#" style="color:#ef5424; font-weight:800">Creativity</a>
                         </h4>
                         <p>The most potent motivator is curiosity. We
                            value curiosity because it opens our minds
                            to unique perspectives, sparks creativity and
                            gets results. We have an unending desire to
                            always learn and improve ourselves so we are
                            more efficient, proactive and not reactive.
                        </p>
                      </div>
                   </div>

                   <div class="col-xl-6 col-sm-6">
                    <div class="fm-director-service-single fade_bottom">
                       <h4 class="fm-director-service-title">
                          <a href="#" style="color:#ef5424; font-weight:800">Curiosity</a>
                       </h4>
                       <p>We believe that we can always find a new
                          creative approach to problem-solving in any
                          role, at any stage of a project. Our team is
                          comprised of creatives who bring out-of-the-
                          box perspectives to each project we engage in.
                      </p>
                    </div>
                 </div>


                 <div class="col-xl-6 col-sm-6">
                    <div class="fm-director-service-single fade_bottom">
                       <h4 class="fm-director-service-title">
                          <a href="#" style="color:#ef5424; font-weight:800">Collaboration</a>
                       </h4>
                       <p>To us, collaboration means ‘listening and
                        evolving together, helping and supporting
                        each other for the sake of a collective goal;
                        reciprocity.’
                      </p>
                    </div>
                 </div>

                 <div class="col-xl-6 col-sm-6">
                    <div class="fm-director-service-single fade_bottom">
                       <h4 class="fm-director-service-title">
                          <a href="#" style="color:#ef5424; font-weight:800">Authenticity</a>
                       </h4>
                       <p>Staying authentic means
                        sticking to our true north. We
                        remain congruent between
                        what we say, what we do,
                        how we think, how we feel and
                        what we mean
                      </p>
                    </div>
                 </div>

                 <div class="col-xl-12 col-sm-6">
                    <div class="fm-director-service-single fade_bottom">
                       <h4 class="fm-director-service-title">
                          <a href="#" style="color:#ef5424; font-weight:800">Ambition</a>
                       </h4>
                       <p>We are proudly ambitious.
                        We’re ambitious about our
                        goal-setting and continuously
                        strive to improve. We constantly
                        seek novel opportunities
                        to grow our craft, pushing
                        and setting boundaries with
                        productions that stand out
                        and tell unique stories across a
                        range of sectors.
                      </p>
                    </div>
                 </div>





                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- Core Values- -->


  <!-- history area start -->
  <div class="history-area pb-120 blog-bg">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
             <div class="single-history mb-30">

                <div class="section-title sec-sub-style mb-60">
                   <span class="section-subtitle featured-sub-title title-anim sec-sub">How We Do It</span>
                   <h2 class="section-main-title about-sec-title-2  title-anim">Rules to live by
                      <span> History</span>
                   </h2>
                </div>

                <ul class="history-link">
                   <li>
                      <div class="history-2-icon">
                         <i class="far fa-mug-hot"></i>
                         <div class="history-tag">
                            <i class="far fa-check"></i>
                         </div>
                      </div>
                      <div class="history-content">
                         <h3 style="color:#ef5424; font-weight:800">Our Mission</h3>
                         <p>
                            ShemaQ Production’s foundation is built on the
                            idea that everyone has a story to be shared,
                            and our goal is to provide a positive atmosphere
                            and media platform for our people and partners
                            to thrive. We are dedicated to creating content
                            that means something to our viewers, striving
                            to reach not only local audiences, but as far as
                            each message can be heard.
                         </p>
                      </div>
                   </li>
                   <li>
                      <div class="history-2-icon">
                         <i class="fa-solid fa-stars"></i>
                         <div class="history-tag">
                            <i class="far fa-check"></i>
                         </div>
                      </div>
                      <div class="history-content">
                         <h3 style="color:#ef5424; font-weight:800">Our Approach</h3>
                         <p>
                            As creative storytellers, we believe in giving
                            all people a voice. We take a human-centred
                            approach to every project, upholding a culture of
                            collaboration internally and with our partners. We
                            are committed to the continual development of a
                            learning culture within ShemaQ so that we grow as
                            a company and also grow as individuals.
                         </p>
                      </div>
                   </li>

                </ul>
                <div class="history-btn fade_bottom_2">
                   <a href="{{url('/')}}/#expertise" class="hero-btn landing-border-clr hero-btn-clr">Our Expertise
                      <span>
                         <i class="fa-regular fa-arrow-right"></i>
                      </span>
                   </a>
                </div>
             </div>
          </div>

          <div class="col-xl-6 col-lg-6 ">
             <div class="fm-history-thumb-wrapper">
                <div class="history-thumb-1">
                   <img src="{{asset('theme/assets/img/bg/pexels-pixabay-274937.jpg')}}" alt="">

                </div>
                <div class="history-thumb-2">
                   <img src="{{asset('theme/assets/img/bg/pexels-kyle-loftus-3379934.jpg')}}" alt="">
                </div>
                <div class="history-thumb-3">
                   <img src="{{asset('theme/assets/img/history/img-3.jpg')}}" alt="">
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

 <!-- history area end -->


 @include('front.contact-section')

@endsection
