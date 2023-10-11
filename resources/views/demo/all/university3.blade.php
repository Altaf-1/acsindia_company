@extends('layouts.main')
@section('title')
Academy of Civil Services | Best IAS Coaching in India
@endsection
@section('links')
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<!-- Main Custom CSS -->
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<!-- Slick  -->
<link rel="stylesheet" href="{{asset('css/slick.css')}}">
<!-- Font Awesome  -->
<link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="{{asset('js/sweetalert2.min.js')}}"></script>

<!-- jQuery Fancybox  -->
{{--
<link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
--}}
<!-- Magnific Popup core CSS file -->
{{--
<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
--}}
<!-- home 12  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- favicon -->

<link rel="apple-touch-icon"
    href="{{asset('https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css')}}">
<link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('css/hcss/images/fav.png')}}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Bootstrap v4.4.1 css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<!-- font-awesome css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/font-awesome.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
<!-- animate css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/animate.css')}}">
<!-- owl.carousel css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/owl.carousel.css')}}">
<!-- slick css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/slick.css')}}">
<!-- off canvas css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/off-canvas.css')}}">
<!-- linea-font css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/linea-fonts.css')}}">
<!-- flaticon css  -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/flaticon.css')}}">
<!-- magnific popup css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/magnific-popup.css')}}">
<!-- Main Menu css -->
<link rel="stylesheet" href="{{asset('css/hcss/rsmenu-main.css')}}">
<!-- spacing css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/rs-spacing.css')}}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/style.css')}}">
<!-- This stylesheet dynamically changed from style.less -->
<!-- responsive css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/responsive.css')}}">

<link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap')}}"
    rel="stylesheet">

<link rel="stylesheet" href="{{asset('css/ucss/open-iconic-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/css/animate.css')}}">

<link rel="stylesheet" href="{{asset('css/ucss/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/magnific-popup.css')}}">

<link rel="stylesheet" href="{{asset('css/ucss/aos.css')}}">

<link rel="stylesheet" href="{{asset('css/ucss/ionicons.min.css')}}">

<link rel="stylesheet" href="{{asset('css/ucss/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/icomoon.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/style.css')}}">
<link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap')}}"
    rel="stylesheet">

<link rel="stylesheet" href="{{asset('css/ucss/open-iconic-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/css/animate.css')}}">

<link rel="stylesheet" href="{{asset('css/ucss/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/magnific-popup.css')}}">

<link rel="stylesheet" href="{{asset('css/ucss/aos.css')}}">

<link rel="stylesheet" href="{{asset('css/ucss/ionicons.min.css')}}">

<link rel="stylesheet" href="{{asset('css/ucss/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/icomoon.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/style.css')}}">
@endsection
@section('styles')
<style>

    .owl-carousel{
        height: 90vh !important;
    }
    
    .slider-item{
      height: 90vh !important;  
    }
    
    .slider-bg1 {
        background: url("{{asset('comimages/uniweb/w1.png')}}") no-repeat;
        background-size: 100% 100%;
        height: 90vh !important;
    }

    .slider-bg2 {
        background: url("{{asset('comimages/uniweb/w4.png')}}") no-repeat;
        background-size: 100% 100%;
        height: 90vh !important;
       

    }

    .slider-bg3 {
        background: url("{{asset('comimages/uniweb/w3.png')}}") no-repeat;
        background-size: 100% 100%;

    }

    .slider-bg4 {
        background: url("{{asset('comimages/uniweb/w2.png')}}") no-repeat;
        background-size: 100% 100%;

    }

    @media screen and (max-width: 515px) {
        
        .owl-carousel{
        height: 70vh !important;
    }
    
    .slider-item{
      height: 70vh !important;  
    }

        .slider-bg1 {
            background: url('{{asset('comimages/unimob/m-11.png')}}') no-repeat;
            background-size: 100% 100%;
            height: 60vh !important;
        }

        .slider-bg2 {
            background: url("{{asset('comimages/unimob/m2.png')}}") no-repeat;
            background-size: 100% 100%;
            height: 60vh !important;

        }

        .slider-bg3 {
            background: url("{{asset('comimages/unimob/m3.png')}}") no-repeat;
            background-size: 100% 100%;
            height: 60vh !important;
        }

        .slider-bg4 {
            background: url("{{asset('comimages/unimob/m4.png')}}") no-repeat;
            background-size: 100% 100%;
            height: 60vh !important;

        }
        .head-logo{
            margin-left: 150px;
        }
    }

    
