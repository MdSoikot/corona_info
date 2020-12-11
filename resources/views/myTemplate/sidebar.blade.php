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
                    <a href="{{url("/admin/homepage")}}" class='sidebar-link'>
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
                    <a href="{{url("/admin/corona_update")}}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Corona Update</span>
                    </a>

                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Services</span>
                    </a>

                    <ul class="submenu ">

                        <li>
                            <a href="{{url("/admin/add_service")}}">Add Service</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/services')}}">Show Service</a>
                        </li>


                    </ul>

                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Videos</span>
                    </a>
                    <ul class="submenu ">

                        <li>
                            <a href="{{url("/admin/videos/create")}}">Add Video</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/videos')}}">Show Videos</a>
                        </li>


                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Information & Services</span>
                    </a>
                    <ul class="submenu ">

                        <li>
                            <a href="{{url("/admin/info/create")}}">Add Information & Services</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/info')}}">Show Information & Services</a>
                        </li>


                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="papper" width="20"></i>
                        <span>News</span>
                    </a>
                    <ul class="submenu ">

                        <li>
                            <a href="{{url("/admin/news/create")}}">Add News</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/news')}}">News List</a>
                        </li>

                    </ul>
                </li>










            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
