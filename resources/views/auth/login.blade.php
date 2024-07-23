<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login - PAR Gereja Toraja Mamasa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="card-body pt-0">
                            <div class="p-3">
                                <h4 class="font-size-20 mx-1 fw-bold text-center">Selemat Datang</h4>
                                <p class="text-muted text-center">Login untuk masuk ke adminstrator PAR-GTM</p>
                                <form class="form-horizontal " method="POST" action="{{ route('login') }}">
                                    @csrf
                                    @error('login')
                                        <ul class="alert alert-danger">
                                            <li>{{ $message }}</li>
                                        </ul>
                                    @enderror

                                    <div class="mb-3">
                                        <label for="username">Username atau email</label>
                                        <input type="text" class="form-control" name="login"
                                            value="{{ old('login') }}" placeholder="Enter username or email">

                                    </div>
                                    <div class="mb-3">
                                        <label for="userpassword">Password</label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Enter password">
                                    </div>
                                    <div class="d-flex justify-content-end align-items-end mb-3">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                                            LogIn</button>
                                    </div>

                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-4">
                                            <a href="pages-recoverpw.html" class="text-muted">
                                                <i class="mdi mdi-lock"></i> Lupa password?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        {{-- <p>Don't have an account ? <a href="pages-register.html" class="text-primary"> Signup Now </a>
                        </p> --}}
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Lexa <span class="d-none d-sm-inline-block"> - Crafted with <i
                                class="mdi mdi-heart text-danger"></i> by Echon.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets') }}/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('assets') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('assets') }}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('assets') }}/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- App js -->
    <script src="{{ asset('assets') }}/js/app.js"></script>
</body>

</html>
