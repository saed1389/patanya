<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="icon" href="{{asset('backend/assets/img/favicon.ico')}} " type="image/x-icon"> <!-- Favicon-->
    <title>:: Admin :: Sign Up</title>
    <!-- Application vendor css url -->
    <!-- project css file  -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/luno-style.css')}} ">
    <!-- Jquery Core Js -->
    <script src="{{asset('backend/assets/js/plugins.js')}}"></script>
</head>

<body id="layout-1" data-luno="theme-blue">
<!-- start: body area -->
<div class="wrapper">
    <!-- Sign In version 1 -->
    <!-- start: page body -->
    <div class="page-body auth px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                    <div class="card shadow-sm w-100 p-4 p-md-5" style="max-width: 32rem;">
                        <!-- Form -->
                        <form class="row g-3" method="post" action="{{ route('register') }}">
                            @csrf
                            <div class="col-12 text-center">
                                <h1>{{__('Create Account')}}</h1>
                            </div>
                            <div class="col-12">
                                <label for="name" class="form-label">{{__('Full Name')}}</label>
                                <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="{{__('Full Name')}}">
                            </div>
                            <div class="col-12">
                                <label for="username" class="form-label">{{__('Username')}}</label>
                                <input type="text" name="username" id="username" class="form-control form-control-lg" placeholder="{{__('Username')}}">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">{{__('Email Address')}}</label>
                                <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="name@example.com">
                            </div>
                            <div class="col-12">
                                <label for="password" class="form-label">{{__('Password')}}</label>
                                <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="{{__('8+ characters required')}}">
                            </div>
                            <div class="col-12">
                                <label for="password_confirmation" class="form-label">{{__('Confirm password')}}</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg" placeholder="{{__('8+ characters required')}}">
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn btn-lg btn-block btn-success lift text-uppercase pull-left">{{__('SIGN UP')}}</button>
                                <a class="btn btn-lg btn-block btn-info lift text-uppercase pull-right" href="{{ route('login') }}">{{__('Sign in here')}}</a>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div> <!-- End Row -->
        </div>
    </div>
</div>

<script src="{{asset('backend/assets/js/theme.js')}}"></script>
</body>

</html>
