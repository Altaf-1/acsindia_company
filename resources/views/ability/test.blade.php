@extends('layouts.main')
@section('title')
    Test Series - Academy of Civil Services
@endsection
@section('links')
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('comimages/gbar.jpg')}}" type="image/x-icon">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Main Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- Slick  -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <!-- jQuery Fancybox  -->
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <style>
        .bg-courses {
            background-image: url({{asset('comimages/corbg.webp')}});
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endsection
@section('content')
    <!-- header area start -->
    <header id="header" class="transparent-header">
        <!-- #navigation start -->
        <nav class="navbar navbar-default navbar-expand-md navbar-light" id="navigation" data-offset-top="1">
            <!-- .container -->
            <div class="container">
                <!-- Logo and Menu -->
                <div class="navbar-header">
                    <div class="navbar-brand">
                        <a href="{{route('root')}}"><img src="comimages/Logo1.webp" alt="Logo " /></a>
                    </div>
                    <!-- site logo -->
                </div>
                <!-- Menu Toogle -->
                <div class="burger-icon">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <div class="collapse navbar-collapse " id="navbarCollapse">
                    <ul class="nav navbar-nav ml-auto">
                        <!-- Menu Link -->
                        <li class="subnav">
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li class="subnav">
                            <a href="#amateur">Amateur</a>
                        </li>
                        <li class="subnav">
                            <a href="#professional">Professional</a>
                        </li>
                    </ul>
                </div>
                <!-- Menu Toogle end -->
            </div>
            <!-- .container end -->
        </nav>
        <!-- #navigation end -->
    </header>
    <!-- end header area -->
    <main>
        <!-- breadcrumb banner content area start -->
        <div class="lernen_banner bg-courses">
            <div class="container">
                <div class="row">
                    <div class="lernen_banner_title">
                        <h1>TEST SERIES</h1>
                        <div class="lernen_breadcrumb">
                            <div class="breadcrumbs">
                                <span class="first-item">
									<a href="/">Homepage</a></span>
                                <span class="separator">&gt;</span>
                                <span class="last-item">Test series quiz</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb banner content area start -->
        <!-- contact area start -->
        <div id="features" class="wrap-bg wrap-bg-dark bg-bottom-zero">
            <div id="amateur">
                <h2 class="text-center bg-primary text-white">AMATEUR</h2>
            </div><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <!-- 1 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <!-- uses solid style -->
                                <i class="base-color fas fa-book fa-3x"></i>
                                <h4>INDIAN POLITY</h4>
                                <a href="{{asset('indian_polityquiz')}}" class=" btn color-two button text-white">PLAY</a>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <!-- 2 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fas fa-book fa-3x"></i>
                                <h4>GEOGRAPHY</h4>
                                <a href="{{asset('geographyquiz')}}" class=" btn color-two button text-white">PLAY</a>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 ">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fas fa-book fa-3x"></i>
                                <h4>ENVIRONMENT & ECOLOGY</h4>
                                <a href="{{asset('Env&Ecoquiz')}}" class=" btn color-two button text-white">PLAY</a>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fas fa-book fa-3x"></i>
                                <h4>MODERN INDIAN</h4>
                                <a href="{{asset('Modern_Indiaquiz')}}" class=" btn color-two button text-white">PLAY</a>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 ">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fas fa-book fa-3x"></i>
                                <h4>ART & CULTURE</h4>
                                <a href="{{asset('art&culturequiz')}}" class=" btn color-two button text-white">PLAY</a>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 ">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fas fa-book fa-3x"></i>
                                <h4>INDIAN ECONOMY</h4>
                                <a href="{{asset('indian_Economyquiz')}}" class=" btn color-two button text-white">PLAY</a>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <!--professional-->
        <!--standard-->
        <div id="features" class="wrap-bg wrap-bg-dark bg-bottom-zero">
            <div id="professional">
                <h2 class="text-center bg-primary text-white">PROFESSIONAL</h2>
            </div><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <!-- 1 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <!-- uses solid style -->
                                <i class="base-color fas fa-user fa-3x"></i>
                                <h4>TEST -1</h4>
                                <a href="{{asset('test1')}}" class=" btn color-two button text-white">PLAY</a>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <!-- 2 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fas fa-user fa-3x"></i>
                                <h4>TEST -2</h4>
                                <a href="{{asset('test2')}}" class=" btn color-two button text-white">PLAY</a>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 ">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fas fa-user fa-3x"></i>
                                <h4>TEST -3</h4>
                                <a href="{{asset('test3')}}" class=" btn color-two button text-white">PLAY</a>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- contact area end -->
        <!-- newsletter area start -->
        <div id="newsletter">
            <div class="container">
                <div class="footer-subscribe">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h5 class="subscribe-text">Subscribe for latest updates and Discounts</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="subscribe-form-pt">
                                <!-- Begin Newsletter Signup Form -->
                                <form class="themeioan-form-newsletter form" action="#">
                                    <div class="newslleter-call">
                                        <input class="input-text required-field" type="text" placeholder="Your email" title="Your email" />
                                        <input class="newsletter-submit color-two button" type="submit" value="Subscribe" />
                                    </div>
                                </form>
                                <!--End Newsletter-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter area end -->
    </main>

@endsection
@section('footer')
    @include('partials.footer')
@endsection

@section('scripts')
    <!-- #footer area end -->
    <!-- JavaScript File -->
    <!-- jQuery -->
    <script src='{{asset('js/jquery-3.4.1.min.js')}}'></script>
    <!-- Main -->
    <script src='{{asset('js/main.js')}}'></script>
    <!-- Bootstrap -->
    <script src='{{asset('js/bootstrap.min.js')}}'></script>
    <!-- Slick -->
    <script src='{{asset('js/slick.min.js')}}'></script>
    <!-- Fancybox -->
    <script src='{{asset('js/jquery.fancybox.pack.js')}}'></script>
    <!-- Magnific Popup core JS file -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Waypoints -->
    <script src={{asset('js/waypoints.min.js')}}></script>
    <!-- Counterup -->
    <script src={{asset('js/jquery.counterup.min.js')}}></script>
@endsection
