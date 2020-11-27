<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @include('users.user_template.allCss')

</head>

<body>
   

    <!--main-content-->
    @yield('content')
    <!--main-content-->


    <!--footer-->
    @include('users.user_template.footer')

    <!--footer-->

    <!--script-->
    @include('myTemplate.script')

    <!--script-->
</body>

</html>
