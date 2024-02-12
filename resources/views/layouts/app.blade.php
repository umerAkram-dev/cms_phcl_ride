<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PCHL</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/header/header/tittle_icon.png') }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ asset('rides_frontend/assets/styles/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d0a01f8990.js" crossorigin="anonymous"></script>
    <link href="https://db.onlinewebfonts.com/c/b30be3daa0818e355edb82922ed035b5?family=STHupo" rel="stylesheet">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        .hamburger_background {
            background-color: white;
            border-radius: 4px;
        }

        .navbar_bg::before,
        .navbar_bg::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .navbar_bg::before {
            background: url('{{ asset('header_bg.png') }}') center/cover no-repeat;
            z-index: -1;
            height: 41.7em;
        }

        .navbar_bg::after {
            background: url('{{ asset('frontend/ride/header/header_background_img.png') }}') center/cover no-repeat !important;
            z-index: -2;
            height: 41.5em;
        }

        .laptop-container {
            position: relative;
            width: 100%;
            /* Adjust the width as needed */
        }

        .laptop-image {
            position: relative;
            overflow: hidden;
        }

        .laptop-image img {
            width: 100%;
            height: auto;
        }

        .video-container {
            position: absolute;
            top: 15%;
            left: 12%;
            width: 76%;
            height: 68%;
        }
    </style>
    @yield('css_after')
</head>

<body>
    @yield('content')
    @include('layouts.partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
