<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
        {{-- <img src="{{asset("template_assets/assets/images/logo.svg")}}" alt="" srcset=""> --}}
        <h2>Corona-info</h2>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">


                <li class='sidebar-title'>Main Menu</li>

                

                <li class="sidebar-item active ">
                    <a href="{{url("/homepage")}}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>

                </li>

                {{-- <li class="sidebar-item">
                <a href="{{url("/add_slider")}}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Add slider</span>
                    </a>

                </li> --}}

                <li class="sidebar-item  ">
                    <a href="{{url("/corona_update")}}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Corona Update</span>
                    </a>

                </li>

                <li class="sidebar-item">
                    <a href="{{url("/add_video")}}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Add Video</span>
                    </a>

                </li>

    



                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Services</span>
                    </a>

                    <ul class="submenu ">

                        <li>
                            <a href="{{url("/add_service")}}">Add Service</a>
                        </li>
                        <li>
                            <a href="{{url('services')}}">Show Service</a>
                        </li>


                    </ul>

                </li>










            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
