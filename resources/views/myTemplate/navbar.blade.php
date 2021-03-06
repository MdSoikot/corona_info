<nav class="navbar navbar-header navbar-expand navbar-light">
    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
    <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
            <li class="dropdown nav-icon mr-2">

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i data-feather="user"></i> Profile</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <div class="avatar mr-1">
                        <img src="{{ asset('template_assets/assets/images/avatar/avatar-s-1.png') }}" alt="" srcset="">

                    </div>
                    {{-- <div class="d-none d-md-block d-lg-inline-block">
                        {{ Auth::user()->name }}</div> --}}
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModalLong"><i
                            data-feather="user"></i> Profile</a>
                    <div class="dropdown-divider"></div>

                    <a href="{{ route('logout') }}" class="dropdown-item"
                        onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        Logout
                    </a>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>


                 
                </div>
            </li>
        </ul>
    </div>
</nav>

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
            <p>Name : <span>{{ Auth::user()->name }} </span></p>
            <p>Email : <span>{{ Auth::user()->email }}</span></p>
            <p>Role : <span>{{ Auth::user()->role }}</span></p>


        </div>

    </div>
</div>
</div>