</style>

@endsection
@section('content')

<!-- header area start -->
<header id="header">
    <nav class="navbar navbar-default navbar-expand-lg sticky" id="navigation" data-offset-top="0">
    <!-- .container -->
    <div class="container-fluid">
        <!-- Logo and Menu -->
        <div class="navbar-header">
            <div class="navbar-brand">
                <img src='{{asset("comimages/icons/log1.JPG")}}' style="width: 250px; height: 200px; " alt="">
            </div>
            <!-- site logo -->
        </div>
        <!-- Menu Toogle -->
        <div class="burger-icon bg-dark">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <ul class="nav navbar-nav ml-auto text-center active">
                <!-- Menu Link -->
                <li class="subnav">
                    <a href="{{route('home')}}" class="text-dark">
                        <h5 class="font-weight-bold">HOME</h5>
                    </a>
                </li>
                <li class="subnav">
                    <a href="/uni" class="text-dark">
                        <h5 class="font-weight-bold">ABOUT</h5>
                    </a>
                </li>
                <li class="subnav ">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            <h5 class="font-weight-bold">UPSC</h5>
                        </button>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Online Courses</a></li>
                            <li><a class="dropdown-item" href="#">Syllabus</a></li>
                            <li><a class="dropdown-item" href="#">Previous year Question Paper</a></li>
                            <li><a class="dropdown-item" href="#">NCERT bOOKS</a></li>
                            <li><a class="dropdown-item" href="#">Daily Current Affairs</a></li>
                        </ul>
                    </div>
                </li>
                <li class="subnav">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            <h5 class="font-weight-bold">APSC</h5>
                        </button>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">APSC Online Courses</a></li>
                            <li><a class="dropdown-item" href="#">APSC Syllabus</a></li>
                            <li><a class="dropdown-item" href="#">APSC Previous year Question Paper</a></li>
                            <li><a class="dropdown-item" href="#">APSC NCERT bOOKS</a></li>
                            <li><a class="dropdown-item" href="#">APSC Daily Current Affairs</a></li>
                        </ul>
                    </div>
                </li>
                <li class="subnav">
                    <a href="{{route('home')}}" class="text-dark">
                        <h5 class="font-weight-bold">DEMO CLASS</h5>
                    </a>
                </li>
                @if(route('root')==URL::current() || route('home')==URL::current())
                <li><a href="#apsc">Apsc</a></li>
                <li><a href="#Events">Seminar/Webinar</a></li>
                <li><a href="#con">Contact</a></li>

                @endif
                <li class="subnav header-cta">
                    <!-- Authentication Links -->
                    @auth
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-black-50" href="{{ route('user.show', Auth::user()->id) }}">
                            My Courses
                        </a>
                        <a class="dropdown-item text-black-50" href="{{ route('order.index') }}">
                            My Orders
                        </a>
                        @if(Auth::user()->role == 'super')
                        <a class="dropdown-item text-black-50" href="{{ route('admin.index') }}">
                            Admin Panel
                        </a>
                        @endif
                        @if(Auth::user()->role == 'admin')
                        <a class="dropdown-item text-black-50" href="{{ route('admin.index') }}">
                            Admin Panel
                        </a>
                        @endif
                        <a class="dropdown-item text-black-50" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link btn p-1 pl-4 pr-4 mt-2" style="background-color: #d99032;"
                        href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link btn p-1 pl-4 pr-4 mt-2" style="background-color: #d99032"
                        href="{{ route('register') }}">{{ __('SIGN UP') }}</a>
                </li>
                @endif
                @endauth
            </ul>
        </div>
        <!-- Menu Toogle end -->
    </div>
    <!-- .container end -->
