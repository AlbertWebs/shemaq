@extends('front.master')

@section('content')
@foreach ($Expertises as $sector)
    <main>
        <!-- breadcrumb-area-start -->
        <div class="fm-breadcrumb-area breadcrumb-style" data-background="{{asset('theme/assets/img/bg/breadcrumb-bg.png')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">

                    <div class="page-title-wrapper bdFadeUp">
                    <h1 class="page-title">{{$sector->title}}</h1>
                    </div>
                    <div class="breadcrumb-menu bdFadeUp">
                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items">
                            <li class="trail-item trail-begin ">
                                <a href="{{url('/')}}"><span>home</span></a>
                            </li>
                            <li class="trail-item trail-end "><span>{{$sector->title}}</span></li>
                        </ul>
                    </nav>
                    </div>

                </div>
            </div>
        </div>
        </div>
        <!-- breadcrumb-area-end -->


        <!-- case details area start -->
        <section class="case-details-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="case-meta-wrapper">
                    <div class="case-meta-item fade_bottom">
                        <P><strong>Company : </strong>Shemaq Productions Limited</P>
                    </div>

                    <div class="case-meta-item fade_bottom">
                        <P><strong>Industry : </strong>Filmmaking, Production Companies</P>
                    </div>
                    <div class="case-meta-item fade_bottom">
                        <P><strong>Service : </strong> {{$sector->title}} </P>
                    </div>
                    </div>
                    <div class="case-details-thumb">
                    <img src="{{url('/')}}/uploads/images/{{$sector->image}}" data-speed="auto" alt="">
                    </div>
                    <h4 class="case-subtitle mb-25  p-text"><span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3.23197 8L0 9.90086L2.38215 14.0991L5.616 12.2016L5.61782 16H10.3822L10.384 12.2016L13.6178 14.0991L16 9.90086L12.768 8L16 6.09914L13.6178 1.90086L10.384 3.79843L10.3822 0H5.61782L5.616 3.79843L2.38215 1.90086L0 6.09914L3.23197 8Z"
                                fill="#BCA045" />
                        </svg>
                    </span>Objective
                    </h4>
                    <p class="mb-55 bdFadeUp">
                        {!!html_entity_decode($sector->meta)!!}
                    </p>
                    <p class="mb-45 bdFadeUp">{!!html_entity_decode($sector->content)!!}</p>


                </div>
            </div>
        </div>


        </section>
        <!-- case details area end -->


    </main>
 @endforeach

@endsection
