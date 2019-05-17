<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>Kita Beli</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('plugins/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ui.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)"/>
</head>

<body>

@include('layouts.fragments.header')
@yield('content')
@include('layouts.fragments.subscribe')
@include('layouts.fragments.footer')
@include('layouts.fragments.scripts')
</body>
</html>
