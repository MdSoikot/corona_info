@extends('users.user_template.master')
@section('title', 'Join-Us')



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
                                <li class="nav-item">
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
                                <li class="nav-item active">
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

        <div class="register mb-5">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                    <h3>Welcome</h3>
                    <p>You are 30 seconds away from earning your own money!</p>
                    {{-- <input type="submit" name="" value="Login" /><br />
                    --}}
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Log In</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9 register-right">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show " id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Register</h3>
                            <div class="row register-form">

                                <div class="col-md-12">
                                    <form method="POST" action={{ route('register') }}>
                                        @csrf
                                        <div class="form-group" style="display: none">
                                            <label for="country-floating">Select Role</label>

                                            <select class="form-select" id="role" name="role">
                                                <option value="user">User</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Type your name*" value="" name="name" required />
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Type your email *" value="" name="email" required />
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Password *" value="" name="password" required />
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *"
                                                value="" name="password_confirmation" required />
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Type your mobile no"
                                                value="" name="mobile" />

                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3 class="register-heading">Log In</h3>
                            <div class="row register-form">

                                <div class="col-md-12">
                                    <form method="POST" action={{ route('login') }}>
                                        @csrf
                                        <div class="form-group" style="display: none">
                                            <label for="country-floating">Select Role</label>

                                            <select class="form-select" id="role" name="role">
                                                <option value="user">User</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Type your email *"
                                                value="" name="email" />
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value=""
                                                name="password" />
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Sign In</button>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>





@endsection
