@extends('users.user_template.master')
@section('title', 'Contact')



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
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('about') }}"> About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('service') }}"> Service </a>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('contact') }}">Contact </a>
                                </li>
                                @if (Auth::check())
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle" href="#" href="#" id="navbarDropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">{{ Auth::user()->name }}</a>
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
                    <div class="carousel-item active">
                        <img src="https://image.freepik.com/free-psd/coronavirus-prevention-banner-design-template_169869-231.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://image.freepik.com/free-psd/virus-prevention-banner-template-with-protect-yourself-against-covid-19-concept_169869-228.jpg"
                            class="d-block w-100" alt="...">

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

        <!-- end slider section -->
    </div>

 



@endsection
