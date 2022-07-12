@php
    $seo = DB:: table('seos')->first();
@endphp
<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="{{ $seo->meta_author }}" >
    <meta name="keyword" content="{{ $seo->meta_keyword }}" >
    <meta name="description" content="{{ $seo->meta_description }}" >
    <meta name="google_verification" content="{{ $seo->google_verification }}" >
    <title>{{ $seo->meta_title }} - Pataniya</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/icofonts.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owlcarousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/colors/color-4.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.1/css/flag-icon.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="body-inner-content">
    <!-- Header Start -->
    @include('main.body.header')
    <!-- Header End -->


    <!-- Main Start -->
    @yield('content')
    <!-- Main End -->


    <!-- Footer Start  -->
    @include('main.body.footer')
    <!-- Footer End  -->
</div>

<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/navigation.js') }}"></script>
<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl-carousel.2.3.0.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/smoothscroll.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>
</html>
