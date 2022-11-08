<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>KSGP homePage</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('asset/dashboard/assets/plugins/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('asset/dashboard/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/dashboard/assets/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/dashboard/assets/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/dashboard/assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('asset/dashboard/assets/css/icons.css') }}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('asset/dashboard/assets/colors/color1.css') }}" />

</head>

<body class="app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOABAL LOADER -->

        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto ">
                    <div class="text-center">
                        <a href="index.html"><img src="{{ asset('asset/site/logo-removebg-preview.png') }}"
                                width="80px" class="header-brand-img" alt=""></a>
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <span class="login100-form-title pb-5">
                            {{ __('Reset Password') }}
                        </span>
                        <div class="panel panel-primary">

                            <div class="panel-body tabs-menu-body p-0 ">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">



                                        <div class="card-body">
                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif

                                            <form method="POST" action="{{ route('password.email') }}">
                                                @csrf


                                                <div class="row mb-3">
                                                    <label for="email"
                                                        class="col-md-5 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                                    <div class="col-md-7">
                                                        <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" required
                                                            autocomplete="email" autofocus>

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="container-login100-form-btn">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Send Password Reset Link') }}
                                                    </button>
                                                </div>




                                            </form>



                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!-- End PAGE -->

        </div>
        <!-- BACKGROUND-IMAGE CLOSED -->

        <!-- JQUERY JS -->
        <script src="{{ asset('asset/dashboard/assets/js/jquery.min.js') }}"></script>

        <!-- BOOTSTRAP JS -->
        <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.') }}"></script>

        <!-- SHOW PASSWORD JS -->
        <script src="{{ asset('assets/js/show-password.min.') }}"></script>

        <!-- GENERATE OTP JS -->
        <script src="{{ asset('assets/js/generate-otp.') }}"></script>

        <!-- Perfect SCROLLBAR JS-->
        <script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.') }}"></script>

        <!-- Color Theme js -->
        <script src="{{ asset('assets/js/themeColors.') }}"></script>

        <!-- CUSTOM JS -->
        <script src="{{ asset('assets/js/custom.') }}"></script>


</body>

</html>
