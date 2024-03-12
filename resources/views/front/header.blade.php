<header id="header-sticky" class="fm-header-area  header-spc transparent-header">
    <div class="container">
       <div class="row align-items-center justify-content-lg-between">
          <div class="header-wrapper">
             <div class="fm-header-logo-wrapper">
                <a href="{{url('/')}}" class="fm-header-logo">
                   <img src="{{asset('theme/assets/img/logo/logo.png')}}" alt="img not found">
                </a>
                <a href="#0" class="fm-header-bar-1">
                   <span class="fm-header-bar-line fm-header-bar-line-1"></span>
                   <span class="fm-header-bar-line fm-header-bar-line-2"></span>
                   <span class="fm-header-bar-line fm-header-bar-line-3"></span>
                </a>
             </div>
             <div class="header-menu-spc d-none d-xl-block">
                <div class="fm-header-nav">

                   <nav id="mobile-menu">
                      <ul>
                         <li class="active">
                            <a href="{{url('/')}}">Home</a>

                         </li>

                         <li class="active">
                            <a href="{{url('/')}}/the-company">The Company</a>

                         </li>

                         <li class="has-dropdown"><a href="#">Shows</a>
                            <ul class="submenu">
                               <li><a onclick="return alert('Coming Soon')" href="#">HelaCab</a></li>
                               {{-- <li><a href="#">Banger</a></li> --}}
                            </ul>
                         </li>

                         <li class="has-dropdown"><a href="#">Sectors</a>
                            <?php
                               $Sectors = DB::table('sectors')->get();
                            ?>
                            <ul class="submenu">
                                @foreach ($Sectors as $sector)
                                <li><a href="{{url('/')}}/sectors/{{$sector->slung}}">{{$sector->title}}</a></li>
                                @endforeach
                            </ul>
                         </li>

                         <li class="has-dropdown"><a href="#">Expertise</a>
                            <?php
                               $Expertises = DB::table('expertises')->get();
                            ?>
                            <ul class="submenu">
                                @foreach ($Expertises as $expertises)
                                <li><a href="{{url('/')}}/expertises/{{$expertises->slung}}">{{$expertises->title}}</a></li>
                                @endforeach
                            </ul>
                         </li>


                         <li><a href="{{url('/')}}/contact-us">Contact Us</a>

                         </li>
                      </ul>
                   </nav>

                </div>
             </div>
             <div class="fm-header-right d-none d-xl-block">
                <a target="new" href="https://forms.gle/G1pLcJidyfL4aeJD6" class="hero-btn">Audition Here
                   <span>
                      <i class="fa-regular fa-arrow-right"></i>
                   </span>
                </a>
             </div>
          </div>

       </div>
    </div>
 </header>
