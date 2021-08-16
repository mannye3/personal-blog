


<!DOCTYPE html>
<html lang="en">


<head>
        <meta charset="utf-8" />
        <title>NASD E - MANDATE PORTAL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/assets/assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('admin/assets/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg">

        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-md-6 p-5">
                                        <div class="mx-auto mb-5">
                                            <a href="index.html">
                                                <img src="{{ asset('admin/assets/assets/images/logo.png') }}" alt="" height="24" />
                                                <h3 class="d-inline align-middle ml-1 text-logo">Shreyu</h3>
                                            </a>
                                        </div>

                                        <h6 class="h5 mb-0 mt-4">Welcome back!</h6>
                                        <p class="text-muted mt-1 mb-4">Enter your email address and password to
                                            access admin panel.</p>

                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-4">
                                                            <label for="username">Username</label>
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <label for="userpassword">Password</label>
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="text-md-right mt-3 mt-md-0">
                                                                    @if (Route::has('password.request'))
                                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                        {{ __('Forgot Your Password?') }}
                                                                    </a>
                                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-4">
                                                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                                                        </div>
                                                        <div class="mt-4 text-center">
                                                            @if (Route::has('password.request'))
                                                            <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Create an account</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        <div class="py-3 text-center"><span class="font-size-16 font-weight-bold">Or</span></div>
                                        <div class="row">
                                            <div class="col-6">
                                                <a href="#" class="btn btn-white"><i class='uil uil-google icon-google mr-2'></i>With Google</a>
                                            </div>
                                            <div class="col-6 text-right">
                                                <a href="#" class="btn btn-white"><i class='uil uil-facebook mr-2 icon-fb'></i>With Facebook</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-none d-md-inline-block">
                                        <div class="auth-page-sidebar">
                                            <div class="overlay"></div>
                                            <div class="auth-user-testimonial">
                                                <p class="font-size-24 font-weight-bold text-white mb-1">I simply love it!</p>
                                                <p class="lead">"It's a elegent templete. I love it very much!"</p>
                                                <p>- Admin User</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                @if (Route::has('login'))
                                <p class="text-muted">Don't have an account?

                                    <a href="{{ route('register') }}" class="text-primary font-weight-bold ml-1">Sign Up</a></p>
                                    @endif
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="{{ asset('admin/assets/assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('admin/assets/assets/js/app.min.js') }}"></script>

    </body>

</html>

