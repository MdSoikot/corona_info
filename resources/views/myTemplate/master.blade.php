
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @include('myTemplate.allCss')

</head>

<body>
    <div id="app">
       <!--sidebar-->
       @include('myTemplate.sidebar')
       <!--sidebar-->

        <div id="main">
        <!--navbar-->
       @include('myTemplate.navbar')

       <!--navbar-->

        <!--main-content-->
       @yield('content')
       <!--main-content-->

     
        <!--footer-->
       @include('myTemplate.footer')

       <!--footer-->
        </div>
    </div>
    <!--script-->
    @include('myTemplate.script')

    <!--script-->
</body>

</html>