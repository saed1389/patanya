<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="icon" href="{{ asset('backend/assets/img/favicon.ico') }}" type="image/x-icon"> <!-- Favicon-->
    <title>:: Password reset :: </title>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/luno-style.css') }}">
    <script src="{{ asset('backend/assets/js/plugins.js') }}"></script>
</head>
<body id="layout-1" data-luno="theme-blue">
<div class="wrapper">
    <div class="body d-flex p-0 p-xl-5">
        <div class="container-fluid">
            <div class="row g-0 justify-content-center">
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="card shadow-sm w-100 p-4 p-md-5" style="max-width: 32rem;">
                        <form class="row g-3" method="post" action="{{ route('password.email') }}">
                            @csrf
                            <div class="col-12 text-center mb-1">
                                <img src="{{ asset('backend/assets/img/auth-password-reset.svg') }}" class="w240 mb-4" alt="" />
                                <h1>Forgot password?</h1>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="name@example.com" required autofocus>
                                </div>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn btn-lg btn-block btn-dark lift text-uppercase">SUBMIT</button>
                                <a href=""></a>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <span class="text-muted"><a href="{{ route('login') }}">Back to Sign in</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('backend/assets/js/theme.js') }}"></script>
</body>

</html>
