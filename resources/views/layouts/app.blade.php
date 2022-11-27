<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fav Icon -->
    <link rel="icon" href={{ asset("front/images/favicon.ico") }} type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href={{ asset("front/css/font-awesome-all.css") }} rel="stylesheet">
    <link href={{ asset("front/css/flaticon.css") }} rel="stylesheet">
    <link href={{ asset("front/css/owl.css") }} rel="stylesheet">
    <link href={{ asset("front/css/bootstrap.css") }} rel="stylesheet">
    <link href={{ asset("front/css/jquery.fancybox.min.css") }} rel="stylesheet">
    <link href={{ asset("front/css/animate.css") }} rel="stylesheet">
    <link href={{ asset("front/css/color.css") }} rel="stylesheet">
    <link href={{ asset("front/css/style.css") }} rel="stylesheet">
    <link href={{ asset("front/css/responsive.css") }} rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <!-- jequery plugins -->
    <script src={{ asset("front/js/jquery.js")}} ></script>
    <script src={{ asset("front/js/popper.min.js")}} ></script>
    <script src={{ asset("front/js/bootstrap.min.js")}} ></script>
    <script src={{ asset("front/js/owl.js")}} ></script>
    <script src={{ asset("front/js/wow.js")}} ></script>
    <script src={{ asset("front/js/validation.js")}} ></script>
    <script src={{ asset("front/js/jquery.fancybox.js")}} ></script>
    <script src={{ asset("front/js/appear.js")}} ></script>
    <script src={{ asset("front/js/isotope.js")}} ></script>
    <script src={{ asset("front/js/jquery.nice-select.min.js")}} ></script>

    <!-- main-js -->
    <script src={{ asset("front/js/script.js")}} ></script>


</body>
</html>
