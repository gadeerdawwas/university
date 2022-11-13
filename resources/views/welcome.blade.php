<!DOCTYPE html>

<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0">
    <title>King Saud Graduation Porta    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="../xmlrpc.html" />

    <meta property="description" content="A CactusThemes WordPress Theme" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel='stylesheet' id='google-font-css'
        href='http://fonts.googleapis.com/css?family=Roboto%3A400%2C300%2C500%2C400italic%2C700%2C500italic%2FScript%3Alatin-ext%7CBitter&amp;ver=4.9.6'
        type='text/css' media='all' />

    <link rel='stylesheet' id='bootstrap-css'
        href='{{ asset('front/wp-content/themes/university/css/bootstrap.min1845.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='font-awesome-css'
        href='{{ asset('front/wp-content/themes/university/fonts/css/font-awesome.min1845.css?ver=4.9.6') }}'
        type='text/css' media='all' />


    <link rel='stylesheet' id='style-css'
        href='{{ asset('front/wp-content/themes/university/style1845.css?ver=4.9.6') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='js_composer_front-css'
        href='{{ asset('front/wp-content/plugins/js_composer/assets/css/js_composer.min3c21.css?ver=5.1.1') }}'
        type='text/css' media='all' />
    <script type='text/javascript' src='{{ asset('front/wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4') }}'></script>
    <script type='text/javascript' src='{{ asset('front/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1') }}'>
    </script>



    <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress." />
    <link rel="icon" href="{{ asset('front/wp-content/uploads/2014/10/cropped-favicon-512x512-32x32.png') }}"
        sizes="32x32" />
    <link rel="stylesheet" href="{{ asset('front/style.css') }}">

</head>


