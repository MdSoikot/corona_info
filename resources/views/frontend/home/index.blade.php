@extends('layouts.main')

@section('header-style')
  <style>
    .projects-item {
      height: 230px;
    }
    .projects-item img{
      height: 100%;
    }
  </style>
@endsection

@section('content')
  <!-- Banner -->
  <div class="banner-area">
    <div class="banner-slider owl-theme owl-carousel">

        <div class="overlay-banner">
            <div class="banner-item banner-bg-one">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="banner-content">
                                <h1>Most Trusted Company For Your Business</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy when an unknown printer</p>
                                <a class="common-btn" href="#">
                                    Let's Start Now
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay-banner">
            <div class="banner-item banner-bg-two">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="banner-content">
                                <h1>Your Success Is Our Ultimate Duty</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy when an unknown printer</p>
                                <a class="common-btn" href="#">
                                    Let's Start Now
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay-banner">
            <div class="banner-item banner-bg-three">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="banner-content">
                                <h1>No.1 Investment Company With Experience</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy when an unknown printer</p>
                                <a class="common-btn" href="#">
                                    Let's Start Now
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- End Banner -->

<!-- Logo -->
<div class="logo-area">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-3">
                <div class="logo-text">
                    <h3>Company Who Trust Us</h3>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="logo-slider owl-theme owl-carousel">

                    <div class="logo-item">
                        <img src="{{asset('assets/img/logo/logo1.png')}}" alt="Logo">
                    </div>

                    <div class="logo-item">
                        <img src="{{asset('assets/img/logo/logo2.png')}}" alt="Logo">
                    </div>

                    <div class="logo-item">
                        <img src="{{asset('assets/img/logo/logo3.png')}}" alt="Logo">
                    </div>

                    <div class="logo-item">
                        <img src="{{asset('assets/img/logo/logo4.png')}}" alt="Logo">
                    </div>

                    <div class="logo-item">
                        <img src="{{asset('assets/img/logo/logo5.png')}}" alt="Logo">
                    </div>

                    <div class="logo-item">
                        <img src="{{asset('assets/img/logo/logo1.png')}}" alt="Logo">
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Logo -->

<!-- Counter -->
<div class="counter-area pt-100 pb-70">
  <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Latest Corona Update</h2>
        </div>

          <div class="col-sm-6 col-lg-3 card-overlay">
            <div class="counter-item">
              <h3>
                @if ($infected_update)
                  <span class="odometer" data-count="25">{{$infected_update->today}}</span>
                @else
                  <span class="odometer" data-count="25">00</span>
                @endif
              </h3>
              <p>New Affected</p>

              <h3>
                @if ($infected_update)
                  <span class="odometer" data-count="25">{{$infected_update->total}}</span>
                @else
                  <span class="odometer" data-count="25">00</span>
                @endif
              </h3>
              <p>Total</p>

            </div>
          </div>

          <div class="col-sm-6 col-lg-3 card-overlay">
            <div class="counter-item">
              <h3>
                @if ($death_update)
                  <span class="odometer" data-count="25">{{$death_update->today}}</span>
                @else
                  <span class="odometer" data-count="25">00</span>
                @endif
              </h3>
              <p>New Death</p>

              <h3>
                @if ($death_update)
                  <span class="odometer" data-count="25">{{$death_update->total}}</span>
                @else
                  <span class="odometer" data-count="25">00</span>
                @endif
              </h3>
              <p>Total</p>

            </div>
          </div>

          <div class="col-sm-6 col-lg-3 card-overlay">
            <div class="counter-item">
              <h3>
                @if ($cure_update)
                  <span class="odometer" data-count="25">{{$cure_update->today}}</span>
                @else
                  <span class="odometer" data-count="25">00</span>
                @endif
              </h3>
              <p>Cure</p>

              <h3>
                @if ($cure_update)
                  <span class="odometer" data-count="25">{{$cure_update->total}}</span>
                @else
                  <span class="odometer" data-count="25">00</span>
                @endif
              </h3>
              <p>Total</p>

            </div>
          </div>

          <div class="col-sm-6 col-lg-3 card-overlay">
            <div class="counter-item">
              <h3>
                @if ($test_update)
                  <span class="odometer" data-count="25">{{$test_update->today}}</span>
                @else
                  <span class="odometer" data-count="25">00</span>
                @endif
              </h3>
              <p>Test</p>

              <h3>
                @if ($test_update)
                  <span class="odometer" data-count="25">{{$test_update->total}}</span>
                @else
                  <span class="odometer" data-count="25">00</span>
                @endif
              </h3>
              <p>Total</p>

            </div>
          </div>

      </div>
  </div>
</div>
<!-- End Counter -->


<!-- Services -->
<section class="services-area pt-100 pb-70">
    <div class="container">

        <div class="section-title">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="sub-title">Our Services</span>
                    <h2>The <span>Services</span> That We Provide For Our Ultimate Clients</h2>
                </div>
                <div class="col-lg-6">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis libero facilis consequatur deleniti, ipsa provident? Culpa tenetur incidunt reprehenderit qui a voluptas perferendis officiis</p>
                </div>
            </div>
        </div>
        
        <div class="row">
          @foreach ($services as $service)
            <div class="col-sm-6 col-lg-4">
                <div class="services-item card-overlay @if($loop->index % 2 == 0) active @endif">
                    <i class="flaticon-marketing-strategy"></i>
                    <h3>
                        <a href="#">{{$service->service_name}}</a>
                    </h3>
                    <p>{{$service->title}}</p>
                    <a class="services-btn" href="#">Read More</a>
                </div>
            </div>
          @endforeach
            

        </div>

    </div>
</section>
<!-- End Services -->


<!-- Projects -->
<section class="projects-area section-overlay pt-100 pb-70">
    <div class="container">

        <div class="section-title">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="sub-title">Videos</span>
                    <h2>Some Of Our <span>Videos</span> Where We Achive Great Success</h2>
                </div>
                <div class="col-lg-6">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis libero facilis consequatur deleniti, ipsa provident? Culpa tenetur incidunt reprehenderit qui a voluptas perferendis officiis</p>
                </div>
            </div>
        </div>

        <div class="row">
          @foreach ($video_Data as $video)
            <div class="col-sm-6 col-lg-4">
              <div class="projects-item card-overlay">
                <img src=" {{asset($video->video_thumbnail)}} " alt="Projects">
                <div class="inner">
                  <h3>
                    <a href=" {{$video->video_link}} " target="_blank"> {{$video->video_details}} </a>
                  </h3>
                </div>
              </div>
            </div>
          @endforeach  
          

        </div>

    </div>
</section>
<!-- End Projects -->




@endsection