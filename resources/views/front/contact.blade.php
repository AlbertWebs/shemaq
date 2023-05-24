@extends('front.master')

@section('content')
<main>

    <!-- breadcrumb-area-start -->
    <div class="fm-breadcrumb-area " data-background="{{asset('theme/assets/img/bg/pexels-spemone-639090.jpg')}}">
       <div class="container">
          <div class="row justify-content-center">
             <div class="col-12">
                <div class="page-title-wrapper">
                   <h1 class="page-title p-text">contact us</h1>
                </div>
                <div class="breadcrumb-menu">
                   <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                      <ul class="trail-items">
                         <li class="trail-item trail-begin p-text">
                            <a href="index.html"><span>home</span></a>
                         </li>
                         <li class="trail-item trail-end p-text"><span>contact us</span></li>
                      </ul>
                   </nav>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- fm-contact-area-start -->
    <div class="fm-contact-area pt-150 pb-110">
       <div class="container">
          <div class="row justify-content-center">
             <div class="col-xl-10">
                <div class="fm-contact-content-wrapper ">
                   <div class="row">
                      <div class="col-xl-4 col-lg-4">
                         <div class="fm-contact-info-wrapper fade__two-item-left">

                            <div class="fm-contact-info-single mb-40">
                               <span class="fm-contact-info-icon"><i class="fa-thin fa-phone"></i></span>
                               <div class="fm-contact-info-text">
                                  <h5 class="fm-contact-info-text-label">Phone</h5>
                                  <p><span>Inquiry : </span><a href="tel:+88487-365-254">+254 704 440854</a></p>
                                  <p><span>Mobile : </span><a href="fax:5879-6985">+1 202 540 0134</a></p>
                               </div>
                            </div>

                            <div class="fm-contact-info-single mb-40">
                               <span class="fm-contact-info-icon"><i class="fa-thin fa-envelope-open-text"></i></span>
                               <div class="fm-contact-info-text">
                                  <h5 class="fm-contact-info-text-label">Email</h5>
                                  <p><a href="mailto:info@shemaq.co.ke"><span class="__cf_email__" data-cfemail="ccaaada5a1a98ca9b4ada1bca0a9e2afa3a1">info@shemaq.co.ke</span></a></p>
                                  <p><a href="mailto:hello@shemaq.co.ke"><span class="__cf_email__" data-cfemail="791a180b1c1c0b391c01181409151c571f14">hello@shemaq.co.ke</span></a></p>
                               </div>
                            </div>

                            <div class="fm-contact-info-single  mb-40">
                               <span class="fm-contact-info-icon"><i class="fa-thin fa-map-location-dot"></i></span>
                               <div class="fm-contact-info-text">
                                  <h5 class="fm-contact-info-text-label">Location</h5>
                                  <p>Malik Heights 4thFlr - 406, Ngong Rd<br><br>
                                    P.O. Box 21627- 00100 Nairobi, Kenya</p>
                               </div>
                            </div>

                         </div>
                      </div>
                      <div class="col-xl-8 col-lg-8">
                         <div class="fm-contact-info-form fade__two-item-left  mb-40 ml-50">
                            <form action="#">
                               <div class="row">
                                  <div class="col-xl-6 col-lg-6">
                                     <input type="text" placeholder="Name">
                                  </div>
                                  <div class="col-xl-6 col-lg-6">
                                     <input type="email" placeholder="Email">
                                  </div>

                               </div>
                               <input type="text" placeholder="Subject">
                               <textarea name="fmmessage" id="fmmessage"
                                  placeholder="Type your message..."></textarea>
                               <button type="submit">Send Message</button>
                            </form>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- fm-contact-area-end -->

    <!-- fm-contact-map-area-start -->
    <div class="fm-contact-map-area pb-150">
       <div class="container">
          <div class="row justify-content-center">
             <div class="col-xl-10">
                <div class="fm-contact-map-wrapper bdFadeBottom">
                   <iframe
                      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.168613544265!2d36.7827816!3d-1.2995093!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11fb35c348e7%3A0xdfee283a57b3021f!2sVenshaq%20Holdings%20Limited!5e0!3m2!1sen!2ske!4v1684776763526!5m2!1sen!2ske"></iframe>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- fm-contact-map-area-end -->

   @include('front.contact-section')

 </main>
@endsection
