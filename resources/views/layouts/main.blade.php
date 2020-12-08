<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from templates.hibootstrap.com/inva/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Dec 2020 07:50:41 GMT -->
  <head>
    @include('includes.style')

    <title>@yield('title')</title>

    @yield('header-style')

    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
  </head>
    <body>
        <!-- Preloader -->
        <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="pre-load">
                        <div class="inner one"></div>
                        <div class="inner two"></div>
                        <div class="inner three"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        @include('includes.header')

        @yield('content')

        

        <!-- Go Top -->
        <div class="go-top">
            <i class="bx bxs-up-arrow-alt"></i>
            <i class="bx bxs-up-arrow-alt"></i>
        </div>
        <!-- End Go Top -->

        @include('includes.footer')

        <!-- Essential JS -->
        @include('includes.script')

        @yield('footer-script')
    </body>

<!-- Mirrored from templates.hibootstrap.com/inva/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Dec 2020 07:50:59 GMT -->
</html>