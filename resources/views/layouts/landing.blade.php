{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Landing Page')</title>

    <link rel="shortcut icon" href="{{ assets( 'assets/images.favicon.ico') }}">


    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">

    <!-- Animation on Scroll css -->
    <link href="assets/libs/aos/aos.css" rel="stylesheet" type="text/css">

    <!-- Style css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">

</head>
<body>
@include('components.navbar')
@yield('content')
@include('components.footer')

<script src="{{ assets( 'dist/assets/libs/@frostui/tailwindcss/frostui.js') }}"></script>
<script src="{{ assets( 'assets/libs/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ assets( 'assets/libs/aos/aos.js') }}"></script>
<script src="{{ assets( 'assets/js/theme.min.js') }}"></script>

</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Landing Page')</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Swiper slider css -->
    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Animation on Scroll css -->
    <link href="{{ asset('dist/assets/libs/aos/aos.css') }}" rel="stylesheet" type="text/css">

    <!-- Style css -->
    <link href="{{ asset('dist/assets/css/style.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="{{ asset('dist/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
@include('components.navbar')
@yield('content')
@include('components.footer')

<script src="{{ asset('dist/assets/libs/@frostui/tailwindcss/frostui.js') }}"></script>
<script src="{{ asset('dist/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('dist/assets/libs/aos/aos.js') }}"></script>
<script src="{{ asset('dist/assets/js/theme.min.js') }}"></script>
</body>
</html>
