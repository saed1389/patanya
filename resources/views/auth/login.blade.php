<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="icon" href="{{ asset('backend/assets/img/favicon.ico') }}" type="image/x-icon"> <!-- Favicon-->
    <title>:: Login :: </title>
    <!-- Application vendor css url -->
    <!-- project css file  -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/luno-style.css') }}">
    <!-- Jquery Core Js -->
    <script src="{{ asset('backend/assets/js/plugins.js') }}"></script>
</head>

<body id="layout-1" data-luno="theme-blue">
<!-- start: body area -->
<div class="wrapper">
    <div class="body d-flex p-0 p-xl-5">
        <div class="container-fluid">
            <div class="row g-0 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 col-sm-8">
                    <!-- Form -->
                    <form class="row g-1 rounded-3 p-lg-5 p-4" method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="col-12 text-center mb-1">
                            <h1>Sign in</h1>
                        </div>
                        <div class="col-12 text-center mb-2">
                            <img src="{{ asset('logo/logo.png') }}" alt="" style="width: 100px">
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                                <label for="email">Username</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="Rememberme">
                                <label class="form-check-label" for="Rememberme">Remember me</label>
                            </div>
                            <a class="text-primary small" href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                        <div class="col-12 text-center mt-4 d-grid">
                            <button class="btn btn-lg bg-primary-gradient lift text-uppercase" type="submit" >Login</button>
                        </div>
                        <div class="col-12 text-center mt-4">
                            <span class="text-muted">Don't have an account yet? <a href="{{ route('register') }}">Sign up here</a></span>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div> <!-- End Row -->
        </div>
    </div>
</div>
<!-- Jquery Page Js -->
<script src="{{ asset('backend/assets/js/theme.js')}}"></script>
<!-- Plugin Js -->
<!-- Vendor Script -->
</body>

</html>