<body
    class="bp-legacy page-template page-template-page-templates page-template-front-page page-template-page-templatesfront-page-php page page-id-1362 full-width template-front-page custom-background-empty wpb-js-composer js-comp-ver-5.1.1 vc_responsive no-js">
    <div id="pageloader" class="dark-div"
        style=" position: fixed;
    z-index: 50000;
    background: white;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    height: 100%;
    width: 100%;
    margin: 0 auto;
    text-align: center;">
        <div class="">

            <img src="{{ asset('front/logo-removebg-preview.png') }}" class="loader-img" style="margin:  20%;"
                alt="Loader" width="80px">

            <!-- <div class="cube1"></div>
          <div class="cube2"></div> -->
        </div>
    </div>

    <a name="top" style="height:0; position:absolute; top:0;" id="top-anchor"></a>

    <div id="body-wrap">
        <div id="wrap">
            <header>
                <div id="top-nav" class="dark-div nav-style-1">
                    <nav class="navbar navbar-inverse main-color-1-bg" role="navigation">
                        <div class="container">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="top-menu">


                                <div class="navbar-right topnav-sidebar">
                                    <ul class="navbar-nav ms-auto">
                                        <!-- Authentication Links -->


                                        @guest
                                            @if (Route::has('login'))
                                                <li class="nav-item">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('login') }}"> login </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('register') }}"> Register </a>
                                                    </li>                                             </li>
                                            @endif


                                        @else
                                        @if(auth()->user()->is_student == 1)
                                        <div class="dropdown-divider m-0"></div>
                                        <a class="dropdown-item" href="{{ route('supervisor.profile') }}">
                                            <i class="dropdown-icon fe fe-user"></i> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                                        </a>

                                        @endif

                                        @if(auth()->user()->is_student == 0)
                                        <div class="dropdown-divider m-0"></div>
                                        <a class="dropdown-item" href="{{ route('student.index') }}">
                                            <i class="dropdown-icon fe fe-user"></i> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                                        </a>
                                        @endif
                                        @if(auth()->user()->is_student == 2)
                                        <div class="dropdown-divider m-0"></div>
                                        <a class="dropdown-item" href="{{ route('GPcommittee.index') }}">
                                            <i class="dropdown-icon fe fe-user"></i> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                                        </a>
                                        @endif



                                        {{-- <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}"><i class="fa-solid fa-user-plus"></i> تسجيل دخول</a>
                                        </li> --}}





                                        @endguest
                                    </ul>
                                </div>

                            </div><!-- /.navbar-collapse -->
                        </div>
                    </nav>
                </div>
                <!--/top-nap-->
                <div id="main-nav" class="dark-div nav-style-1">
                    <nav class="navbar navbar-inverse main-color-2-bg" role="navigation">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <a class="logo" href="#"><img
                                        src="{{ asset('front/logo-removebg-preview.png') }}" width="50px" /></a>

                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="main-menu hidden-xs  " data-spy="affix" data-offset-top="500">
                                <ul class="nav navbar-nav navbar-right">
                                    <li id="nav-menu-item-1268"
                                        class="menu-link dropdown-toggle disabled main-menu-link">
                                        <a href="{{ route('site') }}#Home" class="menu-link dropdown-toggle disabled main-menu-link"><i
                                                class="fa fa-home"></i> Home </a>

                                    </li>
                                    <li id="nav-menu-item-3373"
                                        class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                                        <a href="{{ route('site') }}#Project" class="menu-link dropdown-toggle disabled main-menu-link"><i
                                                class="fa fa-bookmark"></i> Project</a>

                                    </li>
                                    <li id="nav-menu-item-1313"
                                        class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                                        <a href="{{ route('site') }}#GPCommittee"
                                            class="menu-link dropdown-toggle disabled main-menu-link"><i
                                                class="fa fa-graduation-cap"></i> GP Committee </a>

                                    </li>
                                    <li id="nav-menu-item-1313"
                                        class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                                        <a href="{{ route('supervisorsPage') }}"
                                            class="menu-link dropdown-toggle disabled main-menu-link"><i
                                                class="fa fa-graduation-cap"></i> Supervisors </a>

                                    </li>
                                    <li id="nav-menu-item-1269"
                                        class="main-menu-item menu-item-depth-0 sub-menu-left menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                                        <a href="{{ route('site') }}#Tags" class="menu-link dropdown-toggle disabled main-menu-link"><i
                                                class="fa fa-file-text"></i> Tags</a>

                                    </li>

                                </ul>
                                <a href="#top" class="sticky-gototop main-color-1-hover"><i
                                        class="fa fa-angle-up"></i></a>
                            </div><!-- /.navbar-collapse -->
                        </div>
                    </nav>
                </div><!-- #main-nav -->
                <div id="slider" class="header-bg-img header-content-0">
                </div>
                <!--/slider-->
                <style type="text/css" scoped="scoped">
                </style>
            </header>


            <div class="top-sidebar">
                <div class="container">
                    <div class="row">
                    </div>
                    <!--/row-->
                </div>
                <!--/container-->
            </div>
            <!--/Top sidebar-->
            <div id="body">
                <div class="row" id="Home">
                    <div id="content" class="col-md-12" role="main">
                        <article class="single-page-content">
                            <div class="u_row u_full_row">
                                <div class="container">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1408444270873 vc_row-has-fill">
                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        class="wpb_text_column wpb_content_element  vc_custom_1408444116310">
                                                        <div class="wpb_wrapper">
                                                            <h1>King Saud Graduation Portal </h1>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h4>KSGP intends to to serve CCIS students and supervisors
                                                                with a system the contains all the services that any
                                                                senior students need for their graduation project, and
                                                                all the services that the supervisors need for managing
                                                                said projects. It will facilitate the process for
                                                                students, supervisors, and the GP committee.</h4>

                                                        </div>
                                                    </div>
                                                    <a class="btn button-96063 btn-primary btn-lg " href="{{ route('register') }}"
                                                        data-delay=0>
                                                        <i class="fa fa-arrow-right"></i>&nbsp;&nbsp;Register Now
                                                    </a>
                                                    <style scoped="scoped">
                                                        .button-96063 {
                                                            background-color: #1fa756;
                                                            border-color: #1fa756
                                                        }
                                                    </style>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        class="wpb_single_image wpb_content_element vc_align_right  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top">

                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                <img class="vc_single_image-img "
                                                                    src="{{ asset('front/wp-content/uploads/2014/08/desk-items.png') }}"
                                                                    width="540" height="392" alt="desk-items"
                                                                    title="desk-items" />
                                                            </div>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="u_row u_full_row u_paralax">
                                <div class="container">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1406951989553 vc_row-has-fill"
                                        style="background-position: 50% 33.015625px !important; transition: none;">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1406950310766"
                                                        style="background-position: 50% 48.015625px !important; transition: none;">
                                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div
                                                                        class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_left-to-right left-to-right wpb_start_animation animated">
                                                                        <div class="wpb_wrapper">
                                                                            <h1 style="text-align: right;">Create.
                                                                                Manage. Sell Events &amp; Courses</h1>

                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_left-to-right left-to-right wpb_start_animation animated">
                                                                        <div class="wpb_wrapper">
                                                                            <p style="text-align: right;">Lorem ipsum
                                                                                dolor sit amet, consectetur adipisicing
                                                                                elit, sed do eiusmod tempor incididunt
                                                                                ut labore et dolore magna aliqua. Ut
                                                                                enim ad minim veniam, quis nostrud
                                                                                exercitation ullamco laboris nisi ut
                                                                                aliquip ex ea commodo consequat.</p>

                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div
                                                                        class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_right-to-left right-to-left wpb_start_animation animated">

                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div
                                                                                class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img class="vc_single_image-img "
                                                                                    src="{{ asset('front/wp-content/uploads/2014/07/001-macbook-air.png') }}"
                                                                                    width="497" height="294"
                                                                                    alt="001-macbook-air"
                                                                                    title="001-macbook-air">
                                                                            </div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey">
                                                        <span class="vc_sep_holder vc_sep_holder_l"><span
                                                                class="vc_sep_line"></span></span><span
                                                            class="vc_sep_holder vc_sep_holder_r"><span
                                                                class="vc_sep_line"></span></span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/u_row-->
                            <div class="u_row u_full_row" id="Project">
                                <div class="container">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1408444739161">
                                        @foreach ($projects as $project)
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner ">


                                                    <div class="wpb_wrapper">
                                                        <div
                                                            class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top vc_custom_1434962446018">

                                                            <figure class="wpb_wrapper vc_figure">
                                                                <a href="#"
                                                                    target="_blank"
                                                                    class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                                        class="vc_single_image-img "
                                                                        src="{{ asset('upload/project/' . $project->image) }}"
                                                                        width="255" height="200" alt="001"
                                                                        title="001" /></a>
                                                            </figure>
                                                        </div>

                                                        <div
                                                            class="wpb_text_column wpb_content_element  vc_custom_1413253460548">
                                                            <div class="wpb_wrapper">
                                                                <h3><a href="#">{{ $project->title }}</a>
                                                                </h3>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                            <!--/u_row-->
                            <div class="u_row u_full_row dark-div u_paralax">
                                <div class="container">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1434469641934 vc_row-has-fill">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h1 style="text-align: center;">THE KEY TO AN ADVANCED
                                                                FUTURE IS JUST ONE CLICK AWAY!</h1>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p style="text-align: center;"> <a
                                                                    class="btn button-button_84 btn-default btn-lg "
                                                                    href="#3" data-delay=0>
                                                                    VIEW COURSES&nbsp;&nbsp;<i
                                                                        class="fa fa-angle-right"></i> </a>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/u_row-->
                            <div class="u_row u_full_row" id="GPCommittee">
                                <div class="container">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1408445866595">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        class="wpb_text_column wpb_content_element  vc_custom_1408445876193">
                                                        <div class="wpb_wrapper">
                                                            <h1 style="text-align: center;">We Have The Best
                                                                GP Committee</h1>

                                                        </div>
                                                    </div>
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">

                                                        @foreach ($Users as $User)
                                                        <div class="wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="row">

                                                                        <div class="member-item col-md-12 ">
                                                                            <div class="member-item-inner">

                                                                                <div class="item-thumbnail">

                                                                                    <a
                                                                                        href="#"
                                                                                        title="John Doe"><i style="font-size: 77px;
                                                                                        margin: 55px;" class="fa-sharp fa-solid fa-users"></i></a>
                                                                                </div>
                                                                                <div class="item-content">
                                                                                    <h3 class="item-title"><a
                                                                                            href="#"
                                                                                            title="title"
                                                                                            class="main-color-1-hover">{{ $User->first_name }}  {{ $User->last_name }}</a>
                                                                                    </h3>


                                                                                    <ul
                                                                                        class="list-inline social-light">
                                                                                        <li><a class="btn btn-default social-icon"
                                                                                                href="mailto:{{ $User->email }}">
                                                                                                <i
                                                                                                    class="fa fa-envelope"></i></a>
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/u_row-->
                            <div class="u_row u_full_row" id="Tags">
                                <div class="container">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1408446397186 vc_row-has-fill">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">

                                                    <div
                                                        class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1408446446325">
                                                        <div class="wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div
                                                                        class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top">

                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div
                                                                                class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img class="vc_single_image-img "
                                                                                    src="{{ asset('front/data-.png') }}"
                                                                                    width="150" height="141"
                                                                                    alt="Logo-1" title="Logo-1" />
                                                                            </div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div
                                                                        class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top">

                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div
                                                                                class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img class="vc_single_image-img "
                                                                                    src="{{ asset('front/python.png') }}"
                                                                                    width="150" height="141"
                                                                                    alt="Logo-2" title="Logo-2" />
                                                                            </div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div
                                                                        class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top">

                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div
                                                                                class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img class="vc_single_image-img "
                                                                                    src="{{ asset('front/ai.png') }}"
                                                                                    width="150" height="141"
                                                                                    alt="Logo-3" title="Logo-3" />
                                                                            </div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-3">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div
                                                                        class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top">

                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div
                                                                                class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img class="vc_single_image-img "
                                                                                    src="{{ asset('front/web-removebg-preview.png') }}"
                                                                                    width="150" height="141"
                                                                                    alt="Logo-4" title="Logo-4" />
                                                                            </div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/u_row-->
                            </p>
                        </article>
                    </div>
                    <!--/content-->
                </div>
                <!--/row-->
            </div>
            <!--/body-->
            <section id="bottom-sidebar">
                <div class="container">
                    <div class="row normal-sidebar">
                    </div>
                </div>
            </section>
            <footer class="dark-div main-color-2-bg">
                <section id="bottom">
                    <div class="section-inner">
                        <div class="container">
                            <div class="row normal-sidebar">

                                <div id="divider-6" class=" col-md-3  widget divider_widget">
                                    <div class=" widget-inner">
                                        <div class="un-heading un-separator">
                                            <div class="un-heading-wrap">
                                                <span class="un-heading-line un-heading-before"><span></span></span>
                                                <a href="#"
                                                    class="btn btn-default btn-lg btn-lighter un-heading-content">
                                                    ENROLL TODAY &nbsp;<i class="fa fa-angle-right"></i>
                                                </a>
                                                <span class="un-heading-line un-heading-after"><span></span></span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="nav_menu-11" class=" col-md-3  widget widget_nav_menu">
                                    <div class=" widget-inner">
                                        <h2 class="widget-title maincolor1"> Projects</h2>
                                        <div class="menu-law-business-container">
                                            <ul id="menu-law-business" class="menu">



                                                @foreach ($projects as $project)
                                                    <li id="menu-item-1280"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1280">
                                                        <a href="#">{{ $project->title }}</a>
                                                    </li>
                                                @endforeach


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="nav_menu-7" class=" col-md-3  widget widget_nav_menu">
                                    <div class=" widget-inner">
                                        <h2 class="widget-title maincolor1">Groups</h2>
                                        <div class="menu-engineering-container">
                                            <ul id="menu-engineering" class="menu">




                                                @foreach ($Group as $Group)
                                                    <li id="menu-item-1287"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1287">
                                                        <a href="#">{{ $Group->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div id="nav_menu-8" class=" col-md-3  widget widget_nav_menu">
                                    <div class=" widget-inner">
                                        <h2 class="widget-title maincolor1">Links</h2>
                                        <div class="menu-higher-education-container">
                                            <ul id="menu-higher-education" class="menu">
                                                <li id="menu-item-1294"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1294">
                                                    <a href="#Home">Home</a>
                                                </li>
                                                <li id="menu-item-1295"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1295">
                                                    <a href="#Project">Project</a>
                                                </li>
                                                <li id="menu-item-1296"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1296">
                                                    <a href="#GPCommittee">GP Committee</a>
                                                </li>
                                                <li id="menu-item-1297"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1297">
                                                    <a href="#Tags">Tags</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="text-14" class=" col-md-3 border widget widget_text">
                                    <div class=" widget-inner">
                                        <h2 class="widget-title ">Prepared By</h2>
                                        <div class="textwidget">
                                            <p>Name : Goot Saud Alotaibi</p>
                                            <p>Name : Jamila Saeed Alshahrani</p>
                                            <p>Name : Nourah Abdulaziz Alojairi</p>
                                        </div>


                                    </div>
                                </div>
                                <div id="divider-7" class=" col-md-3  widget divider_widget">
                                    <div class=" widget-inner">
                                        <div class="un-heading un-separator">
                                            <div class="un-heading-wrap">
                                                <span class="un-heading-line un-heading-before"><span></span></span>
                                                <span class="un-heading-line un-heading-after"><span></span></span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <div id="bottom-nav">
                    <div class="container">

                        <div class="row footer-content">
                            <div class="copyright col-md-6">
                                © 2022 - King Saud Graduation Portal. All rights reserved. </div>

                        </div>
                        <!--/row-->
                    </div>
                    <!--/container-->
                </div>
            </footer>
        </div>
        <!--wrap-->
    </div>

    <!--/body-wrap-->
    <div class="mobile-menu-wrap dark-div visible-xs">
        <a href="#" class="mobile-menu-toggle"><i class="fa fa-times-circle"></i></a>
        <ul class="mobile-menu">
            <li id="menu-item-1268"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children parent menu-item-1268">
                <a href="#Home"><i class="fa fa-home"></i> Home</a>

            </li>
            <li id="menu-item-3373"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent menu-item-3373">
                <a href="#Project"><i class="fa fa-bookmark"></i> Project</a>

            </li>
            <li id="menu-item-1313"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent menu-item-1313">
                <a href="#GPCommittee"><i class="fa fa-graduation-cap"></i> GPCommittee</a>

            </li>
            <li id="menu-item-1269"
                class="sub-menu-left menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent menu-item-1269">
                <a href="#Tags"><i class="fa fa-file-text"></i> Tags</a>

            </li>

        </ul>
    </div>


    <link rel='stylesheet' id='sfwd_front_css-css'
        href='{{ asset('front/wp-content/plugins/sfwd_lms-v2.0.6.5/assets/front1845.css?ver=4.9.6') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='sfwd_template_css-css'
        href='{{ asset('front/wp-content/plugins/sfwd_lms-v2.0.6.5/templates/learndash_template_style1845.css?ver=4.9.6') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css-css'
        href='{{ asset('front/wp-content/plugins/js_composer/assets/lib/bower/animate-css/animate.min3c21.css?ver=5.1.1') }}'
        type='text/css' media='all' />



    <script type='text/javascript'
        src='{{ asset('front/wp-content/themes/university/js/cactus-themes1845.js?ver=4.9.6') }}'></script>



</body>

</html>
