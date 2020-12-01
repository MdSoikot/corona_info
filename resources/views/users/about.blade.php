@extends('users.user_template.master')
@section('title', 'About')



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
                              <li class="nav-item ">
                                  <a class="nav-link" href="{{ url('user_homepage') }}">Home <span
                                          class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item active">
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

     
    </div>

 <!-- about section -->
 <section class="about_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src={{asset('user_template_assets/images/about-img.png')}} alt="" />
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
  </section>

  <!-- end about section -->
 



@endsection
