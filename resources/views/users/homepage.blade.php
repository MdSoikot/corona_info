@extends('users.user_template.master')
@section('title', 'Corona-info')



@section('content')

    <div class="hero_area">
        <!-- header section strats -->
        @include('users.user_template.navbar')

        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ url('user_homepage') }}">
                        <span>
                            Corona-info
                        </span>
                    </a>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="s-1"> </span>
                        <span class="s-2"> </span>
                        <span class="s-3"> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('user_homepage') }}">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('about') }}"> About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('service') }}"> Service </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('contact') }}">Contact </a>
                                </li>
                                @if (Auth::check())
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle" href="#" href="#" id="navbarDropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">{{Auth::user()->name }}</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"  >
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModalLong">Profile</a>

                                            <a href="{{ route('front_end_logout') }}" class="dropdown-item"
                                                onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                                Sign Out
                                            </a>
                                            <form id="frm-logout" action="{{ route('front_end_logout') }}" method="POST"
                                                style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('join_us') }}">Join Us</a>

                                    </li>

                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- Button trigger modal -->
            

                <!-- Modal -->
                @if (Auth::check())

                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">My Profile</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Name : <span>{{Auth::user()->name}} </span></p>
                                <p>Email : <span>{{Auth::user()->email}}</span></p>
                                <p>Mobile : <span>{{Auth::user()->mobile}}</span></p>


                            </div>
                        
                        </div>
                    </div>
                </div>
                @endif

            </div>
        </header>
        <!-- end header section -->

        <!-- slider section -->
        <section class="slider_section">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    {{-- <div class="carousel-item active">
                        <img src="https://bangladesh.gov.bd/sites/default/files/files/bangladesh.gov.bd/top_banner/6c2564bf_8887_486e_bd58_d328c80735f4/corona_banner.jpeg"
                            class="d-block w-100" alt="...">
                    </div> --}}
                    {{-- <div class="carousel-item active">
                        <img src="https://static.vecteezy.com/system/resources/previews/000/834/838/original/coronavirus-cov-infographics-poster-vector.jpg"
                            class="d-block w-100" alt="...">

                    </div> --}}
                    <div class="carousel-item active">
                        <img src="https://dcmsme.gov.in/Awareness_corona/covid-19-banner.jpg" class="d-block w-100"
                            alt="...">

                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        {{-- <div class="corona_update">

            <div class="row">
                <div class="col-md-3 live" style="border-top-right-radius: 22px;
                                                                    border-bottom-right-radius: 23px;">
                    <p>Live Corona Update</p>
                </div>
                <div class="col-md-9" style="background-color: aliceblue;">
                    <marquee direction="left">
                        <a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, ducimus nesciunt dolor
                            ratione, natus similique, repellat provident deserunt saepe illum vero repellendus quas delectus
                            illo sequi ipsum. Voluptatem, dolorem iusto.</a>
                        <a href="">This is sample scrolling text.</a>
                    </marquee>
                </div>
            </div>


        </div> --}}
        <!-- end slider section -->
    </div>

    <!-- service section -->
    <section class="latest_status_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Latest Status In Bangladesh
                </h2>
            </div>

            <div class="latest_status">
                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-md-3">
                        <div class="card case_affect">

                            <div class="new_affected">
                                <h2>New Affected</h2>
                            </div>
                            <div class="report">
                                <div class="hour">
                                    <P style="font-size: 20px">24 Hour</P>
                                    <P>1000</P>

                                </div>
                                <div class="total">
                                    <P style="font-size: 20px">Total</P>
                                    <P>50000</P>

                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="card case_affect death" style="background: #3531cd;">

                            <div class="new_affected">
                                <h2>New Death</h2>
                            </div>
                            <div class="report">
                                <div class="hour">
                                    <P style="font-size: 20px">24 Hour</P>
                                    <P>1000</P>

                                </div>
                                <div class="total">
                                    <P style="font-size: 20px">Total</P>
                                    <P>50000</P>

                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="card case_affect" style="background-color: #4a0c80">

                            <div class="new_affected">
                                <h2>Cure</h2>
                            </div>

                            <div class="report">
                                <div class="hour">
                                    <P style="font-size: 20px">24 Hour</P>
                                    <P>1000</P>

                                </div>
                                <div class="total">
                                    <P style="font-size: 20px">Total</P>
                                    <P>50000</P>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="card case_affect" style="background-color: #078691">

                            <div class="new_affected">
                                <h2>Test</h2>
                            </div>
                            <div class="report">
                                <div class="hour">
                                    <P style="font-size: 20px">24 Hour</P>
                                    <P>1000</P>

                                </div>
                                <div class="total">
                                    <P style="font-size: 20px">Total</P>
                                    <P>50000</P>

                                </div>
                            </div>

                        </div>

                    </div>



                </div>

            </div>
    </section>
    <!-- end service section -->


    <!-- portfolio section -->

    <section class="portfolio_section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Important Video
                </h2>
                <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority
                </p>
            </div>

            <div class="layout_padding2-top">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="img-box">
                            <img src="https://img.youtube.com/vi/KIsek2Cc7V8/0.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=KIsek2Cc7V8&feature=youtu.be">
                                <img src="https://img.youtube.com/vi/KIsek2Cc7V8/0.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="img-box">
                            <img src="https://img.youtube.com/vi/KIsek2Cc7V8/0.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=KIsek2Cc7V8&feature=youtu.be">
                                <img src="https://img.youtube.com/vi/KIsek2Cc7V8/0.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="img-box">
                            <img src="https://img.youtube.com/vi/KIsek2Cc7V8/0.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=KIsek2Cc7V8&feature=youtu.be">
                                <img src="https://img.youtube.com/vi/KIsek2Cc7V8/0.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="img-box">
                            <img src="https://img.youtube.com/vi/KIsek2Cc7V8/0.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=KIsek2Cc7V8&feature=youtu.be">
                                <img src="https://img.youtube.com/vi/KIsek2Cc7V8/0.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="img-box">
                            <img src="https://img.youtube.com/vi/KIsek2Cc7V8/0.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=KIsek2Cc7V8&feature=youtu.be">
                                <img src="https://img.youtube.com/vi/KIsek2Cc7V8/0.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="img-box">
                            <img src="https://img.youtube.com/vi/KIsek2Cc7V8/0.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=KIsek2Cc7V8&feature=youtu.be">
                                <img src="https://img.youtube.com/vi/KIsek2Cc7V8/0.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="{{ url('important_video') }}">
                    View More
                </a>
            </div>
        </div>
    </section>

    <!-- end portfolio section -->

    <!-- service section -->
    <section class="service_section inforamtion_services layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Information and Services
                </h2>
            </div>

            <div class="service_container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="">
                            <div class="box telemedicine">
                                <div class="img-box">
                                    <img src="{{ asset('user_template_assets/images/telemedicine.png') }}" class="img1"
                                        alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Telemedicine
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, animi vel provident
                                        aperiam itaque ab,
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="">

                            <div class="box mobile_apps">
                                <div class="img-box">
                                    <img src="{{ asset('user_template_assets/images/mobile_apps.png') }}" class="img1"
                                        alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Mobile Apps
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, animi vel provident
                                        aperiam itaque ab,
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="">
                            <div class="box digital">
                                <div class="img-box">
                                    <img src="{{ asset('user_template_assets/images/digital.png') }}" class="img1" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Digital Transactions
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, animi vel provident
                                        aperiam itaque ab,
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="">
                            <div class="box online_shopping">
                                <div class="img-box">
                                    <img src="{{ asset('user_template_assets/images/online_shopping.png') }}" class="img1"
                                        alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Online Shopping
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, animi vel provident
                                        aperiam itaque ab,
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <a href="">
                            <div class="box ambulance">
                                <div class="img-box">
                                    <i class="fa fa-ambulance"></i>
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Ambulance
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, animi vel provident
                                        aperiam itaque ab,
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="">
                            <div class="box telemedicine">
                                <div class="img-box">
                                    <img src="{{ asset('user_template_assets/images/website.png') }}" class="img1" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Website and Portal
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, animi vel provident
                                        aperiam itaque ab,
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="">
                            <div class="box telemedicine">
                                <div class="img-box">
                                    <img src="{{ asset('user_template_assets/images/expatriate.png') }}" class="img1"
                                        alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Expatriate
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, animi vel provident
                                        aperiam itaque ab,
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="">
                            <div class="box telemedicine">
                                <div class="img-box">
                                    <img src="{{ asset('user_template_assets/images/corona_testing.png') }}" class="img1"
                                        alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Corona Testing
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, animi vel provident
                                        aperiam itaque ab,
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- end service section -->

    <!-- about section -->
    {{-- <section class="about_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/about-img.png" alt="" />
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Us
                            </h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- end about section -->

    <!-- contact section -->



@endsection
