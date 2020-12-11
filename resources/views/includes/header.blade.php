<!-- Header -->
<div class="header-area">
  <div class="container">
      <div class="row">

          <div class="col-sm-9 col-lg-8">
              <div class="left">
                <ul>
                  <li>
                    <i class='bx bx-mail-send'></i>
                    <a href="mailto:hello@inva.com">hello@inva.com</a>
                  </li>
                  <li>
                    <i class='bx bx-phone-call'></i>
                    <a href="tel:+99084211703">+990-8421-1703</a>
                  </li>
                  <li>
                    <i class='bx bx-time'></i>
                    <span>Mon - Sat: 8:00 AM - 7:00 PM</span>
                  </li>
                </ul>
              </div>
          </div>

          <div class="col-sm-3 col-lg-4">
              <div class="right">
                  <ul>
                      <li>
                          <a href="#" target="_blank">
                              <i class='bx bxl-facebook'></i>
                          </a>
                      </li>
                      <li>
                          <a href="#" target="_blank">
                              <i class='bx bxl-twitter'></i>
                          </a>
                      </li>
                      <li>
                          <a href="#" target="_blank">
                              <i class='bx bxl-youtube'></i>
                          </a>
                      </li>
                      <li>
                          <a href="#" target="_blank">
                              <i class='bx bxl-instagram'></i>
                          </a>
                      </li>
                      <li>
                          <a href="#" target="_blank">
                              <i class='bx bxl-twitter'></i>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>

      </div>
  </div>
</div>
<!-- End Header -->

<!-- Navbar -->
<div class="navbar-area sticky-top">
  <!-- Menu For Mobile Device -->
  <div class="mobile-nav">
      <a href="index.html" class="logo">
          {{-- <img src="assets/img/logo-two.png" alt="Logo"> --}}
          Corona-info
      </a>
  </div>

  <!-- Menu For Desktop Device -->
  <div class="main-nav">
      <div class="container">
          <nav class="navbar navbar-expand-md navbar-light">
              <a class="navbar-brand" href="{{ url('/') }}" style="color: #000">
                Corona-info

              </a>
              <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                        <a  href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a  href="{{ url('about') }}" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('services') }}" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('news') }}" class="nav-link">News</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="{{ url('contact') }}" class="nav-link">Contact</a>
                    </li>
                   
                  </ul>

                  <div class="side-nav">
                      {{-- <div class="nav-search">
                          <i id="search-btn" class="bx bx-search-alt"></i>
                          <div id="search-overlay" class="block">
                              <div class="centered">
                                  <div id="search-box">
                                      <i id="close-btn" class="bx bx-x"></i>
                                      <form>
                                          <input type="text" class="form-control" placeholder="Search..."/>
                                          <button type="submit" class="btn">Search</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div> --}}
                      <div class="dropdown nav-flag-dropdown">
                        @if (Auth::check())

                          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{Auth::user()->name}}
                              <i class='bx bx-chevron-down'></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{url('user/profile')}}">
                                My Profile
                            </a>
                            <a class="dropdown-item" href="{{ route('front_end_logout') }}"  onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                Sign Out
                            </a>   
                            
                            
                        </a>
                        <form id="frm-logout" action="{{ route('front_end_logout') }}" method="POST"
                            style="display: none;">
                            {{ csrf_field() }}
                        </form>
                            @else
                            <a class="dropdown-item" href="{{ url('user_login') }}">
                                Join Us
                            </a> 

                            
                            @endif

                        </div>

                     
                        
                      </div>
                  </div>

              </div>
          </nav>
      </div>
  </div>
</div>


<!-- End Navbar -->