</nav>
</header>
<main>

    <!-- About Section End -->
     <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url({{asset('comimages/demo-1.png')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start"
                    data-scrollax-parent="true">
                    <div class="col-md-9 ">
                        <img class="head-logo" style="width: 70px;" src="{{asset('comimages/icon/upsc.png')}}" alt="upsc_logo">
                        <h3 class="mb-4 text-white font-weight-bold">संघ लोक सेवा आयोग</h3>
                        <h1 class="text-uppercase">Union Public Service Commission</h1>
                        <p><a href="/upsc1" class="btn btn-primary px-4 py-3 mt-3">About UPSC Exam</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url({{asset('comimages/demo-2.png')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start"
                    data-scrollax-parent="true">
                    <div class="col-md-9 ">
                        <img class="bg-light head-logo" style="width: 70px;" src="{{asset('comimages/icon/apsc.png')}}"
                            alt="upsc_logo">
                        <h3 class="mb-4 text-white font-weight-bold">অসম লোকসেৱা আয়োগ</h3>
                        <h1 class="text-uppercase">Assam Public Service Commission</h1>
                        <p><a href="https://acsindiaias.com/apsc" class="btn btn-primary px-4 py-3 mt-3">About APSC Exam</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Categories Section Start -->
    <div id="rs-categories" class="rs-categories gray-bg style1 pt-94 pb-70 md-pt-64 md-pb-40">
        <div class="container">
            <div class="row y-middle mb-50 md-mb-30">
                <div class="col-md-6 sm-mb-30">
                    <div class="sec-title">
                        <div class="sub-title primary">Subject Categories</div>
                        <h2 class="mb-4 text-uppercase font-weight-bold">Our Top Categories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <a class="categories-item" href="#">
                        <div class="icon-part">
                            <img src="{{ asset('comimages/icons/acslog.png') }}" style="width:250px" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title font-weight-bold">UPSC COURSES</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                    <a class="categories-item" href="#">
                        <div class="icon-part">
                            <img src="{{ asset('comimages/icons/acslog.png') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title font-weight-bold">APSC COURSES</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                    <a class="categories-item" href="#">
                        <div class="icon-part">
                            <img src="{{ asset('comimages/icons/acslog.png') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h4 class="title font-weight-bold">SELF LEARNING</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Section End -->

    <section class="gray-bg2">
        <div class="container pb-4">
            <div class="row justify-content-center pb-3 pt-2 pb-2">
                <div class="col-md-8 text-center heading-section">
                    <h2 class="mb-4 text-uppercase">Upcoming Events</h2>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 bg-light p-3">
                    <div class="row ">
                        <div class="col-lg-4">
                            <img src="{{ asset('comimages/head/1.png') }}" alt="images">
                        </div>
                        <div class="col-lg-7">
                            <div class="course-info">
                                <h3 class="course-title">
                                    <a href="/acs_seminar">
                                        <h3 class="font-weight-bold">APSC/UPSC FREE SEMINAR</h3>
                                    </a>
                                </h3>
                                <div class="bottom-part">
                                    <div class="info-meta">
                                        <ul>
                                            <li class="ratings">
                                                <i class="font-weight-bold"> Offline Mode</i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-part">
                                        <a href="/acs_seminar"
                                            class="btn btn-info text-white font-weight-bold mb-4">Apply Now<i
                                                class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 bg-light p-3 ">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('comimages/head/1.png') }}" alt="images">
                        </div>
                        <div class="col-lg-7">
                            <div class="course-info">
                                <h3 class="course-title">
                                    <a href="/acs_seminar">
                                        <h3 class="font-weight-bold">APSC/UPSC FREE WEBINAR</h3>
                                    </a>
                                </h3>
                                <div class="bottom-part">
                                    <div class="info-meta">
                                        <ul>
                                            <li class="ratings">
                                                <i class="font-weight-bold"> Online Mode</i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-part">
                                        <a href="/acs_seminar"
                                            class="btn btn-info text-white font-weight-bold mb-4">Apply Now<i
                                                class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url("{{asset('images/bg_3.jpg')}}");"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2 d-flex">
                <div class="col-md-6 align-items-stretch d-flex">
                    <div class="img img-video d-flex align-items-center"
                        style="background-image: url(images/about-2.jpg);">
                        <div class="video justify-content-center">
                            <a href="https://youtu.be/Eg-tjUwIAio"
                                class="icon-video d-flex justify-content-center align-items-center">
                                <img src="{{ asset('comimages/icons/acslog.png') }}" style="width:220px" alt="images">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section heading-section-white pl-lg-5 pt-md-0 pt-5">
                    <div class="py-md-5">
                        <div class="heading-section heading-section-white mb-5">
                            <h2 class="mb-4">Request For Counselling</h2>
                        </div>
                        <form action="#" class="appointment-form">
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>

                            <div class="d-md-flex">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="2" class="form-control"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="submit" value="Submit" class="btn btn-primary py-3 px-4">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row d-md-flex align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md d-flex justify-content-center counter-wrap ">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="18">0</strong>
                                    <span>Certified Teachers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="401">0</strong>
                                    <span>Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="30">0</strong>
                                    <span>Courses</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="50">0</strong>
                                    <span>Awards Won</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section">
                    <h2 class="mb-4">Student Says About Us</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="row  justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
                                </div>
                                <div class="text ml-2">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Racky Henderson</p>
                                    <span class="position">Father</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4" style="background-image: url(images/teacher-2.jpg)">
                                </div>
                                <div class="text ml-2">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Henry Dee</p>
                                    <span class="position">Mother</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4" style="background-image: url(images/teacher-3.jpg)">
                                </div>
                                <div class="text ml-2">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Mark Huff</p>
                                    <span class="position">Mother</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4" style="background-image: url(images/teacher-4.jpg)">
                                </div>
                                <div class="text ml-2">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Rodel Golez</p>
                                    <span class="position">Mother</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
                                </div>
                                <div class="text ml-2">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Ken Bosh</p>
                                    <span class="position">Mother</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Modal -->
@endsection
@section('footer')
@include('partials.footer')
@endsection
@section('scripts')
<script src="{{asset('js/hjs/modernizr-2.8.3.min.js')}}"></script>
<!-- Google -->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<!-- jquery latest version -->
<script src="{{asset('js/hjs/jquery.min.js')}}"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="{{asset('js/hjs/bootstrap.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
<!-- Menu js -->
<script src="{{asset('js/hjs/rsmenu-main.js')}}"></script>
<!-- op nav js -->
<script src="{{asset('js/hjs/jquery.nav.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{asset('js/hjs/owl.carousel.min.js')}}"></script>
<!-- Slick js -->
<script src="{{asset('js/hjs/slick.min.js')}}"></script>
<!-- isotope.pkgd.min js -->
<script src="{{asset('js/hjs/isotope.pkgd.min.js')}}"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="{{asset('js/hjs/imagesloaded.pkgd.min.js')}}"></script>
<!-- wow js -->
<script src="{{asset('js/hjs/wow.min.js')}}"></script>
<!-- Skill bar js -->
<script src="{{asset('js/hjs/skill.bars.jquery.js')}}"></script>
<script src="{{asset('js/hjs/jquery.counterup.min.js')}}"></script>
<!-- counter top js -->
<script src="{{asset('js/hjs/waypoints.min.js')}}"></script>
<!-- video js -->
<script src="{{asset('js/hjs/jquery.mb.YTPlayer.min.js')}}"></script>
<!-- magnific popup js -->
<script src="{{asset('js/hjs/jquery.magnific-popup.min.js')}}"></script>
<!-- tilt js -->
<script src="{{asset('js/hjs/tilt.jquery.min.js')}}"></script>
<!-- plugins js -->
<script src="{{asset('js/hjs/plugins.js')}}"></script>
<!-- contact form js -->
<script src="{{asset('js/hjs/contact.form.js')}}"></script>
<!-- main js -->
<script src="{{asset('js/hjs/main.js')}}"></script>
<script src='{{asset("js/jquery-3.4.1.min.js")}}'></script>
<script src='{{asset("js/main.js")}}'></script>
<script src='{{asset("js/bootstrap.min.js")}}'></script>
<script src='{{asset("js/slick.min.js")}}'></script>
<script src='{{asset("js/jquery.fancybox.pack.js")}}'></script>
<script src='{{asset("js/jquery.magnific-popup.min.js")}}'></script>
<script src='{{asset("js/waypoints.min.js")}}'></script>
<script src='{{asset("js/jquery.counterup.min.js")}}'></script>

<script src="{{asset('js/ujs/jquery.min.js')}}"></script>
<script src="{{asset('js/ujs/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('js/ujs/popper.min.js')}}"></script>
<script src="{{asset('js/ujs/bootstrap.min.js')}}"></script>
<script src="{{asset('js/ujs/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/ujs/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/ujs/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/ujs/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/ujs/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/ujs/aos.js')}}"></script>
<script src="{{asset('js/ujs/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('js/ujs/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="{{asset('js/ujs/main.js')}}"></script>




@endsection