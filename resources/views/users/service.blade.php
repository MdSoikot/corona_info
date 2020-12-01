@extends('users.user_template.master')
@section('title', 'Service')



@section('content')

    <div class="hero_area">
        <!-- header section strats -->
        @include('users.user_template.navbar')
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{url('user_homepage')}}">
                        <span>
                            Corona-info
                        </span>
                    </a>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="s-1"> </span>
                        <span class="s-2"> </span>
                        <span class="s-3"> </span>
                    </button>
        
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav ">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('user_homepage') }}">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('about') }}"> About</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('service') }}"> Service </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('contact') }}">Contact </a>
                                </li>
                                @if (Auth::check())
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle" href="#" href="#" id="navbarDropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">{{ Auth::user()->name }}</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" data-toggle="modal" data-target="#exampleModalLong">
                                            <a class="dropdown-item" href="#">Profile</a>

                                            <a href="{{ route('logout') }}" class="dropdown-item"
                                                onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                                Sign Out
                                            </a>
                                            <form id="frm-logout" action="{{ route('logout') }}" method="POST"
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
    </div>

 



@endsection
